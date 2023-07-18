<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Richiesta diventa revisore</title>
</head>
<body>
    
    <h1>L'utente ha richiesto di diventare revisore</h1>
    
    <p>Nome:{{$user->name}}</p>
    <p>Email:{{$user->email}}</p>
    <p>Lettera di presentazione: {{$presentation}}</p>
    <p>Se vuoi renderlo revisore clicca qui:</p>
    <a href="{{route('revisor.make', compact('user'))}}">Rendi revisore</a>
</body>
</html>







