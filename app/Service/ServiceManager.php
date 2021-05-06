<?php

namespace App\Service;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;
use App\Article;
use App\Contactform;
use App\Comment;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Service\EmailService;


class ServiceManager
{
    public function __construct(EmailService $emailing)
    {
        $this->emailing = $emailing;
    }

    // Authentification Functions

    public function getRolesUser(){
        $roles = Role::all()->where('id','<>',1)->where('id','<>',2);
        return $roles;
    }

    public function registerUser($request)
    {
        $experience = [];
        for($i = 0; $i < count($request['debut']); $i++) {
            array_push($experience, [
                'debut' => $request['debut'][$i],
                'fin' => $request['fin'][$i],
                'description' => $request['description'][$i],
            ]);
        }
        $experience = json_encode($experience);
        $users = User::all();
        $i = 1;
        foreach ($users as $user) {
            if ($request['email'] == $user->email) {
                    $i = 0;
                    break;
            }
        }
        if ($i == 1) {
            $user = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'role_id'=> $request['role_id'],
                'prenom'=> $request['prenom'],
                'telephone'=> $request['telephone'],
                'date_naissance'=> $request['date_naissance'],
                'ville'=> $request['ville'],
                'date_creation'=> $request['date_creation'],
                'domaine'=> $request['domaine'],
                'num_id'=> $request['num_id'],
                'raison_sociale'=> $request['raison_sociale'],
                'boite_postale'=> $request['boite_postale'],
                'avatar' => 'users/default.png',
                'settings' => '{"locale":"fr"}',
                'exp_pro' => $experience,
                'password' => Hash::make($request['password'])
            ]);
            // Auth::guard()->login($user);
            return $user;
        }else{
            return "deja";
        }
    }

    public function activateUser($id)
    {
        return User::where('id',$id)->update(['email_verified_at'=>date('Y/m/d H:i:s')]);
    }

    public function verifyEmailResetPwd($request)
    {
        $user = DB::table("users")
        ->where('email',$request->email)
        ->get();
        if (count($user)<=0) {
            $result = array('type' => 'error', 'message' => "Désolé mais cet email n'est enregistré sur notre plateforme.", 'data' => []);
            return json_encode($result);
        } else {
            $result = array('type' => 'success', 'message' => "Un email vient de vous être envoyé pour confirmer la reinitialisation de votre mot de passe.", 'data' => $user);
            return json_encode($result);
        }
    }

    // Contact page functions

    public function ContactUs($request){
        $contact = Contactform::create([
            'nom' => $request['nom'],
            'email' => $request['email'],
            'message'=> $request['message']
        ]);
        $result = array('type' => 'success', 'message' => "Merci de nous avoir contacté !", 'data' => ["nom"=>$request['nom'],"email"=>$request['email'],"message"=>$request['message']]);
        return json_encode($result);
    }


    // Blog functions


    public function getArticles(){
        $articles = Article::with('auteur','categorie')->get();
        return $articles;
    }

    public function getDetailsArticles($slug){
        $articles = Article::with('auteur','categorie')->where('slug',$slug)->get();
        return $articles[0];
    }

    public function Comment($request){
        $contact = Comment::create([
            'nom' => $request['nom'],
            'email' => $request['email'],
            'comment'=> $request['comment'],
            'article_id'=> $request['id']
        ]);
        $article = Article::find($request['id']);
        $result = array('type' => 'success', 'message' => "Commentaire enregistré avec succès !", 'data' => ["nom"=>$request['nom'],"email"=>$request['email'],"message"=>$request['message'], "comment"=>$request['comment'], "article"=>$article->nom, "article_slug"=>$article->slug]);
        return json_encode($result);
    }

}
