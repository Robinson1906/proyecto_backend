<?php

namespace App\Http\Controllers;



class userController extends Controller
{
    //
    public function listProducts(){

        return view("Products/products");
    }

    public function detalle(){
        return view('Products/detail');
    }
}
