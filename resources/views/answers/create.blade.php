@extends('templates.default')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-8">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <h3>{{ $question->title }}</h3>
                    <h6>{{ $question->content }}</h6>

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
                </div>

                <div class="card-body">
                    <h5 class="card-title">Beri jawaban?</h5>
                    <p class="card-text">
                        <form action="{{ route('answer.store', [$question->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <textarea name="content" id="content" cols="30" rows="3"
                                    class="form-control @error('content') is-invalid @enderror"
                                    placeholder="Silahkan masukkan jawaban anda">{{ old('content') }}</textarea>

                                @error('content')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>

                            <div class="row form-group justify-content-between mr-0">
                                <a href="{{ route('question.index') }}" class="btn btn-secondary ml-2">
                                    Kembali
                                </a>
                                <input type="submit" value="Submit jawaban" class="btn btn-primary">
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
