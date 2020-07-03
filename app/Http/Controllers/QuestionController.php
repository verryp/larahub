<?php

namespace App\Http\Controllers;

use App\Question;
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

        Question::create([
            'title' => $request->title,
            'content' => $request->content,
            // ! Karna belum menggunakan auth maka sementara saya hardcode
            'user_id' => 1,
        ]);

        return redirect()
            ->route('question.index')
            ->with('status', 'Data berhasil ditambah');
    }

    public function show($id) {
        $question = Question::where('id', $id)
            ->with('answers')
            ->first();

        return view('questions.show', compact('question'));
    }

    public function edit($id) {
        $question = DB::table('questions')->where('id', $id)->first();

        return view('questions.edit', compact('question'));
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);

        Question::where('id', $id)->update([
            'title' => $request->title,
            'content' => $request->content,
            // ! Karna belum menggunakan auth maka sementara saya hardcode
            'user_id' => 1,
        ]);

        return redirect()
            ->route('question.index')
            ->with('status', 'Data berhasil diubah');
    }

    public function destroy($id) {
        DB::table('questions')->where('id', $id)->delete();

        return redirect()
            ->route('question.index')
            ->with('status', 'Data berhasil dihapus');
    }
}
