@extends('layouts.admin')
@section('content')
    <form method="POST" action="{{ route('admin.staffs.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="type" class="form-label">Тип сотрудника</label>
            <select class="form-control" id="type" name="type">
				<option value="1">Committee Members</option>
				<option value="2">Honorary appointments</option>
				<option value="3">Our team</option>
			</select>
        </div>
		<div class="mb-3">
            <label for="fio" class="form-label">ФИО сотрудника</label>
            <input type="text" class="form-control" id="fio" name="fio">
        </div>
        <div class="mb-3">
            <label for="position" class="form-label">Должность</label>
            <input type="text" class="form-control" id="position" name="position">
        </div>
		<div class="mb-3">
            <label for="company" class="form-label">Компания</label>
            <input type="text" class="form-control" id="company" name="company">
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Картинка</label>
            <input type="file" class="form-control" id="img" name="img">
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
@endsection
