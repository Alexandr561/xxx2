@extends('pages.admin.admin')

@section('content')
@foreach($posts as $post)
    <a href="{{ route('admin.show', $post->id) }}" class="text-decoration-none">
        <div class="p-3 mb-2 bg-body-tertiary rounded hover-bg-light">
            {{ $post->id }}. {{ $post->title }}
        </div>
    </a>
@endforeach

<div class="mt-4">
    <a href="{{ route('admin.create') }}" class="btn btn-secondary">
        CREATE POST
    </a>
</div>

<div class="mt-5">
    {{ $posts->withQueryString()->links() }}
</div>
@endsection
