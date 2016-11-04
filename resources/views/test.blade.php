<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <form action="{{ url('register') }}" method="POST" accept-charset="utf-8">
        {{ csrf_field() }}
        {{ $user->email }}
        <input type="text" name="name" value="{{ $user->name }}" placeholder="">
        <input type="password" name="password" value="" placeholder="">
        <input type="password" name="password_confirmation" value="" placeholder="">
        <button type="submit">Register</button>
    </form>
</body>
</html>