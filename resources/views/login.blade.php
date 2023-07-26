@section('administrator')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <h2>LOGIN</h2>
    <form action="{{ url('/administrator') }}" method="post">
        @csrf
        <table>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id="email" class="form-control mt-3 mb-3"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id="password" class="form-control"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit"value="Login" class="btn btn-primary"></td>
            </tr>
        </table>
</body>
</html>