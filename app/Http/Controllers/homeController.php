<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function get_deneme (){
    $adim="benim adım yunus emre ekinci";
        return view('deneme')-> with('isim', $adim);
    }

    public function get_form (){
        return view('form');
    }
    public function post_form (Request $request){
    $sayi1=$request->sayi1;
    $sayi2=$request->sayi2;
    $toplam=$sayi1+$sayi2;


        return view('form')->with('toplam', $toplam);
    }




}
