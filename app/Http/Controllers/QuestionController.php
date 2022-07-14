<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //metodo responsavel por testar a requisao da rota API
    public function getData(){

        return response()->json(['Requisicao realizada com sucesso...']);
    }
}
