<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnswerController extends Controller
{
    public function index($pertanyaan_id) {
        $answers = DB::table('answers as a')
        // ->select('q', 'a')
        ->join('questions as q', 'q.id', 'a.question_id')
        ->where('q.id', $pertanyaan_id)
        ->get();

        return $answers;
    }

    public function store(Request $request, $pertanyaan_id) {
        $this->validate($request, [
            'content' => 'required',
        ]);

        $question = DB::table('questions')
        ->where('id', $pertanyaan_id)
            ->first();

        if($question) {
            DB::table('answers')->insert([
                'content' => $request->content,
                'question_id' => $question->id,
                'user_id' => 1
            ]);
        }

        return redirect()->route('question.index');
    }
}
