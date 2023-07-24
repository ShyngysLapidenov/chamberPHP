@extends('layouts.admin')
@section('content')
    <a href="{{ route('admin.news.create') }}" class="btn btn-primary">Добавить новость</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Заголовок</th>
            <th scope="col">Дата создание</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
            @foreach($news as $item)
            <tr>
                <th scope="row">{{ $item['id'] }}</th>
                <td>{{ $item['title'] }}</td>
                <td>{{ date('d.m.Y', strtotime($item['date'])) }}</td>
                <td>
                    <a href="{{ route('admin.news.edit', ['id' => $item['id']]) }}">Редактировать</a>
                    <a href="{{ route('admin.news.delete', ['id' => $item['id']]) }}">Удалить</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
