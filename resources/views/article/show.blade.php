@extends('layouts.app')
@section('title', $article->title)

@section('content')

<div class="container">
    <div class="row py-3 justify-content-center">
        <div class="col-md-10 col-lg-8">
            <h3>{{ $article->title }}</h3>
            <div class="mr-1 d-inline">
                <span class="iconify" data-icon="bi:person"></span>
                <span class="mr-2">{{ $article->user->name }}</span>
            </div>
            <div class="mr-2 align-items-center d-inline">
                <span class="iconify" data-icon="bi:folder2-open"></span>
                <span class="mr-2">{{ $article->category->name }}</span>
            </div>
            <div class="mr-2 align-items-center d-inline">
                <span class="iconify" data-icon="bi:calendar"></span>
                <span class="mr-2">{{ $article->created_at->format('d F Y') }}</span>
            </div>

            <div class="pt-4 text-center">
                <img src="{{ $article->image }}" class="img-fluid rounded-lg">
            </div>

            <div class="mt-2 mb-4">
                <div id="preview-text" class="mb-3">
                  <script>
                    const text = `{{ $article->text }}`
                  </script>
                </div>
                @if($article->tags()->count() !== 0)
                  <h5>Tags </h5>
                  @foreach($article->tags as $tag)
                    <a class="btn btn-light btn-outline-dark mr-1 mb-1 btn-sm" href="/artikel/tags" role="button">
                        <span class="iconify" data-icon="bi:tags" data-inline="false"></span> 
                        {{ $tag->name }}
                    </a>
                  @endforeach
                @endif
            </div>

            <div class="row">
                <div class="col">
                    <h2>0 Komentar</h2>
                    <hr class="my3">
                    <div class="alert alert-info">
                      Upss.. Fitur komentar belum aktif :(
                    </div>
                    <!--<div class="row">-->
                    <!--    <div class="col">-->
                    <!--        <h4 class="mb-0">Rido ananda</h4>-->
                    <!--        <small class="text-muted">-->
                    <!--            ridoananda123@gmail.com - <span>-->
                    <!--                3 mins-->
                    <!--            </span>-->
                    <!--        </small>-->
                    <!--        <p class="mt-2">-->
                    <!--            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem laudantium sunt sequi, aassumenda, minus nihil numquam, adipisci soluta labore molestias optio repellat!-->
                    <!--        </p>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection