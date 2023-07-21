<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">

    <title>Richiesta diventa revisore</title>

    <style>
        .background {
            background-color:  #284b63;
            height: 150px;
            padding: 10px;
        }

        .cardBorder{
            color:#d9d9d9;
            border: #353535 2px solid;
            border-radius: 3%;
        }

        .cardCustom {
            margin-right: auto;
            margin-left: auto;
            margin-top: 20px;
            margin-bottom: 20px;
            width: 250px;
            box-shadow: 0 15px 25px rgba(129, 124, 124, 0.2);
            height: fit-content;
            border-radius: 20%;
            backdrop-filter: blur(14px);
            background-color: rgba(255, 255, 255, 0.2);
            padding: 10px;
            text-align: center;
        }

        .btnRevisoreMail{
            background:#ffffff;
            border: #353535 2px solid;
            border-radius: 10px;
        }

        a{
            text-decoration: none;
            color: #353535
        }

        .cardCustom img {
            height: 60%;
        }
    </style>
</head>
<body class="background">
    <div class="">
        <div class="cardCustom cardBorder">
            <h1>Presto.it</h1>
            <h3>DevSud</h3>
            
        </div>
    </div>

    <div>
        <div class="cardCustom">
            <h4>L'utente, {{$user->name}},  ha richiesto di diventare revisore</h4>
            <p>Nome:{{$user->name}}</p>
            <p>Email:{{$user->email}}</p>
            <p>Lettera di presentazione: {{$presentation}}</p>
            <p>Per renderlo revisore clicca qui:</p>
            <button class="btnRevisoreMail"><a href="{{route('revisor.make', compact('user'))}}">Rendi revisore</a></button>
            
        </div>
    </div>
</body>
</html>








