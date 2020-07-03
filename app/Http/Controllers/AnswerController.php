<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnswerController extends Controller
{
    public function index($pertanyaan_id) {
        $question = Question::whereId($pertanyaan_id)
        ->with('answers')
        ->first();

        return view('answers.create', compact('question'));
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

        return redirect()->route('answer.index', [$pertanyaan_id])
            ->with('status', 'Jawaban berhasil ditambah');;
    }
}
