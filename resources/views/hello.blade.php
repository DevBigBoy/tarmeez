<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($value > 20 )
        <div style="background: orange">
            <h1>value is greater than 20</h1>
        </div>
    @elseif ($value > 10)
        <div style="background: green">
            <h1>Value is greater than 10</h1>
        </div>
    @else
        <div style="background: red">
            <h1>value is less than or equal to 10</h1>
        </div>
    @endif


    <h1>Welcome to our website {{ $name }}</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis nihil culpa voluptatum libero ex itaque enim sed doloribus. Optio harum consequuntur perferendis ex quam recusandae magnam reiciendis dolorem ducimus rerum!</p>


</body>
</html>
