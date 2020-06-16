@extends('layout')

@section('main')
  <div class="main">
     @foreach ($cagnoliniDb as $cane)
       <a href="{{route('cane', $cane['id'])}}">{{$cane["nome"]}}</a>


     @endforeach
  </div>
@endsection
