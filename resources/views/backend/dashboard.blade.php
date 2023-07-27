<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>

<body>
    <h1>Dashboard</h1>
    <h2>Demo</h2>
    <a href="{{ route('user.name', 'Ali khan shan') }}">Demo</a>
    <hr>

    @if (Session::has('login') && Session::get('role') == 'Admin')
        <h2>Company: {{ Session::get('company') }}  </h2>
        Name : {{ session()->get('user') }}
        <br>
        Class : {{ session()->get('class') }}
    @endif
</body>

</html>
