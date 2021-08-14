@extends('layouts.app')
@section('title', 'Blog - Rido ananda')

@section('content')

@include('layouts.jumbotron')

<div class="container">
  <div class="row">
    <div class="col">
      @isset($tag)
        <h2>Tag: {{ $tag->name }}</h2>
      @elseif (isset($category))
        <h2>Category: {{ $category->name }}</h2>
      @else
       <h2>Artikel</h2>
      @endisset
      <hr class="my3">
    </div>
  </div>
  <div class="row pb-3">
    @foreach ($articles as $article)
      <div class="col-md-6 col-lg-4">
        <a href="/article/{{ $article->slug }}" class="text-decoration-none text-dark">
          <div class="card mb-3">
            <div class="card">
              <img src="{{ $article->image }}" class="card-img-top">
              <div class="card-body">
                  <h5 class="card-title">{{ \Str::words($article->title, 7) }}</h5>
                  <p class="card-text">
                  <div class="mr-1 d-inline-block">
                      <span class="iconify" data-icon="bi:person"></span>
                      <span class="mr-2">{{ $article->user->name }}</span>
                  </div>
                  <div class="mr-2 align-items-center d-inline">
                      <span class="iconify" data-icon="bi:folder2-open"></span>
                      <span class="mr-2">{{ $article->category->name }}</span>
                  </div>
                  </p>
              </div>
              <div class="card-footer">
                <div class="d-flex justify-content-between">
                  <small class="text-muted">{{ $article->created_at->diffForHumans() }}</small>
                  <a href="/artikel/{{ $article->slug }}" class="text-decoration-none text-primary small">Baca selengkapnya <iconify-icon data-icon="bi:arrow-right"></iconify-icon></a>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
    @endforeach
  </div>
</div>
@endsection