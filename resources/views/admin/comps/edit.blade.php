@extends('layouts.admin')
@section('content')
    <form method="POST" action="{{ route('admin.comps.update', ['id' => $comps['id']]) }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Заголовок</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $comps['title'] }}">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Текст</label>
            <textarea class="form-control" id="body" name="body" rows="3">{{ $comps['body'] }}</textarea>
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Картинка</label>
            <input type="file" class="form-control" id="img" name="img">
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
@endsection
