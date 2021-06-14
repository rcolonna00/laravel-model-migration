<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Sono la homapage</h1>

    <ul>
        @foreach ($travels as $travel)
        <li>
            <div>Nome: {{ $travel->name }}</div>
            
            <!-- Se è una stringa null o c'è solo lo zero non lo stamperà --> 
            @if ($travel->description)            
                <div>Description: {{ $travel->description }}</div>
            @endif

        </li>
        @endforeach
    </ul>

</body>
</html>