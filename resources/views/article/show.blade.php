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
                <span class="mr-2">{{ $article->category_id }}</span>
            </div>
            <div class="mr-2 align-items-center d-inline">
                <span class="iconify" data-icon="bi:calendar"></span>
                <span class="mr-2">{{ $article->created_at->format('d M Y') }}</span>
            </div>

            <div class="py-4 text-center">
                <img src="/img/bandre.jpg" class="img-fluid rounded-lg">
            </div>

            <div class="mt-2 mb-4">
                <p style="line-height: 1.9em;">
                    {{ $article->text }}
                </p>
                <a class="btn btn-light btn-outline-dark mr-1 mb-1 btn-sm" href="/artikel" role="button">
                    <span class="iconify" data-icon="bi:tags" data-inline="false"></span> PHP
                </a>
            </div>

            <div class="row">
                <div class="col">
                    <h2>2 Komentar</h2>
                    <hr class="my3">
                    <div class="row">
                        <div class="col">
                            <h4 class="mb-0">Rido ananda</h4>
                            <small class="text-muted">
                                ridoananda123@gmail.com - <span>
                                    3 mins
                                </span>
                            </small>
                            <p class="mt-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem laudantium sunt sequi, aassumenda, minus nihil numquam, adipisci soluta labore molestias optio repellat!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection