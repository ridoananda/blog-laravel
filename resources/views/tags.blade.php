@extends('layouts.app')
@section('title', 'Tags')

@section('content')

@include('layouts.jumbotron')

<div class="container">
    <div class="row py-5 justify-content-center">
        <div class="col-md-10">
            <h2>Tags</h2>
            <div class="row">
                <div class="col-lg-6">
                    <div class="input-group my-2">
                        <input type="text" class="form-control rounded-pill mr-2" placeholder="Cari tag">
                        <div class="input-group-append">
                            <button class="btn rounded-circle btn-outline-secondary" type="submit"><span class="iconify" data-icon="bi:search" data-inline="false"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my3">
            @foreach ($tags as $tag)
                <a class="btn btn-light btn-outline-dark mr-1 mb-2" href="/tag/{{ $tag->slug }}" role="button">
                    <span class="iconify" data-icon="bi:tags" data-inline="false"></span> {{ $tag->name}}
                </a>
            @endforeach
        </div>
    </div>
</div>

@endsection