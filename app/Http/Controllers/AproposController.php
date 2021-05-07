<?php

namespace App\Http\Controllers;

use App\Service\ServiceManager;
use App\Service\EmailService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AproposController extends Controller
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
        $page = "A Propos";
        // $articles = $this->service->getArticles();
        return view('front.apropos',compact('page'));
    }

}