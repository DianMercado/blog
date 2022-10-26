<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function catalog1(){
        return "Estoy en catalog1 :D";
    }

    public function show($id){
        return "Estoy en " .$id;
    }

    public function create(){
        return "Estoy en create";
    }
    public function edit($id){
        return "Estoy en edit" .$id;
    }


}