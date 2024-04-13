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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
                <img src="/img/logo.png" class="logo m-3">
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
                    <form class="d-flex gap-3" role="search" style="width: 800px;">
                        <input class="search_bar" type="search" placeholder="Busque pelo item aqui..."
                            aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                    <div class="d-flex gap-3 justify-content-center align-items-center" style="width: 200px">
                        <a href="/user/create" style="text-decoration: none; color: black">Criar Conta</a>
                        <a href="" class="btn_loggin" style="text-decoration: none">Entrar</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
@endif

<body>
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
</body>

</html>
