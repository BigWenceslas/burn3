<?php

namespace App\Http\Controllers;

use App\Service\ServiceManager;
// use App\Service\EmailService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $service;

    public function __construct(ServiceManager $service)
    {
        $this->service = $service;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $page = "Accueil";
        // $categoriesProduits = $this->service->getCategoriesProduits();
        return view('front.home',compact('page'));
    }

}