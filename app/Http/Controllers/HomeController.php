<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use File;
use Auth;

class HomeController extends Controller
{
    public function addpost()
    {
    	return view('post');
    }

    public function storeposts(Request $request)
    {
    	if(Input::file("image")){
    		$dp=public_path('images');
    		$filename=uniqid().".jpg";
    		$img=Input::file("image")->move($dp, $filename);
    	}

    	Posts::create([
    		'name'=>$request->input("name");
    		'picture'=>$filename;
    		'description'=>$request->input("description");
    		'user_id'=>Auth::user()->user_id;
    	])
    }
}
