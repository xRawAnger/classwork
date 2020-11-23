<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
class CalculatorController extends Controller
{
    public function calcLikes($id=1)
    {
    	return Posts::withCount(["likes"])->where("id",$id)->get();
    }
    public function calcComments($id)
    {
    	return Posts::withCount(["comments"])->where("id",$id)->get();
    }
    //CalculatorController::calcLikes(post_id)
    //CalculatorController::calcComments(post_id)
}
