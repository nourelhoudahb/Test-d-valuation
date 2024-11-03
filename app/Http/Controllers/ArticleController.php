<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    
    public function index(){

        $articles = Article::all();
        return view('Article.articles', ['articles' => $articles]);

    }
    public function create(){

        return view('Article.create');
    }


    public function store(Request $request){
        $data = $request->validate([
            'title' => 'required',
            'content' => 'nullable'
        ]);

        $newArticle = Article::create($data);

        return redirect(route('Article.articles'));
      
    }



    public function edit(Article $articles){
        
        return view('Article.edit', ['articles' => $articles]);
    }


    public function update(Article $articles, Request $request){
        $data = $request->validate([
            'title' => 'required',
            'content' => 'nullable'
        ]);

        $articles->update($data);

        return redirect(route('Article.articles'))->with('success', 'Article Updated Succesffully');

    }



    public function destroy(Article $articles){
        $articles->delete();
        return redirect(route('Article.articles'))->with('success', 'Article deleted Succesffully');
    }
}
