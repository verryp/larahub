@extends('templates.default')

@section('content')
<div class="container mx-auto">
    <div>
        <a href="{{ route('question.create') }}" class="btn btn-primary" type="button">Tambah</a>
        {{-- <button type="button" class="btn btn-primary" btn-lg btn-block">Tambah</button> --}}
    </div>
    <div class="mt-3">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">Id</th>
                    <th>Title</th>
                    <th>Pertanyaan</th>
                    <th>Total Suka</th>
                    <th>Total Tidak disukai</th>
                    <th>Jawaban</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($questions as $question)
                <tr>
                    <td>{{ $question->id }}</td>
                    <td>{{ $question->title }}</td>
                    <td>{{ $question->content }}</td>
                    <td>{{ $question->count_like }}</td>
                    <td>{{ $question->count_dislike }}</td>
                    <td>
                        <a href="{{ route('answer.index', [ $question->id]) }}" class="btn btn-secondary ">
                            jawaban
                        </a>
                    </td>
                    <td class="text-center">
                        <form method="POST" id="delete-form" action="{{ route('question.destroy', $question->id) }}">
                            @csrf
                            @method('delete')

                            <a href="{{ route('question.edit', [ $question->id]) }}" class="btn btn-warning mx-1 my-2">
                                Edit
                            </a>
                            <a href="{{ route('question.show', [ $question->id]) }}" class="btn btn-info mx-1 my-2">
                                Tampil
                            </a>

                            <input type="submit" value="hapus" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
