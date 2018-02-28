<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $articles = article::latest()->get();
        return view('article.index', compact('articles'));
    }

    public function create()
    {
        return view('article.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required',
        ]);

        Article::create([
            'name' => request('name'),
            'description' => request('description'),
            'user_id' => auth()->id()
        ]);

        return redirect('/');
    }

    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    public function edit(Article $article)
    {
        if ($article->user_id == auth()->id())
            return view('article.edit', compact('article'));
        return back();
    }

    public function update(Article $article)
    {
        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required'
        ]);

        Article::where('id', $article->id)->update([
            'name' => request('name'),
            'description' => request('description'),
            'user_id' => auth()->id()
        ]);

        return redirect('/articles');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect('/articles');
    }

    public function mine()
    {
        $articles = article::where('user_id', auth()->id())->latest()->get();
        return view('article.index', compact('articles'));
    }
}
