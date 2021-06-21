<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>homepage</title>
</head>
<body>
    <h1>*Hello World*</h1>
    <h2>Benvenuto {{$nome}} {{$cognome}}</h2>
    <h3>Classe 32:</h3>
    @if(count($compagni)>0)
        <ul>
            @foreach ($compagni as $compagno)
                <li>
                    {{$compagno}}
                </li>
            @endforeach
        </ul>
    @else    
    <h3>Sei rimasto solo</h3>
    @endif    
</body>
</html>