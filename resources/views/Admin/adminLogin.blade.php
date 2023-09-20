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
<form action="{{route("loginAdmin")}}" method="post">
    @csrf
    <div>Admin</div>
    <input name="login" placeholder="login" type="text" id="">
    <input name="password" placeholder="password" type="password" id="">
    <button type="submit">Login as admin</button>
</form>
</body>
</html>
