<x-layout>



<h1>L'utente ha richiesto di diventare revisore</h1>
<p>Nome:{{$user->name}}</p>
<p>Email:{{$user->email}}</p>
<p>Se vuoi renderlo revisore clicca qui:</p>
<a href="{{route('revisor.make', compact('user'))}}">Rendi revisore</a>




</x-layout>