@extends('pages.admin.admin')
@section('title', 'SHOW')

{{--start section--}}
@section('content')


    <div> {{$post->id}}. {{$post->title}}</div>


    <div class="mt-4">
        <a href="{{route('admin.edit', $post->id)}} " class="btn btn-secondary">EDITE</a>
    </div>


    <div class="mt-4">
        <a href="{{ route('admin.post') }}" class="btn btn-secondary">
            Back to All Posts
        </a>
    </div>





    <div class="mt-4">
        <!-- Кнопка-триггер модального окна -->
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $post->id }}">
            Delete
        </button>

        <!-- Модальное окно -->
        <div class="modal fade" id="deleteModal-{{ $post->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirm Deletion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this post?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Confirm Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--end section--}}
@endsection
