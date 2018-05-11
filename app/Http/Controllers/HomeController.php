<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\User;
use Flash;
use Carbon\Carbon;

class HomeController extends Controller
{

    private $userTo;
    private $data;


    public function __construct()
    {
//        $this->middleware('auth');
        Carbon::setLocale('es');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function divsColors(){
        return view('div_colors.index');
    }


    public function fibonacci(){
        return view('fibonacci.index');
    }

    public function sendMail(){
        $users = User::orderBy('id', 'ASC')->get();

        foreach($users as $user){


            $this->data = array
            (
                'userName' => $user->name,
            );



            $this->userTo = $user->email;

            Mail::send('emails.reportNotice', $this->data , function($msj){
                $msj->subject('new email alert from www.misitio.com '. Carbon::now()->format('d/m/Y H:i:s'));
                $msj->to([$this->userTo]);
            });

        }

        Flash::success("se han enviado ".$users->count()." correos exitosamente");

        return view('welcome');




    }
}
