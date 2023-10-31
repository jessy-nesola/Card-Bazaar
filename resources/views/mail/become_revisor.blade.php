<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: #fff;
            padding: 0;
            margin: 0;
        }
        .header {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0px;
            padding: 0px;
            background-color: #5933b1;
            height: 60px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h3 {
            color: #FFC107;
            font-size: 28px;
        }
        .content {
            height: 400px;
            width: 70%;
            margin-top: 30px;
            margin-left: 15%;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: start;
            background-color: rgb(201, 195, 195);
        }
        .info {
            display: flex;
            justify-content: flex-start;
            margin-left: 30px;
            align-items: center;
            margin-bottom: 10px;
        }
        .label {
            color:blueviolet;
            font-size: 22px;
        }
        .value {
            color: #000;
            font-size: 18px;
        }
        .make-revisor-link {
            color: #000;
            font-size: 18px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h3>CardBazaar</h3>
    </div>

    <div class="content">
        <div class="info">
            <p class="label"><strong>Mail inviata da:</strong></p>
            <p class="value">{{$user->name}}</p>
        </div>
        <div class="info">
            <p class="label"><strong>eMail:</strong></p>
            <p class="value">{{$user->email}}</p>
        </div>
        <div class="info">
            <p class="label"><strong>Utente registrato il:</strong></p>
            <p class="value">{{$user->created_at->format('d/m/Y')}}</p>
        </div>
        <div class="info">
            <p class="label"><strong>Messaggio:</strong></p>
            <p class="value">{{$content['aboutYou']}}</p>
        </div>
        <div class="info">
            <p class="value">Se vuoi renderlo revisore clicca qui: <a class="make-revisor-link" href="{{route('make.revisor', compact('user'))}}">Rendi revisore.</a></p>
        </div>
    </div>
</body>
</html>

