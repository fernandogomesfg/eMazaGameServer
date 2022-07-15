<?php

namespace App\Traits;

use App\Models\Question;
use App\Models\Subject;
use Illuminate\Http\Request;

trait HelperTrait
{
    public function processSubjects(Request $request) {

        $orderDirection = $request->query('direction', 'desc');

        $orderColumn = $request->query('column', 'id');

        $totalPerPage = $request->query('per_page', '3');

        //retorno de dados com paginate()
        $subjects = Subject::orderBy($orderColumn, $orderDirection)->paginate($totalPerPage);

        return response()->json(['sucess' => $subjects ], status:200);
    }

    public function processQuestions(Request $request) {

        $orderDirection = $request->query('direction', 'desc');

        $orderColumn = $request->query('column', 'id');

        $totalPerPage = $request->query('per_page', '10');

        //retorno de dados com paginate()
        $questions = Question::orderBy($orderColumn, $orderDirection)->paginate($totalPerPage);

        return response()->json(['sucess' => $questions ], status:200);
    }
}
