<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    //metodo responsavel por recupera a lista das perguntas
    public function index (Request $request){

        return response()->json(['sucess' => 'Disciplinas retomadas com sucesso'], status:200);
    }

    //metodo responsavel por adicionar novas perguntas
    public function store(Request $request){

        return response()->json(['error' => 'Do momento, nao e possivel adicionar Disciplinas'], status:403);
    }

    //metodo para mostar detalhes de uma pergunta
    public function show (Request $request, Subject $subject){

        return response()->json(['error' => 'Do momento, nao e possivel mostrar detalhes de uma Disciplina'], status:403);
    }

    //metodo para fazer update de uma pergunta
    public function update (Request $request, Subject $subject){

        return response()->json(['error' => 'Do momento, nao e possivel actualizar a Disciplina'], status:403);
    }

    //metodo para remover uma pergunta
    public function destroy (Request $request, Subject $subject){

        return response()->json(['error' => 'Do momento, nao e possivel remover a Disciplina'], status:403);
    }
}
