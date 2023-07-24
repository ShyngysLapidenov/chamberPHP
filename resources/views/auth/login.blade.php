@extends('layouts.admin')
@section('styles')
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.3/examples/sign-in/sign-in.css">
@endsection
@section('content')
    <main class="form-signin w-100 m-auto">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Авторизация</h1>

            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Пароль</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" name="remember"> Запомнить меня
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Войти</button>
        </form>
    </main>
@endsection
