@extends('layouts.app')
@section('title', 'Blog - Rido ananda')

@section('content')

<div class="container">
    <div class="row py-3 justify-content-center">
        <div class="col-md-10 col-lg-8">
            <h3>Judul Artikel</h3>
            <div class="mr-1 d-inline">
                <span class="iconify" data-icon="bi:person"></span>
                <span class="mr-2">Rido ananda</span>
            </div>
            <div class="mr-2 align-items-center d-inline">
                <span class="iconify" data-icon="bi:folder2-open"></span>
                <span class="mr-2">laravel</span>
            </div>
            <div class="mr-2 align-items-center d-inline">
                <span class="iconify" data-icon="bi:clock"></span>
                <span class="mr-2">12:00</span>
            </div>

            <div class="py-4 text-center">
                <img src="/img/bandre.jpg" class="img-fluid rounded-lg">
            </div>

            <div class="mt-2 mb-4">
                <p style="line-height: 1.9em;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione asperiores dolores tenetur reprehenderit nobis, aut tempora? Dolorem maxime iusto ea nam nobis voluptatum, modi labore provident delectus laudantium voluptates quis debitis deserunt consectetur, est vel distinctio quia enim doloremque quibusdam et asperiores? Quas aperiam, explicabo quibusdam debitis libero at rerum.
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