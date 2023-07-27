<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<body>
    <h1>Users</h1>


    @if ($name)

        {!! $name !!}
        @else
        No name
    @endif

    <hr>
    {{ now() }} - {{  date('Y')  }}
    <hr>

    @foreach ($items as $key => $item )

        <h2>{{ $item['name'] }} - {{ $item['price'] }}</h2>
    @endforeach

    <a href="dashboard">Dashboard</a>


</body>
</html>
