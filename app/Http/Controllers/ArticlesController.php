<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticlesController
{
public function show($articleId) {
    return view('article', [
        'article' => Article::find($articleId)
    ]);
}
}
