<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
  public function index()
  {
    $articles = new Article;
    return view('app', [
      'articles' => $articles->paginate(5)
    ]);
  }
}
