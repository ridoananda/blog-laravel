@if (session('success'))
<div class="alert alert-success" role="alert">
    <strong>{{ session('success') }}</strong>
</div>
@endif
@if (session('fail'))
<div class="alert alert-danger" role="alert">
    <strong>{{ session('fail') }}</strong>
</div>
@endif