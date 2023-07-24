@extends('layouts.admin')
@section('content')
    <form method="POST" action="{{ route('admin.staffs.update', ['id' => $employee['id']]) }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="type" class="form-label">Тип сотрудника</label>
            <select class="form-control" id="type" name="type">
				<option value="1" @if($employee['type'] == 1) selected @endif>Committee Members</option>
				<option value="2" @if($employee['type'] == 2) selected @endif>Honorary appointments</option>
				<option value="3" @if($employee['type'] == 3) selected @endif>Our team</option>
			</select>
        </div>
		<div class="mb-3">
            <label for="fio" class="form-label">ФИО сотрудника</label>
            <input type="text" class="form-control" id="fio" name="fio" value="{{ $employee['fio'] }}">
        </div>
        <div class="mb-3">
            <label for="position" class="form-label">Должность</label>
            <input type="text" class="form-control" id="position" name="position" value="{{ $employee['position'] }}">
        </div>
		<div class="mb-3">
            <label for="company" class="form-label">Компания</label>
            <input type="text" class="form-control" id="company" name="company" value="{{ $employee['company'] }}">
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Картинка</label>
            <input type="file" class="form-control" id="img" name="img">
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
@endsection
