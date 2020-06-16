@extends('layout')

@section('main')
  <div class="main">
    <h2>Visiona i nostri amici pelosi:</h2>
     @foreach ($cagnoliniDb as $cane)
       <a href="{{route('cane', $cane['id'])}}">{{$cane["nome"]}}</a>


     @endforeach
  </div>
@endsection
