<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //metodo responsavel por recupera a lista das perguntas
    public function index (Request $request){

        return response()->json(['sucess' => 'Perguntas retomadas com sucesso'], status:200);
    }

    //metodo responsavel por adicionar novas perguntas
    public function store(Request $request){

        return response()->json(['error' => 'Do momento, nao e possivel adicionar perguntas'], status:403);
    }

    //metodo para mostar detalhes de uma pergunta
    public function show (Request $request, Question $question){

        return response()->json(['error' => 'Do momento, nao e possivel mostrar detalhes de uma pergunta'], status:403);
    }

    //metodo para fazer update de uma pergunta
    public function update (Request $request, Question $question){

        return response()->json(['error' => 'Do momento, nao e possivel actualizar a pergunta'], status:403);
    }

    //metodo para remover uma pergunta
    public function destroy (Request $request, Question $question){

        return response()->json(['error' => 'Do momento, nao e possivel remover a pergunta'], status:403);
    }

}
