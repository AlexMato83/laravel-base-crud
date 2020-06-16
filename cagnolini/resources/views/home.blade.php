@extends('layout')

@section('main')
  <div class="main">
     @foreach ($cagnoliniDb as $cane)
       <a href="{{route('cane')}}"></a>
       {{$cane["nome"]}}
     @endforeach
  </div>
@endsection
