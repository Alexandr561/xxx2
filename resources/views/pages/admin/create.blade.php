@extends('pages.admin.admin')

@section('content')

    <form action="{{route('posts.store')}}" method="post">
        @csrf
        <div class="form-group mb-3">
            <label for="title" >Title</label>
            <input value="{{ old('title') }}"
                   type="text" name="title" class="form-control" id="title" placeholder="Enter title" required>


            @error('title')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        {{--        content--}}
        <div class="form-group mb-3">
            <label for="content" >Content</label>
            <textarea name="content" id="content" class="form-control" placeholder="Enter content" required>{{ old('content') }}</textarea>

            @error('content')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        {{--        img--}}
        <div class="form-group mb-3">
            <label for="image" >Image</label>
            <input value="{{ old('image') }}"
                   type="text" name="image" class="form-control" id="image" placeholder="Enter image" required>
        </div>

        {{--category--}}
        <div class="mb-3">
            <label for="category_id" class="form-label">Категория</label>
            <select class="form-select @error('category_id') is-invalid @enderror"
                    id="category_id"
                    name="category_id"
                    required>
                <option value="">-- Выберите категорию --</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{--     Tags   --}}
        <div class="form-group">
            <label for="tags">Tags</label>
            <select class="form-select" multiple aria-label="Multiple select example" id="tags" name="tags[]">
                @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->title}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create Post</button>
        </div>

        <div class="mt-4">
            <a href="{{ route('admin.post') }}" class="btn btn-secondary">
                Back to All Posts
            </a>
        </div>

    </form>
@endsection
