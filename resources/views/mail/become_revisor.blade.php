{{-- Mail inviata da: {{{$user->name}}} <br>
eMail: {{{$user->email}}} <br>
Utente registrato il: {{{$user->created_at->format('d/m/Y')}}} <br>
<br>
Messaggio: <br>
<br>
{{{$content['aboutYou']}}} <br>
<br>
<br>
Se vuoi renderlo revisore clicca qui: <a href="{{route('make.revisor', compact('user'))}}">Rendi revisore.</a> --}}




<!DOCTYPE html>
<html>
    <body style="background-color: #fff; padding: 20px;">
        <div style=" padding: 30px 30px;background-color:#3e4247;height: 100%; border-radius: 15px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
<h5 style="color: #27a776; font-size:24px;">Mail inviata da:</h5> <p style="color: #fff; font-size:18px;">{{{$user->name}}}</p>
<h5 style="color: #27a776; font-size:24px;">eMail:</h5> <p style="color: #fff; font-size:18px;">{{{$user->email}}}</p>
<h5 style="color: #27a776; font-size:24px;">Utente registrato il:</h5><p style="color: #fff; font-size:18px;">{{{$user->created_at->format('d/m/Y')}}}</p>

<h5 style="color: #27a776; font-size:24px;">Messaggio:</h5>

<p style="color: #fff; font-size:18px;">{{{$content['aboutYou']}}}</p>
<br>
<br>
<p style="color: #fff; font-size:18px;">Se vuoi renderlo revisore clicca qui: </p><a href="{{route('make.revisor', compact('user'))}}"><p style="color: #fff; font-size:18px;">Rendi revisore.</p></a>
        </div>
    </body>
