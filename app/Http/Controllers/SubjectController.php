<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use App\Traits\HelperTrait;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    use HelperTrait;

    //metodo responsavel por recupera a lista das disciplinas
    public function index (Request $request){

        return $this->processSubjects($request);
    }

    //metodo responsavel por adicionar novas disciplinas
    public function store(Request $request){

        return response()->json(['error' => 'Do momento, nao e possivel adicionar Disciplinas'], status:403);
    }

    //metodo para mostar detalhes de uma disciplina
    public function show (Request $request, Subject $subject){

        return response()->json(['error' => 'Do momento, nao e possivel mostrar detalhes de uma Disciplina'], status:403);
    }

    //metodo para fazer update de uma disciplina
    public function update (Request $request, Subject $subject){

        return response()->json(['error' => 'Do momento, nao e possivel actualizar a Disciplina'], status:403);
    }

    //metodo para remover uma disciplina
    public function destroy (Request $request, Subject $subject){

        return response()->json(['error' => 'Do momento, nao e possivel remover a Disciplina'], status:403);
    }
}
