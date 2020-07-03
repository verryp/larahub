@extends('templates.default')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Pertanyaan</h5>
                    <p class="card-text">
                        <form action="{{ route('question.update', [$question->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method("PUT")

                            <div class="form-group">
                                <label for="name">Judul</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="title" placeholder="Judul pertanyaan"
                                    value="{{ old('title') ?? $question->title }}" required autocomplete="title"
                                    autofocus>

                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="content">Pertanyaan</label>
                                <textarea name="content" id="content" cols="30" rows="3"
                                    class="form-control @error('content') is-invalid @enderror"
                                    placeholder="Pertanyaan anda">{{ old('content') ?? $question->content}}</textarea>

                                @error('content')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>

                            <div class="row form-group justify-content-end mr-0">
                                <input type="submit" value="simpan" class="btn btn-primary">
                            </div>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
