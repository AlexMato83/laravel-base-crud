<?php
namespace App\Http\Controllers;

use App\Cagnolini;

use Illuminate\Http\Request;

class Cagnolini_Controller extends Controller
{
    public function index(){

      $cagnoliniDb = Cagnolini::all();

      return view("home", compact("cagnoliniDb"));
    }

    public function show($id){

       $cani = Cagnolini::all();
       $cane = $cani->where("id", $id);
       $cane = $cane[$id-1];
      return view("cane", compact("cane","id"));
    }
}
