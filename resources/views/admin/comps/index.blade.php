@extends('layouts.admin')
@section('content')
    <a href="{{ route('admin.comps.create') }}" class="btn btn-primary">Добавить</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Заголовок</th>
			<th scope="col">Текст</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($comps as $item)
            <tr>
                <th scope="row">{{ $item['id'] }}</th>
                <td>{{ $item['title'] }}</td>
				<td>{{ $item['body'] }}</td>
                <td>
                    <a href="{{ route('admin.comps.edit', ['id' => $item['id']]) }}">Редактировать</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
