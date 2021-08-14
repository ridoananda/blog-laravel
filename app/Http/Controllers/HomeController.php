<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Article, Tag, Category};

class HomeController extends Controller
{
  public function index()
  {
    $articles = new Article;
    return view('app', [
      'articles' => $articles->with(['tags', 'user', 'category'])->paginate(5),
      'tags' => Tag::limit(20)->get(),
      'categories' => Category::limit(8)->get(),
    ]);
  }

  public function articles() {
    return view('article', [
      'articles' => Article::with(['tags', 'user', 'category'])->paginate(8),
    ]);
  }

  public function tag(Tag $tag) {
    return view('article', [
      'tag' => $tag,
      'articles' => $tag->articles()->with('user', 'category')->paginate(10)
    ]);
  }

  public function tags() {
    return view('tags', [
      'tags' => Tag::get()
    ]);
  }

  public function category(Category $category) {
    return view('article', [
      'category' => $category,
      'articles' => $category->articles()->with('user', 'category')->paginate(10)
    ]);
  }

  public function categories() {
    return view('categories', [
      'categories' => Category::get()
    ]);
  }
}
