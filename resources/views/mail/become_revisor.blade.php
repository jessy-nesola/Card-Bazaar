<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-color: #fff;
            padding: 0;
            margin: 0;
            background-image: url('../../../public/assets/images/background.png');
            background-size: cover;
            background-repeat: repeat;

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
            margin-bottom: 30px;
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
            color: #5933b1;
            font-size: 20px;
        }

        .value {
            color: #000;
            font-size: 18px;
        }

        .make-revisor-button {
            background-color: #5933b1;
            color: #fff;
            font-size: 18px;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .make-revisor-button a {
            text-decoration: none;
        }
        .footer {
            background-color: #5933b1;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="header">
        <h3>CardBazaar</h3>
    </div>

    <div class="content">
        <div class="info">
            <p class="label"><strong>Mail inviata da: </strong></p>
            <p class="value">{{$user->name}}</p>
        </div>
        <div class="info">
            <p class="label"><strong>eMail: </strong></p>
            <p class="value">{{$user->email}}</p>
        </div>
        <div class="info">
            <p class="label"><strong>Utente registrato il: </strong></p>
            <p class="value">{{$user->created_at->format('d/m/Y')}}</p>
        </div>
        <div class="info">
            <p class="label"><strong>Messaggio: </strong></p>
            <p class="value">{{$content['aboutYou']}}</p>
        </div>
        <div class="info">
            <button class="make-revisor-button"><a href="{{route('make.revisor', compact('user'))}}"
                    style="color: #FFC107">Rendi revisore</a></button>
        </div>
    </div>
        <div class="footer">
            <p>Copyright &copy; Designed by DevelHopers, 2023</p>
          </div>
</body>

</html>
