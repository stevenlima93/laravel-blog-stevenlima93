<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($id){
        $articles = Article::where('category_id', $id)->where('published', 1)->get();
        return view('articles/index', ['articles'=>$articles, 'title'=>'Categories']);
    }

}
