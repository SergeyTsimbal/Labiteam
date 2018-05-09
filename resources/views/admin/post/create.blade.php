@extends('admin.layouts.app_admin')

@section('content')
    <div class="col-sm-6">
        <h2>Добавить пост:</h2>

        <form action="{{route('admin.post.store')}}" enctype="multipart/form-data" method="post">

            {{csrf_field()}}
            <div class="form-group">
                <label for="title">Заголовок:</label>
                <input class="form-control" type="text" name="title" id="title" required>
            </div>

            <input class="form-control" type="hidden" name="slug"  id="slug" value="{{$blog->slug or ""}}">

            <div class="form-group">
                <label for="alias">Текст превью:</label>
                <input class="form-control" type="text" name="text_preview" id="text_preview" required>
            </div>

            <div class="form-group">
                <label for="intro">Полный текст:</label>
                <textarea class="form-control" type="text" name="full_text" id="full_text" required></textarea>
            </div>

            <div class="form-group">
                <label for="intro">Изображение-превью:</label>
                <input class="form-control" type="file" name="image_preview" accept="image/*" id="image_preview" required>
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Опубликовать</button>
            </div>
        </form>
    </div>




@endsection
