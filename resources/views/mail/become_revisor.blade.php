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
    <body style="background-color: #fff; padding: 30px;">
        <div style="display: flex; align-items: center;justify-content:center; margin-top: 25px; padding: 30px 30px;background-color:#5933b1;height:60px;border-radius:15px;
        box-shadow:0 2px 4px rgba(0, 0, 0, 0.1);">
    <h3 style="color: #FFC107; font-size:28px;" >CardBazaar</h3>
    </div>

    <div style="height:100%; width: 100%; margin-top: 30px; border-radius: 10px;display: flex;flex-direction: column; align-items: start; background-color: rgb(201, 195, 195);" >
<div style="display:flex; justify-content: flex-start;margin-left: 30px; align-items: center;"> <p style="color: #27a776; font-size:22px;"><strong> Mail inviata da:</strong></p> <p style="color: #000; font-size:18px; margin-bottom: 10px;">{{{$user->name}}}</p></div>
<div style="display:flex; justify-content: flex-start;margin-left: 30px;"><p style="color: #27a776; font-size:22px;">eMail:</strong></p> <p style="color: #000; font-size:18px;margin-bottom: 10px;">{{{$user->email}}}</p></div>
<div style="display:flex; justify-content: flex-start;margin-left: 30px;"><p style="color: #27a776; font-size:22px;">Utente registrato il:</strong></p><p style="color: #000; font-size:18px;margin-bottom: 10px;">dsjvhbsdjvp haspv p</p></div>

<div style="display:flex; justify-content: flex-start;margin-left: 30px;"><p style="color: #27a776; font-size:22px;">Messaggio:</strong></p>
<p style="color: #000; font-size:18px;margin-bottom: 10px;">{{{$content['aboutYou']}}}</p></div>
<div style="display:flex; justify-content: flex-start;margin-left: 30px;"><p style="color: #000; font-size:18px;">Se vuoi renderlo revisore clicca qui: </p><a href="{{route('make.revisor', compact('user'))}}"><p style="color: #000; font-size:18px;margin-bottom: 10px;">Rendi revisore.</p></a></div>
</div>
</body>
