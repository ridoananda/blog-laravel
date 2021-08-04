<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attr = $request->validate([
            'title' => 'required',
            'thumbnail' => 'required|max:3000|mimes:jpg,jpeg,png',
            'category_id' => 'required|numeric',
            'text' => 'required'
        ]);
        $thumbnail = request()->file('thumbnail')->store('/img/thumbnail');
        $attr['thumbnail'] = $thumbnail;
        $attr['slug'] = \Str::slug(request('title'));
        $post = Article::create($attr);
        return redirect()->route('admin.article.admin')->with('success', 'Article was successful added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $article = Article::where('slug', $article->slug)->first();
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('admin.article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        return redirect()->to('/admin/home')->with('success', 'Article was successful added!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete('id', $article->id);
        return redirect()->back()->with('success', 'Article was deleted!');
    }

    public function admin(Article $article)
    {
        $articles = $article->all();
        return view('admin.article.index', compact('articles'));
    }
}
