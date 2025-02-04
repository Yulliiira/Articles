@extends('templates.main')
@section('main')
    <div class="row mt-4">
        <div class="col-md-8 offset-md-2"> <!-- Центрируем форму -->
            <form action="{{ route('articles.create') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror" id="title">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    <textarea name="body" class="form-control @error('body') is-invalid @enderror" id="body">{{old('body')}}</textarea>
                    @error('body')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="preview" class="form-label">Preview</label>
                    <input class="form-control @error('preview') is-invalid @enderror" name="preview" type="file" id="preview">
                    @error('preview')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection
