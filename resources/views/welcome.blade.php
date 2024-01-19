<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
</head>
<body>
<div>
    <ul>
        <li>
            <a href="{{ route('home') }}">home</a>
        </li>
        <li>
            <a href="{{ route('login') }}">login</a>
        </li>
        <li>
            {{-- <a href="{{ route('sayhello/tarmeez') }}">hello</a> --}}
        </li>
    </ul>
</div>
</body>
</html>
