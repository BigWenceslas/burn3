<?php

namespace App\Http\Controllers;

use App\Service\ServiceManager;
use App\Service\EmailService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;

use App\User;


class AuthenticationController extends Controller
{
    use AuthenticatesUsers;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $service;

    public function __construct(ServiceManager $service, EmailService $emailing)
    {
        $this->service = $service;
        $this->emailing = $emailing;
        $this->middleware('guest')->except('logout');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index_login()
    {
        $page = "Connexion";
        // $categoriesProduits = $this->service->getCategoriesProduits();
        return view('front.login',compact('page'));
    }

    public function index_register()
    {
        $page = "Inscription";
        $roles = $this->service->getRolesUser();
        return view('front.register',compact('page','roles'));
    }

    public function redirectTo()
    {
        return app()->getLocale() . RouteServiceProvider::HOME;
    }

    /** 
     * Register api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function register(Request $request) 
    { 
        $user = $this->service->registerUser($request);
        if ($user == "deja") {
            $result = array('type' => 'error', 'message'=>'Cet utilisateur existe déjà', 'data'=>'');
            return json_encode($result);
        }else{
            if (empty($user->id)) {
                $result = array('type' => 'error', 'message'=>'Une erreur est survenue', 'data'=>'');
                return json_encode($result);
            }else {
                $data = array('emails' => [0=>array(
                    'subject'=>'Bienvenue sur BURN',
                    'name'=>$user->name,
                    'email'=>$user->email,
                    'body'=>'Hello <strong>'.$user->name.'</strong> <br> <br> Bienvenue sur BURN, nous sommes ravis de vous compter parmi nos membres à travers le monde... Activez votre compte en clique sur ce lien <a href="http://localhost:8000/activate-user/'.$user->id.'">Activation</a>'
                )]);
                $test = $this->emailing->sendEmail($data);
                $result = array('type' => 'success', 'message'=>'Bienvenue sur BURN', 'data'=>$user);
                return json_encode($result);
            }
        }

        // return response()->json(['type'=>'success','message'=>'Bienvenue sur Burn','data'=>$user], 200); 
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }
        
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (empty(Auth::user()->email_verified_at)) {
                Auth::logout();
                $request->session()->flush();
                $request->session()->regenerate();
                return response()->json([
                    'message' => 'Identifiants invalides.',
                    'type' => 'error'
                ], 200);
            } else {
                return response()->json([
                    'type' => 'success',
                    'message' => 'Bienvenue '.Auth::user()->name,
                    'role_id' => Auth::user()->role_id
                ], 200);
            }
        }else {
            $this->incrementLoginAttempts($request);
            return response()->json([
                'message' => 'Identifiants invalides.',
                'type' => 'error'
            ], 200);
        }
    }

    public function activate_user($id) 
    { 
        $user = $this->service->activateUser($id);
        return redirect()->route('login');
    }

    public function verifyEmailResetPwd(Request $request)
    {
        $forgot = $this->service->verifyEmailResetPwd($request);
        if (json_decode($forgot)->type != "error") {
            $data = array('emails' => [0=>array(
                'subject'=>'Reinitialisation de mot de passe',
                'name'=>json_decode($forgot)->data[0]->name,
                'email'=>json_decode($forgot)->data[0]->email,
                'body'=>'
                <td style="text-align: justify;">
                    <div style="width:100%;display:flex;justify-content:center;align-items:center;margin-bottom: 3rem;text-align: center;">
                        <img src="https://image.freepik.com/vecteurs-libre/logo-code-degrade-pour-developpeurs-web_23-2148830996.jpg" style="width:8rem;height:auto;">
                    </div>
                  <h1>Réinitialisation de mot de passe</h1>
                  <h2>Hello <strong>'.json_decode($forgot)->data[0]->name.'</strong>, <br>
                  Vous avez fait une demande de reinitialisation de mot de passe, si vous souhaitez continuer, veuiller cliquer sur le bouton ci-dessous</h2>
                  <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                    <tbody>
                      <tr>
                        <td align="left">
                          <table border="0" cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td> <a href="'.route('viewResetPwd',['id'=>json_decode($forgot)->data[0]->id]).'" target="_blank">Reinitialiser mon mot de passe</a> </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>'
            )]);
            $test = $this->emailing->sendEmail($data);
        }
        return $forgot;
    }

    public function viewResetPassword($id)
    {
        $page = "Réinitialiser mot de passe";
        return view('front.reset',compact('page','id'));
    }

    public function ResetPassword(Request $request) 
    { 
        $user = $this->service->resetPassword($request);
        return $user;
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/');
    }



}