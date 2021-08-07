@extends('admin.layouts.app')
@section('title', 'Edit Article '.$article->title.'- Rido ananda')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Edit Article</h1>
</div>
<div class="row">
  <div class="col-md-10">
  	@include('components.error')
    <form method="post" action="{{ route('admin.article.update', $article->id) }}" enctype="multipart/form-data">
      @method('PUT')
  		@include('admin.article.form-control')
		  <button type="submit" class="btn btn-primary">Edit!</button>
		</form>
  </div>
</div>
@endsection