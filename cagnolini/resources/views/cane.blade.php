@extends('layout')

@section('main')

     <div class="datiCanePadre">
       <div class="main2">
       <p>nome: <h1>{{$cane["nome"]}}</h1></p><br>
       <p>razza: {{$cane["tipo"]}}</p><br>
       <p>altezza: {{$cane["altezza"]}}</p><br>
       <p>peso: {{$cane["peso"]}}</p>
       </div>
     </div>



@endsection
