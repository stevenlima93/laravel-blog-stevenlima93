<?php

namespace App\Http\Controllers;


use App\Article;

class UserController extends Controller
{
    public function index($id){

        $articles = Article::where('user_id', $id)->where('published', 1)->get();
        return view('articles/index', ['articles'=>$articles, 'title'=>'Users']);
    }
}
