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
<h2>Create Aamas Account </h2>

<form method="post">
    @csrf

    Name <input type="text" name="userName" required><br/><br>
    Email <input type="email" name="userEmail" required><br><br>
    Password <input type="password" name="userPassword" required><br><br>
    Confirm Password <input type="password" name="conUserPass" required><br><br>

    <input type="submit" value="Create Account">



</form>
<h3>{{$message}}</h3>
</body>
</html>