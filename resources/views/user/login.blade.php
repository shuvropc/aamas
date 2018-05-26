<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2> Login your account</h2>

<form method="post">
    @csrf

    Email <input type="email" name="email" required><br><br>
    Password <input type="password" name="password" required><br><br>

    <input type="submit" value="Login">

</form>
<h3>{{$message}}</h3>
</body>
</html>