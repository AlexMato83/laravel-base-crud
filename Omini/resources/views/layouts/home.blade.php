@extends('mainLayout')

@section('main')
  <ul>
    <a href="{{route('create')}}">Crea OMINO</a>

    @foreach ($omini as $omino)
     <li>{{$omino["firstname"]}} {{$omino["lastname"]}} <a href="{{route('show',$omino['id'])}}">vedi dettagli</a></li>

     <br>



    @endforeach
  </ul>
@endsection
