@extends('layout.app')
@section('title', 'Blog - Rido ananda')

@section('content')

@include('layout.jumbotron')

<div class="container">
    <div class="row my-4">
        <div class="col-md-6 col-lg-4">
            <a href="/show" class="text-decoration-none text-dark">
                <div class="card mb-3">
                    <div class="card">
                        <img src="/img/bandre.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Belajar Laravel</h5>
                            <p class="card-text">
                            <div class="mr-1 d-inline-block">
                                <span class="iconify" data-icon="bi:person"></span>
                                <span class="mr-2">Rido ananda</span>
                            </div>
                            <div class="mr-2 align-items-center d-inline">
                                <span class="iconify" data-icon="bi:folder2-open"></span>
                                <span class="mr-2">laravel</span>
                            </div>
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between">
                                <small class="text-muted">3 mins ago</small>
                                <a href="/show" class="text-decoration-none text-primary small">Baca selengkapnya <iconify-icon data-icon="bi:arrow-right"></iconify-icon></a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection