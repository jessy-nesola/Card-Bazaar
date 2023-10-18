Mail inviata da: {{{$user->name}}} <br>
eMail: {{{$user->email}}} <br>
Utente registrato il: {{{$user->created_at->format('d/m/Y')}}} <br>
<br>
Messaggio: <br>
<br>
{{{$content['aboutYou']}}} <br>
<br>
<br>
Se vuoi renderlo revisore clicca qui: <a href="{{route('make.revisor', compact('user'))}}">Rendi revisore.</a>