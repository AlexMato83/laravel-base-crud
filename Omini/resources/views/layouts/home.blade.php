@extends('mainLayout')

@section('main')
  <ul>
    @foreach ($omini as $omino)
     <li>{{$omino}}</li>

     <a href="{{route('show',$omino['id'])}}">vedi dettagli</a><br>



    @endforeach
  </ul>
@endsection
