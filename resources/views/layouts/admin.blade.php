<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.3/examples/headers/headers.css">
	<script src="/ckeditor/ckeditor.js"></script>
    @yield('styles')
</head>
<body>
    @auth
        <header class="p-3 mb-3 border-bottom">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="{{ route('admin.news.index') }}" class="nav-link px-2 link-dark">Новости</a></li>
                        <li><a href="{{ route('admin.comps.index') }}" class="nav-link px-2 link-dark">Элементы</a></li>
                        <li><a href="{{ route('admin.events.index') }}" class="nav-link px-2 link-dark">Мероприятия</a></li>
                        <li><a href="{{ route('admin.staffs.index') }}" class="nav-link px-2 link-dark">Сотрудники</a></li>
                        <li><a href="{{ route('admin.members.index') }}" class="nav-link px-2 link-dark">Спонсоры</a></li>
                        <li><a href="{{ route('admin.requests.index') }}" class="nav-link px-2 link-dark">Запросы</a></li>
					</ul>
                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small" style="">
                            <li><a class="dropdown-item" href="#" onclick="document.getElementById('logout').submit()">Выйти</a></li>
                            <form method="POST" action="{{ route('logout') }}" id="logout">
                                @csrf
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    @endauth
    <div class="container">
        @yield('content')
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</html>
