@extends('layouts.admin')
@section('content')
    <a href="{{ route('admin.staffs.create') }}" class="btn btn-primary">Добавить</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ФИО</th>
            <th scope="col">Должность</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
            @foreach($employees as $item)
            <tr>
                <th scope="row">{{ $item['id'] }}</th>
                <td>{{ $item['fio'] }}</td>
                <td>{{ $item['position'] }}</td>
                <td>
                    <a href="{{ route('admin.staffs.edit', ['id' => $item['id']]) }}">Редактировать</a>
                    <a href="{{ route('admin.staffs.delete', ['id' => $item['id']]) }}">Удалить</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
