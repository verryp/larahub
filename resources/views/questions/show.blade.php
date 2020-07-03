@extends('templates.default')

@section('content')
<div class="container-fluid mx-auto">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class=" row no-gutters">
                    <div class="card-body">
                        <div class="row justify-content-between">
                            <h3 class="card-title">{{ $question->title }}</h3>
                            <a href="{{ route('question.index') }}" class="btn btn-light">Kembali</a>
                        </div>
                        <h5 class="card-text">{{ $question->content}}</h5>

                        <h5 class="mt-4">List jawaban: </h5>
                        <ul>
                            @if (count($question->answers) > 0)
                            @foreach ($question->answers as $answer)
                            <li>{{ $answer->content }}</li>
                            @endforeach
                            @else
                            --
                            @endif
                        </ul>

                        <div class="row justify-content-end mt-4">
                            <a href="{{ route('answer.index', [$question->id]) }}" class="btn btn-link">Buat pertanyaan
                                ?</a>
                        </div>
                    </div>
                </div>
                <div class="text-right card-footer">
                    <h6 class="card-text">
                        <small class="text-muted">
                            Ditambah
                            <span class="font-italic">
                                {{ \Carbon\Carbon::parse($question->created_at)->locale('id')->diffForHumans() }}
                            </span>
                            dan diubah
                            <span class="font-italic">
                                {{ \Carbon\Carbon::parse($question->updated_at)->locale('id')->diffForHumans() }}
                            </span>
                        </small>
                    </h6>
                </div>
            </div>
        </div>
    </div>
    @endsection
