<?php

namespace App\Service;

use App\User;
use App\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Mail;

class EmailService
{
    public function sendEmail($request){
        foreach ($request['emails'] as $key => $value) {
            Mail::send('email',
            array(
               'name' => $value['name'],
               'email' => $value['email'],
               'subject' => $value['subject'],
               'bodyMessage' => $value['body']
            ), function($message) use ($value)
            {
                $message->from("drthugsteph@gmail.com","BURN");
                $message->to($value['email'], $value['name'])->subject($value['subject']);
            });
        }
    }

    public function sendEmailNewsletter($destinataires, $sujet, $message, $fichiers){
        $logo_url = env('APP_URL')."/front/img/logo.png";
        $facebook_url = env('APP_URL')."/front/img/whitebook.png";
        $twitter_url = env('APP_URL')."/front/img/whiteTweet.png";
        $instagram_url = env('APP_URL')."/front/img/whiteInsta.png";
        $footer = Footer::first();
        foreach ($destinataires as $key => $value) {
            Mail::send('emailNewsletter',
            array(
               'name' => $value,
               'email' => $value,
               'sujet' => $sujet,
               'logo_url' => $logo_url,
               'twitter_url' => $twitter_url,
               'facebook_url' => $facebook_url,
               'instagram_url' => $instagram_url,
               'footer' => $footer,
               'sujet' => $sujet,
               'bodyMessage' => $message
            ), function($message) use ($value, $sujet, $fichiers)
            {
                $message->from(config('app.mailApp'),config('app.mailName'));
                $message->to($value, "Paris-Camfret")->subject($sujet);
                if ($fichiers != null) {
                    foreach ($fichiers as $key => $piece_jointe) {
                        $message->attach($piece_jointe->getRealPath());
                    }
                }
            });
        }
    }
}
