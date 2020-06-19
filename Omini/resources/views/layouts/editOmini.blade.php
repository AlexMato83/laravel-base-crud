@extends('mainLayout')

@section('main')
  <div class="editOmini">
    <h2>Omino selezionato:</h2><br>
    <form class="" action="{{route('update',$omino['id'])}}" method="post">
      @csrf
      @method("POST")
      <label for="firstname">FIRSTNAME</label>
      <input type="text" name="firstname" value="{{$omino['firstname']}}"><br><br>

      <label for="lastname">LASTNAME</label>
      <input type="text" name="lastname" value="{{$omino['lastname']}}"><br><br>

      <label for="address">ADDRESS</label>
      <input type="text" name="address" value="{{$omino['address']}}"><br><br>

      <label for="code">CODE</label>
      <input type="text" name="code" value="{{$omino['code']}}"><br><br>

      <label for="state">STATE</label>
      <input type="text" name="state" value="{{$omino['state']}}"><br><br>

      <label for="phoneNumber">PHONENUMBER</label>
      <input type="text" name="phoneNumber" value="{{$omino['phoneNumber']}}"><br><br>

      <label for="rule">RULE</label>
      <input type="text" name="rule" value="{{$omino['rule']}}"><br><br>

      <br>
      <button type="submit" name="submit">SUBMIT</button>
    </form>
  </div>
@endsection
