@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="{{route('admin.post.index')}}">Управление постами</a>
            </div>

        </div>
    </div>

@endsection