@extends('admin.layouts.app_admin')

@section('content')

<div class="row">
    @foreach($posts as $post)

        <div class="col-md-4">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->text_preview }}</p>
            <a href="/blog/{{$post->slug}}"><img src="{{$post->image_preview}}"></a>
        </div>

    @endforeach
</div>


@endsection