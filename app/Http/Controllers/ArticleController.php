<?php

namespace App\Http\Controllers;

use App\Models\{Article, Tag, Category};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
  public function index()
  {
    //
  }

  public function create()
  {
    return view('admin.article.create',[
      'tags' => Tag::all(),
      'categories' => Category::all(),
      'article' => new Article,
    ]);
  }

  public function store(Request $request)
  {
    $attr = $request->validate([
      'title' => 'required',
      'thumbnail' => 'required|image|max:3000|mimes:jpg,jpeg,png',
      'category_id' => 'required|numeric',
      'tags' => 'required|array',
      'text' => 'required'
    ]);
    $thumbnail = request()->file('thumbnail')->store('/img/thumbnail');
    $attr['thumbnail'] = $thumbnail;
    $attr['user_id'] = auth()->user()->id;
    $attr['slug'] = \Str::slug(request('title'));
    $article = Article::create($attr);
    $article->tags()->attach(request('tags'));
    
    return redirect()->route('admin.article.admin')->with('success', 'Article was successful added!');
  }

  public function show(Article $article)
  {
    $article = Article::where('slug', $article->slug)->first();
    return view('article.show', compact('article'));
  }

  public function edit(Article $article)
  {
    return view('admin.article.edit', [
      'article' => $article,
      'tags' => Tag::get(),
      'categories' => Category::get()
    ]);
  }

  public function update(Request $request, Article $article)
  {
    $attr = $request->validate([
      'title' => 'required',
      'thumbnail' => 'image|max:3000|mimes:jpg,jpeg,png',
      'category_id' => 'required|numeric',
      'tags' => 'required|array',
      'text' => 'required'
    ]);
    if (request()->file('thumbnail')) {
      \Storage::delete($article->thumbnail);
      $thumbnail = request()->file('thumbnail')->store('/img/thumbnail');
    } else {
      $thumbnail = $article->thumbnail;
    }
    $attr['thumbnail'] = $thumbnail;
    $article->update($attr);
    $article->tags()->sync(request('tags'));
    
    return redirect()->route('admin.article.admin')->with('success', 'Article was updated!');
  }

  public function destroy(Article $article)
  {
    \Storage::delete($article->thumbnail);
    $article->tags()->detach($article->tags);
    $article->delete('id', $article->id);
      return redirect()->back()->with('success', 'Article was deleted!');
  }

  public function index_admin(Article $article)
  {
      $articles = $article->with('category')->get();
      return view('admin.article.index', compact('articles'));
  }
}
