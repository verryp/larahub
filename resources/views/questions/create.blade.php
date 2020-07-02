@extends('templates.default')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Buat Pertanyaan</h5>
                    <p class="card-text">
                        <form action="{{ route('question.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="name">Judul</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="title" placeholder="Judul pertanyaan" value="{{ old('title') }}" required
                                    autocomplete="title" autofocus>

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
                                    placeholder="Pertanyaan anda">{{ old('content') }}</textarea>

                                @error('content')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>

                            {{-- <div class="form-group">
                                <label for="author_id">Penulis</label>
                                <select name="author_id" id="author_id"
                                    class="form-control select2 @error('author_id') is-invalid @enderror">
                                    <option value="">Pilih Penulis</option>
                                    @foreach ($authors as $author)
                                    <option value="{{ old('author_id') ?? $author->id }}">{{ $author->name }}</option>
                            @endforeach
                            </select>

                            @error('author_id')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                </div> --}}

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
