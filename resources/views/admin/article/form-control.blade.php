@csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ $article->title ?? old('title') }}">
  </div>
  <div class="custom-file mb-3">
	  <input type="file" class="custom-file-input" id="thumbnail" name="thumbnail">
	  <label class="custom-file-label" for="thumbnail">Choose thumbnail</label>
	</div>
  <select class="custom-select mb-2" name="category_id">
	  <option selected disabled>Select Category</option>
	  <option value="1">One</option>
	  <option value="2">Two</option>
	  <option value="3">Three</option>
	</select>
  <label for="tag">Tags</label>
  <select class="custom-select select2" name="tags[]" multiple="multiple" id="tag">
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
  <div class="form-group mt-2">
    <label for="text-editor">Text</label>
    <div id="text-editor">
        <!-- Tips: Editor.md can auto append a `<textarea>` tag -->
        <textarea style="display:none;" name="text" rows="10"></textarea>
    </div>
  </div>
  <script type="text/javascript">
    const VALUE = "<?= $article->text ?? old('text') ?>"
  </script>
  <!-- <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->