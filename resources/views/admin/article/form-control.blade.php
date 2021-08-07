@csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ $article->title ?? old('title') }}">
  </div>
  <div class="custom-file mb-3">
	  <input type="file" class="custom-file-input" id="thumbnail" name="thumbnail">
	  <label class="custom-file-label" for="thumbnail">Choose thumbnail</label>
	</div>
	  @if ($article->thumbnail)
	    <img src="{{ $article->image }}" width="150" height="150" class="mb-3 rounded">
	  @endif
  <select class="custom-select mb-2" name="category_id">
	  <option selected disabled>Select Category</option>
	  @foreach ($categories as $category)	    <option value="{{ $category->id }}" {{ $category->id == $article->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
	  @endforeach
	</select>
  <label for="tag">Tags</label>
  <select class="custom-select select2" name="tags[]" multiple="multiple" id="tag">
    @foreach ($article->tags as $tag)
      <option selected value="{{ $tag->id }}">{{ $tag->name }}</option>
    @endforeach
    @foreach ($tags as $tag)
      <option value="{{ $tag->id }}">{{ $tag->name }}</option>
    @endforeach
  </select>
  <div class="form-group mt-2">
    <label for="text-editor">Text</label>
    <div id="text-editor">
        <!-- Tips: Editor.md can auto append a `<textarea>` tag -->
        <textarea style="display:none;" name="text" rows="10">
          {{ $article->text }}
        </textarea>
    </div>
  </div>
  <!-- <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->