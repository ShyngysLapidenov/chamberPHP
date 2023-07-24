@extends('layouts.admin')
@section('content')
    <table class="table table-bordered ">
        <thead>
        <tr>
            <th scope="col" class= "table-dark">#</th>
            <th scope="col" class= "table-dark" >Тип</th>
			<th scope="col" class= "table-dark" >Компания</th>
			<th scope="col" class= "table-dark" >BIN Компании</th>
			<th scope="col" class= "table-dark">Country inc</th>
			<th scope="col" class= "table-dark" >Адрес</th>
			<th scope="col" class= "table-dark" >Город</th>
			<th scope="col" class= "table-dark" >Почтовый индекс</th>
			<th scope="col"class= "table-dark" >Страна</th>
			<th scope="col"class= "table-dark" >Телефон компании</th>
			<th scope="col" class= "table-dark" >Описание</th>
			<th scope="col"class= "table-dark" >Количество сотрудниковt</th>
			<th scope="col"class= "table-dark" >Имя</th>
			<th scope="col"class= "table-dark" >Должность</th>
            <th scope="col" class= "table-dark" >Номер телефона</th>
            <th scope="col"class= "table-dark" >Почта</th>			
			<th scope="col" class= "table-dark">Дата создание</th>
        </tr>
			
			<style>
				.container{
					margin:0 !important;
					padding:0 !important;
				}
				.table {	
					font-size: 15.5px;	
				}
				
			</style>
        </thead>
        <tbody>
            @foreach($memberships as $item)
            <tr>
                <th scope="row">{{ $item['id'] }}</th>
                <td>{{ $item['type'] }}</td>
				<td>{{ $item['company_name'] }}</td>
				<td>{{ $item['company_bin'] }}</td>
				<td>{{ $item['country_incorporation'] }}</td>
				<td>{{ $item['address'] }}</td>
				<td>{{ $item['city'] }}</td>
				<td>{{ $item['postcode'] }}</td>
				<td>{{ $item['country'] }}</td>
				<td>{{ $item['company_phone'] }}</td>
				<td>{{ $item['description'] }}</td>
				<td>{{ $item['employes_count'] }}</td>
				<td>{{ $item['name'] }}</td>
				<td>{{ $item['job_title'] }}</td>
				<td>{{ $item['phone'] }}</td>
				<td>{{ $item['email'] }}</td>
                <td>{{ date('d.m.Y', strtotime($item['date'])) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
