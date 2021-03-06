<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $userid = "admin@xtar.islands.mv";
        $useremail = Auth::user()->email;
                
        if($userid == $useremail) {

            return view('xtarislands.home');
        } else {
            return view('home');

        }
    }
    public function blog()
    {
        return view('blog.ibnqasim');
    }
}
