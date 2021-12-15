<!DOCTYPE html>
<html>
<head>
     <title></title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha512-rO2SXEKBSICa/AfyhEK5ZqWFCOok1rcgPYfGOqtX35OyiraBg6Xa4NnBJwXgpIRoXeWjcAmcQniMhp22htDc6g==" crossorigin="anonymous" />
</head>
<body>
     <div class="container mt-5">
          <div class="col-md-8 offset-2">
          		<h2 class="text-center">laravel try catch Example - Nicesnippets.com</h2>
               <div class="card">
                    <div class="card-header text-center">
                         <h3>Search for user by ID</h3>
                    </div>
                    <div class="card-body">
                         @if (session('error'))
                              <div class="alert alert-danger">{{ session('error') }}</div>
                         @endif
                         <form action="{{ route('users.search') }}" method="POST">
                              @csrf
                              <div class="form-group">
                                   <input id="user_id"  name="user_id" class="form-control" type="text" value="{{ old('user_id') }}" placeholder="User ID">
                              </div>
                              <input class="btn btn-info" type="submit" value="Search">
                         </form>
                    </div>
               </div>
          </div>
     </div>
</body>
</html>