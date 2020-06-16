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

       $cane = Cagnolini::findOrFail($id);
      return view("cane", compact("cane"));
    }
}
