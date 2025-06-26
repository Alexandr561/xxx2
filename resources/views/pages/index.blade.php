@extends('main.main')
@section('title', 'INDEX')

{{--start section--}}
@section('content')

    @foreach($posts as $post)
        <a href="{{route('posts.show', $post->id)}}" class="text-decoration-none">
            <div class="p-3 mb-2 bg-body-tertiary rounded hover-bg-light">
                {{$post->id}}. {{$post->title}}
            </div>
        </a>
    @endforeach

    <div class="mt-4">
        <a href="{{ route('posts.create') }}" class="btn btn-secondary">
            CREATE POST
        </a>
    </div>

    <div class="mt-5">
        {{$posts->links()}}
    </div>

    {{--end section--}}
@endsection
