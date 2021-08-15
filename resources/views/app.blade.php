@extends('layouts.app')
@section('title', 'Blog - Rido ananda')

@section('content')

@include('layouts.jumbotron')

<div class="container">
  <div class="row">
    <div class="col">
      <h2>Artikel</h2>
      <hr class="my3">
    </div>
  </div>
  <div class="row pb-3">
    @foreach ($articles as $article)
      <div class="col-md-6 col-lg-4">
        <a href="{{ route('article.show', $article->slug) }}" class="text-decoration-none text-dark">
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
                  <a href="/article/{{ $article->slug }}" class="text-decoration-none text-primary small">Baca selengkapnya <iconify-icon data-icon="bi:arrow-right"></iconify-icon></a>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
    @endforeach
  </div>
  <div class="row pb-2">
    <div class="col d-flex justify-content-center">
      {{ $articles->links() }}
    </div>
  </div>
  <div class="row">
    <div class="col d-flex justify-content-center">
      <script type="text/javascript">
      	atOptions = {
      		'key' : 'ac919b92abd59dfabaa4146ad2f7aa6a',
      		'format' : 'iframe',
      		'height' : 50,
      		'width' : 320,
      		'params' : {}
      	};
      	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.effectivedisplayformat.com/ac919b92abd59dfabaa4146ad2f7aa6a/invoke.js"></scr' + 'ipt>');
      </script>
    </div>
  </div>

  <div class="row mt-2 pb-4 justify-content-center">
      <div class="col-md-10">
          <h2>Tags</h2>
          <hr class="my3">
          @foreach ($tags as $tag)
            <a class="btn btn-light btn-outline-dark mr-1 mb-2" href="{{ route('tag.show', $tag->slug) }}" role="button">
              <span class="iconify" data-icon="bi:tags" data-inline="false"></span> {{ $tag->name }}
            </a>
          @endforeach
          <script type="text/javascript">
          	atOptions = {
          		'key' : 'ac919b92abd59dfabaa4146ad2f7aa6a',
          		'format' : 'iframe',
          		'height' : 50,
          		'width' : 320,
          		'params' : {}
          	};
          	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.effectivedisplayformat.com/ac919b92abd59dfabaa4146ad2f7aa6a/invoke.js"></scr' + 'ipt>');
          </script>
      </div>
  </div>

  <div class="row pb-5 justify-content-center">
      <div class="col-md-10">
          <h2>kategori</h2>
          <hr class="my3">
          @foreach ($categories as $category)
            <a class="btn btn-light btn-outline-dark mr-1 mb-2" href="{{ route('category.show', $category->slug) }}" role="button">
              <span class="iconify" data-icon="bi:folder2-open"></span> {{ $category->name }}
            </a>
          @endforeach
           <script type="text/javascript">
          	atOptions = {
          		'key' : 'ac919b92abd59dfabaa4146ad2f7aa6a',
          		'format' : 'iframe',
          		'height' : 50,
          		'width' : 320,
          		'params' : {}
          	};
          	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.effectivedisplayformat.com/ac919b92abd59dfabaa4146ad2f7aa6a/invoke.js"></scr' + 'ipt>');
          </script>
      </div>
  </div>
</div>



@endsection