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
        // $categoriesProduits = $this->service->getCategoriesProduits();
        return view('front.register',compact('page'));
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
                    'body'=>'Hello <strong>'.$user->name.'</strong> <br> <br> Bienvenue sur BURN, nous sommes ravis de vous compter parmi nos membres à travers le monde...'
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
            if (Auth::user()->role_id == 2) {
                return response()->json([
                    'success' => 'Login ok membre.'
                ], 200);
            } else {
                return response()->json([
                    'success' => 'Login ok.'
                ], 200);
            }
        }else {
            $this->incrementLoginAttempts($request);
            return response()->json([
                'error' => 'Identifiants invalides.'
            ], 200);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/');
    }



}