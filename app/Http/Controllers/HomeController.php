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
      'tags' => Tag::limit(11)->get(),
      'categories' => Category::limit(7)->get(),
    ]);
  }
}
