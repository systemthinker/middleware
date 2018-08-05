<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

  session(['Robbert'=>'admin']);
//  session()->forget('Robbert');
        //session()->flush();



       session()->flash('message','Your post has been created');

        return $request->session()->get('message');
//
//        return view('home');
    }



}
