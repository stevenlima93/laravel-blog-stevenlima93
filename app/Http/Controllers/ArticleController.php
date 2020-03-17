<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){

        $articles = Article::where('published', 1)->get();

        return view('articles/index', ['articles'=>$articles, 'title'=>'Articles']);
    }
    public function article($id){
        $article = Article::where('id', $id)->where('published', 1)->get()->first();
        return view('articles/article', ['article'=>$article]);
    }
}
