<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function index() {
        $questions = DB::table('questions')->get();

        return view('questions.index', compact('questions'));
    }

    public function create() {
        return view('questions.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);

        DB::table('questions')->insert([
            'title' => $request->title,
            'content' => $request->content,
            // ! Karna belum menggunakan auth maka sementara saya hardcode
            'user_id' => 1,
        ]);

        return redirect()
            ->route('question.index')
            ->with('success', 'Data berhasil ditambah');
    }
}
