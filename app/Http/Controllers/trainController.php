<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class trainController extends Controller
{
   public function index(){

    $Trains = Train::where('data_partenza', '>=', '2024-02-19')->get();
    return view('home',compact('Trains'));
   }
}
