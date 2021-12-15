<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha512-rO2SXEKBSICa/AfyhEK5ZqWFCOok1rcgPYfGOqtX35OyiraBg6Xa4NnBJwXgpIRoXeWjcAmcQniMhp22htDc6g==" crossorigin="anonymous" />
</head>
<body>
    <div class="container mt-5">
        <div class="col-md-8 offset-3">
        	<h2 class="text-center">laravel try catch Example - Nicesnippets.com</h2>
            <div class="card">
                <div class="card-header text-center">
                    <h3>User Detail</h3>
                </div>
                <div class="card-body">
                    <table class="borded">
                        <tr>
                            <td>Name :</td>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <td>Email :</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>