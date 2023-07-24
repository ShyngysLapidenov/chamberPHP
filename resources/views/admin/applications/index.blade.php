@extends('layouts.admin')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Мероприятия</th>
            <th scope="col">ФИО</th>
			<th scope="col">Имя компании</th>
			<th scope="col">Позиция</th>
            <th scope="col">Номер телефона</th>
            <th scope="col">Почта</th>			
            <th scope="col">Текст</th>			
			<th scope="col">Дата создания</th>
        </tr>
        </thead>
        <tbody>
            @foreach($applications as $item)
            <tr>
                <th scope="row">{{ $item['id'] }}</th>
                <td>{{ $item['title'] }}</td>
				<td>{{ $item['fio'] }}</td>
				<td>{{ $item['сompany_name'] }}</td>
				<td>{{ $item['position'] }}</td>
				<td>{{ $item['phone'] }}</td>
				<td>{{ $item['email'] }}</td>
				<td>{{ $item['message'] }}</td>
                <td>{{ $item['date'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
