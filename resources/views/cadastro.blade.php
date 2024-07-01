<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="navbar">
        <div class="header-inner-content ">
            <a href="{{ route('home') }}" style="text-decoration: none;">
                <h1 class="logo">MAREA'S <span>HOUSE</span></h1>
            </a>

            <div class="search-bar">
                <input type="text" placeholder="Pesquisar...">
                <img src="{{ asset('img/lupa.png') }}" alt="Ícone de lupa">
            </div>
            <div class="nav-icon-container">
                <div class="nav-links">
                    <a href="{{ route('login') }}" style="text-decoration: none;">Login</a>
                    <a href="{{ route('cadastro') }}"
                        style="text-decoration: none; margin-top: 0.5rem;">Inscrever-se</a>
                </div>
                <img src="{{ asset('img/icon.png') }}">
                <a href="{{ route('carrinho') }}" style="text-decoration: none;">
                    <img src="{{ asset('img/shoppingcart.png') }} ">
                </a>
                <img src=" {{ asset('img/menu.png') }}" class="menu-button">
            </div>
        </div>
    </div>
    <main class="main-content">
        <form action="{{ route('cadastro') }}" method="POST" class="login-form">
            @csrf
            <h2>Cadastro</h2>
            <div class="input-group">
                <input type="text" name="name" id="name" value="{{ old('name') }}" required>
                <label>Nome</label>
                @error('name') {{ $message }} @enderror
            </div>
            <div class="input-group">
                <input type="text" name="email" id="email" value="{{ old('email') }}" required>
                <label>Email</label>
                @error('name') {{ $message }} @enderror
            </div>
            <div class="input-group">
                <input type="password" name="password" id="password" required>
                <label>Senha</label>
                @error('password') {{ $message }} @enderror
            </div>
            <div class="input-group">
                <input type="password" name="password_confirmation" id="password_confirmation" required>
                <label>Confirmar senha</label>
                @error('password') {{ $message }} @enderror
            </div>
            <div class="button-group">
                <input type="submit" class="submit-btn">
            </div>
        </form>
    </main>
    <footer class="gray-background">
        <div class="page-inner-content footer-content">

            <div class="cols cols-4">
                <img src="{{ asset('img/logo.png') }}">
                <div class="links-footer">
                    <h3>Conheça-nos</h3>
                    <ul>
                        <li>Sobre a Marea’s House</li>
                        <li>Contato</li>
                        <li>Comunidade Marea’s House</li>
                        <li>Carreira</li>
                        <li>Redes Sociais</li>
                    </ul>
                </div>
                <div class="links-footer">
                    <h3>Conta</h3>
                    <ul>
                        <li>Minha Conta</li>
                        <li>Login / Cadastro</li>
                        <li>Carrinho</li>
                        <li>Favoritos</li>
                        <li>Compras</li>
                    </ul>
                </div>
                <div class="links-footer">
                    <h3>Suporte</h3>
                    <ul>
                        <li>Rua endereço, Brasil, n999
                            18078-555</li>
                        <li>MareasHouse@email.com</li>
                        <li>(11) 94389-8943</li>
                    </ul>
                </div>
            </div>

        </div>
        <hr class="page-inner-content" />

        <div class="page-inner-content copyright">
            <p>Copyright Marea’s House 2024. All right reserved</p>
        </div>
    </footer>
</body>

</html>