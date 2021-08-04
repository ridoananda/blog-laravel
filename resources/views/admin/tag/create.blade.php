@extends('admin.layouts.app')
@section('title', 'Create Article - Rido ananda')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Create Article</h1>
</div>
<div class="row">
  <div class="col-md-8">
  	@include('components.error')
    <form method="post" action="{{ route('admin.article.store') }}" enctype="multipart/form-data">
  		@include('admin.article.form-control')
		  <button type="submit" class="btn btn-primary">Create!</button>
		</form>
  </div>
</div>
@endsection