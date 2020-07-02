@extends('templates.default')

@section('content')
<div class="container mx-auto">
    <div>
        <a href="{{ route('question.create') }}" class="btn btn-primary" type="button">Tambah</a>
        {{-- <button type="button" class="btn btn-primary" btn-lg btn-block">Tambah</button> --}}
    </div>
    <div class="mt-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">Id</th>
                    <th>Title</th>
                    <th>Pertanyaan</th>
                    <th>Total Suka</th>
                    <th>Total Tidak disukai</th>
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
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
