<?php

namespace App\Traits;

use App\Models\Subject;
use Illuminate\Http\Request;

trait HelperTrait
{
    public function processSubjects(Request $request) {

        //retorno de dados com all()
        //$subjects = Subject::all();

        //retorno de dados com get()
        $subjects = Subject::orderBy('created_at', 'desc')->get();

        //retorno de dados com paginate()
        //$subjects = Subject::orderBy('created_at', 'desc')->paginate(2);

        return response()->json(['sucess' => $subjects ], status:200);
    }
}
