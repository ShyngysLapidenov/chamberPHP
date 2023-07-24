@extends('layouts.admin')
@section('content')
    <a href="{{ route('admin.events.create') }}" class="btn btn-primary">Добавить</a>
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
            @foreach($events as $item)
            <tr>
                <th scope="row">{{ $item['id'] }}</th>
                <td>{{ $item['title'] }}</td>
                <td>{{ date('d.m.Y', strtotime($item['date'])) }}</td>
                <td>
                    <a href="{{ route('admin.events.edit', ['id' => $item['id']]) }}">Редактировать</a>
                    <a href="{{ route('admin.events.delete', ['id' => $item['id']]) }}">Удалить</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
