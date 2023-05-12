@extends('dashboard.layouts.main_dashboard')
@section('titleBody')
    Tambah Blog Baru
@endsection

@section('body')
    <div class="col-lg-8">
        <form action="/dashboard/blog" method="post" class="mb-4" enctype="multipart/form-data">
            @csrf
            <div class="mb-2">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title') }}" required>
            </div>
            @error('title')
                <p class="text-danger">
                    {{ $message }}*
                </p>
            @enderror
            <div class="mb-2">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                    value="{{ old('slug') }}" required>
            </div>
            @error('slug')
                <p class="text-danger">
                    {{ $message }}*
                </p>
            @enderror
            <div class="mb-2">
                <label for="category_id" class="form-label">Category</label>
                <select class="form-select " aria-label="Default select example" name="category_id" id="category_id">
                    <option selected>Pilih Kategori Blog</option>
                    @foreach ($dataCategory as $item)
                        @if (old('category_id') == $item->id)
                            <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                        @else
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            @error('category_id')
                <p class="text-danger">
                    {{ $message }}*
                </p>
            @enderror

            <div class="mb-3">
                <label for="img" class="form-label">Choose Thumbnail Blog</label>
                <input class="form-control  @error('img') is-invalid @enderror" type="file" id="img"
                    name="img">
            </div>
            @error('img')
                <p class="text-danger">
                    {{ $message }}*
                </p>
            @enderror

            <div class="mb-2">
                <label for="description" class="form-label">Deskripsi</label>
                <input id="description" type="hidden" name="description" value="{{ old('description') }}">
                <trix-editor input="description"></trix-editor>
                @error('description')
                    <p class="text-danger">
                        {{ $message }}*
                    </p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-2">Simpan Blog</button>
        </form>
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug')

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>
@endsection
