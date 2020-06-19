@extends('mainLayout')

@section('main')
  <div class="dettagliOmini">
    <h2>Omino selezionato:</h2>
    <p>nome: <b>{{$omino["firstname"]}}</b></p>
    <p>nome: <b>{{$omino["lastname"]}}</b></p>
    <p>nome: <b>{{$omino["address"]}}</b></p>
    <p>nome: <b>{{$omino["code"]}}</b></p>
    <p>nome: <b>{{$omino["state"]}}</b></p>
    <p>nome: <b>{{$omino["phoneNumber"]}}</b></p>
    <p>nome: <b>{{$omino["rule"]}}</b></p>

  </div>
@endsection
