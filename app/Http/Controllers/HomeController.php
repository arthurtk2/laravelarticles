<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Posts;
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
    public function index()
    {  
        return view('admin');
    }

    public function store(Request $request){

        $posts = $request->all();

        Posts::create($posts);

        return redirect('/');
    }

    public function main_index(){

        $posts = Posts::all();

        return view('main_page',compact('posts'));
    }

}
