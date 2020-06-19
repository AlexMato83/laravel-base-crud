<?php

namespace App\Http\Controllers;

use App\Omino;
use Illuminate\Http\Request;

class OminiController extends Controller
{

    public function index(){

      $omini = Omino::all();
      
      return view("layouts.home", compact("omini"));
    }
    public function show($id){

      $omino = Omino::findOrFail($id);
      return view("layouts.showOmino", compact("omino"));
    }

    public function edit($id){
      $omino = Omino::findOrFail($id);
      return view("layouts.editOmini", compact("omino"));
    }

    public function update(Request $request, $id){
      $ominoData = $request->all();
      $omino = Omino::findOrFail($id);

      $omino -> firstname = $ominoData["firstname"];
      $omino -> lastname = $ominoData["lastname"];
      $omino -> address = $ominoData["address"];
      $omino -> code = $ominoData["code"];
      $omino -> state = $ominoData["state"];
      $omino -> phoneNumber = $ominoData["phoneNumber"];
      $omino -> rule = $ominoData["rule"];

      $omino -> save();

      return redirect()-> route("show", $omino['id']);
    }

    public function create(){
      // $omino = Omino::findOrFail($id);
      return view("layouts.createOmini");
    }

    public function store(Request $request){
      $ominoData = $request->all();
      $omino = new Omino;

      $omino -> firstname = $ominoData["firstname"];
      $omino -> lastname = $ominoData["lastname"];
      $omino -> address = $ominoData["address"];
      $omino -> code = $ominoData["code"];
      $omino -> state = $ominoData["state"];
      $omino -> phoneNumber = $ominoData["phoneNumber"];
      $omino -> rule = $ominoData["rule"];

      $omino -> save();

      return redirect()-> route("home");
    }
}
