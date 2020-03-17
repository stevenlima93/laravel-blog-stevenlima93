<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;

class Category extends Model
{
    public function index(){
        return $this->belongsTo(Article::class);
    }
}
