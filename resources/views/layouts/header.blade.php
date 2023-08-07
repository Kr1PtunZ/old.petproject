<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <div class="wrapper">
    <nav class="navbar navbar-expand-sm navbar-light">

    <div class="container-fluid">

        <a class="navbar-brand" href="{{route('main')}}">Главная</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('shop')}}">Каталог</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">О нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('calculator')}}">Калькулятор</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('cart') }}" >Корзина</a>
                    </li>
                @endauth
                @auth
                    <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard') }}" >Профиль</a></li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}" >Войти</a></li>
                @endauth
            </ul>
        </div>
    </div>
    </div>
</nav>

<style>
    .wrapper{
        margin-left: 3%;
        margin-right: 3%
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

@yield('header')
