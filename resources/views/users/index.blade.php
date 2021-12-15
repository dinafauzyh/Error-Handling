<h3 class="page-title text-center">Search for user by ID</h3>

@if (session('error'))
<div class="alert alert-danger">{{ session('error') }}</div>
@endif

<form action="{{ route('users.search') }}" method="POST">
    @csrf
    <div class="form-group">
    <input id="username" class="form-control" name="username" type="text" value="{{ old('username') }}" placeholder="Username">
    </div>
    <input class="btn btn-info" type="submit" value="Search">
</form>