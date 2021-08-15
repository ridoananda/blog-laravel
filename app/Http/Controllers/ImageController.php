<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
  public function markdown()
  {
    request()->validate([
      'editormd-image-file' => 'image|mimes:jpg,jpeg,png,gif|max:5000'
    ]);
    $image = request()->file('editormd-image-file');
    return response()->json([
      'success' => 1,
      'url' => $image->store('/img/article')
    ]);
  }
}
