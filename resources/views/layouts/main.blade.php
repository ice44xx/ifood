<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="/img/fav.png">
    <link rel="stylesheet" href="/css/layout.css">
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
@if (!isset($hideNavbar) || !$hideNavbar)
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="/"><img src="/img/logo.png" class="logo m-3"></a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page"
                                href="/">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('restaurantes') ? 'active' : '' }}"
                                href="/restaurantes">Restaurantes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('mercados') ? 'active' : '' }}"
                                href="/mercados">Mercados</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('bebidas') ? 'active' : '' }}"
                                href="/bebidas">Bebidas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('farmacias') ? 'active' : '' }}"
                                href="/farmacias">Farmácias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('pets') ? 'active' : '' }}" href="/pets">Pets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('shoppings') ? 'active' : '' }}"
                                href="/shoppings">Shoppings</a>
                        </li>
                    </ul>
                    <form action="{{ route('search.show') }}" method="GET" class="d-flex gap-3" role="search"
                        style="width: 800px;">
                        <input class="search_bar" type="search" name="search" placeholder="Busque pelo item aqui..."
                            aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                    @if (auth()->check())
                        <div class="d-flex gap-3 justify-content-center align-items-center" style="width: 300px">
                            <p class="p-0 m-0">{{ auth()->user()->fullName }}</p>
                            <img class="profile" src={{ auth()->user()->profile }} alt={{ auth()->user()->fullName }}>
                            <a href={{ route('login.destroy') }} class="btn_loggin"
                                style="text-decoration: none">Sair</a>
                        </div>
                    @else
                        <div class="d-flex gap-3 justify-content-center align-items-center" style="width: 200px">
                            <a href="/register" style="text-decoration: none; color: black">Criar Conta</a>
                            <a href="/login" class="btn_loggin" style="text-decoration: none">Entrar</a>
                        </div>
                    @endif
                </div>
            </div>
        </nav>
    </header>
@endif

<body>
    @if (session('msg'))
        <div id="toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
            <div class="toast-body toast_msg">
                {{ session('msg') }}
            </div>
        </div>
    @endif
    @yield('content')
    @if (!isset($hideFooter) || !$hideFooter)
        <footer class="d-flex justify-content-evenly align-items-center">
            <div class="hr"></div>
            <div class="hr_bot"></div>
            <div>
                <p class="title_social">Ifood</p>
                <p>Site Institucional</p>
                <p>Fale conosco</p>
                <p>Carreiras</p>
                <p>Entregadores</p>
            </div>
            <div>
                <p class="title_social">Descubra</p>
                <p>Cadastre seu Restaurante</p>
                <p>Ifood Shop</p>
                <p>Ifood Card</p>
                <p>Blog Ifood Empresas</p>
            </div>
            <div>
                <p class="title_social">Social</p>
                <p>Facebook</p>
                <p>Twitter</p>
                <p>Instagram</p>
                <p>Youtube</p>
            </div>

        </footer>
    @endif
    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>

</html>
