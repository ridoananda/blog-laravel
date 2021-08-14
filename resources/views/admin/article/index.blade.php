@extends('admin.layouts.app')
@section('title', 'Manage Articles - Rido ananda')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Articles</h1>
  @include('components.alert')
</div>
<div class="row">
  <div class="col">
    <div class="card shadow mb-4">
      <div class="card-header py-3 justify-content-between d-flex align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Data Articles</h6>
        <a href="{{ route('admin.article.create') }}" class="btn btn-sm btn-primary">
					<i class="fas fa-plus"></i> Create Article
				</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Thumbnail</th>
                <th>Text</th>
                <th>Published</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            	@foreach ($articles as $article)
            		<tr>
            			<td>{{ $article->title }}</td>
            			<td>{{ $article->category->name }}</td>
            			<td>
                    <img src="{{ $article->image }}" width="70" height="70" class="rounded">   
                  </td>
            			<td>{{ \Str::words($article->text, 8) }}</td>
            			<td>{{ $article->created_at->format('d M Y') }}</td>
            			<td>
            				<a href="{{ route('article.show', $article->slug) }}" class="badge badge-info">
            					<i class="fas fa-eye"></i> Show
            				</a>
            				<a href="{{ route('admin.article.edit', $article->id) }}" class="badge badge-success">
            					<i class="fas fa-pencil-alt"></i> Edit
            				</a>
            				<form action="{{ route('admin.article.destroy', $article->id) }}" method="post">
            					@method('DELETE')
            					@csrf
            					<button type="submit" class="badge badge-danger btn" onclick="return confirm('Delete this article??')">
	            					<i class="far fa-trash-alt"></i> Delete
	            				</button>
            				</form>
            			</td>
            		</tr>
            	@endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection