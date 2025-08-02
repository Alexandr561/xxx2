@extends('main.main')
@section('title', 'INDEX')

{{--start section--}}
@section('content')

{{--    @foreach($posts as $post)--}}
{{--        <a href="{{route('posts.show', $post->id)}}" class="text-decoration-none">--}}
{{--            <div class="p-3 mb-2 bg-body-tertiary rounded hover-bg-light">--}}
{{--                {{$post->id}}. {{$post->title}}--}}
{{--            </div>--}}
{{--        </a>--}}
{{--    @endforeach--}}

{{--<div>--}}
{{--    <p>Test здеся</p>--}}
{{--    @foreach($posts as $post)--}}
{{--        <div>--}}
{{--            Id: {{$post->id}},<br>  Title: {{$post->title}},<br>--}}
{{--        </div>--}}
{{--        <br>--}}
{{--    @endforeach--}}
{{--</div>--}}
    <h1>Добавил заголовок в index.blade</h1>
<div>
    <p>Test здеся category</p>
    <div>категории:</div>
    <br>
    @foreach($categories as $category)
        <div>
             {{$category->id}}. {{$category->name}} <br>
        </div>
        <br>
    @endforeach
</div>



{{--    <div class="mt-4">--}}
{{--        <a href="{{ route('posts.create') }}" class="btn btn-secondary">--}}
{{--            CREATE POST--}}
{{--        </a>--}}
{{--    </div>--}}

{{--    <div class="mt-5">--}}
{{--        {{$posts->withQueryString()->links()}}--}}
{{--    </div>--}}

    {{--end section--}}
@endsection
