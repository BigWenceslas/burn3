<?php

namespace App\Http\Controllers;

use App\Service\ServiceManager;
use App\Service\EmailService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $page = "Blog";
        $articles = $this->service->getArticles();
        return view('front.blog.index',compact('page','articles'));
    }

    public function blog_category($slug)
    {
        $page = "Catégorie";
        $articles = $this->service->getArticlesByCategory($slug);
        return view('front.blog.category_article',compact('page','articles'));
    }

    public function details($slug)
    {
        $page = "Blog";
        $article = $this->service->getDetailsArticles($slug);
        $articles = $this->service->getLastFiveArticles();
        return view('front.blog.details',compact('page','article','articles'));
    }

    public function Comment(Request $request) 
    { 
        $contact = $this->service->Comment($request);
        if (json_decode($contact)->type != "error") {
            $data = array('emails' => [0=>array(
                'subject'=>'Article commenté',
                'name'=>json_decode($contact)->data->name,
                'email'=>json_decode($contact)->data->email,
                'body'=>'
                <td style="text-align: justify;">
                    <div style="width:100%;display:flex;justify-content:center;align-items:center;margin-bottom: 3rem;text-align: center;">
                        <img src="https://image.freepik.com/vecteurs-libre/logo-code-degrade-pour-developpeurs-web_23-2148830996.jpg" style="width:8rem;height:auto;">
                    </div>
                  <h1>Merci de nous avoir contacté</h1>
                  <h2>Hello <strong>'.json_decode($contact)->data->name.'</strong>, <br>
                  Votre commentaire a bien été envoyé pour l\'article <a href="http://localhost:8000/blog/'.json_decode($contact)->data->article_slug.'">'.json_decode($contact)->data->article.'</a></h2>
                </td>'
            )]);
            $test = $this->emailing->sendEmail($data);
            $data1 = array('emails' => [0=>array(
                'subject'=>'Un nouveau commentaire dans le blog',
                'name'=>json_decode($contact)->data->name,
                'email'=>"drthugsteph@gmail.com",
                'body'=>'
                <td style="text-align: justify;">
                    <div style="width:100%;display:flex;justify-content:center;align-items:center;margin-bottom: 3rem;text-align: center;">
                        <img src="https://image.freepik.com/vecteurs-libre/logo-code-degrade-pour-developpeurs-web_23-2148830996.jpg" style="width:8rem;height:auto;">
                    </div>
                  <h1>Un nouveau message de contact</h1>
                  <h2>Hello <strong>Admin</strong>, <br>
                  Vous venez de recevoir un nouveau commentaire dans le blog sur l\'article <a href="http://localhost:8000/blog/'.json_decode($contact)->data->article_slug.'">'.json_decode($contact)->data->article.'</a> dont voici les détails: <br>
                  Nom: <strong>'.json_decode($contact)->data->name.'</strong>, <br>
                  Email: <strong>'.json_decode($contact)->data->email.'</strong>, <br>
                  Commentaire: '.json_decode($contact)->data->comment.', <br></h2>
                </td>'
            )]);
            $test1 = $this->emailing->sendEmail($data1);
        }
        return $contact;
    }

}