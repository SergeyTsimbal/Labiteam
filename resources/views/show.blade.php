@extends('admin.layouts.app_admin')

@section('content')



    <div class="row">
        <div class="col-sm-5">
            <a class="btn btn-block btn-default" href="/blog">Все посты</a>
        </div>

        <div class="col-sm-8 blog-main">

            <div class="blog-post">
                <h2 class="blog-post-title">{{$post->title}}</h2>
                <p class="blog-post-meta">{{$post->created_at}}</p>

                <p>
                    {{$post->full_text}}
                </p>

            </div>

        </div>

    </div>

@endsection
