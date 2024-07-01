<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/produto.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <title>Produto</title>
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
                    <img src="{{ asset('img/shoppingcart.png') }}">
                </a>
                <img src=" {{ asset('img/menu.png') }}" class="menu-button">
            </div>
        </div>
    </div>
    <main>
        <div class="card-wrapper">
            <div class="card">
                <div class="product-imgs">
                    <div class="img-display">
                        <div class="img-showcase">
                            <img src="{{ asset('img/Produtos/produto-1.png') }}" alt="shoe image">
                            <img src="{{ asset('img/Produtos/produto-1pt1.png') }}" alt="shoe image">
                            <img src="{{ asset('img/Produtos/produto-1pt2.png') }}" alt="shoe image">
                            <img src="{{ asset('img/Produtos/produto-1pt3.png') }}" alt="shoe image">
                        </div>
                    </div>
                    <div class="img-select">
                        <div class="img-item">
                            <a href="#" data-id="1">
                                <img src="{{ asset('img/Produtos/produto-1.png') }}" alt="shoe image">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="2">
                                <img src="{{ asset('img/Produtos/produto-1pt1.png') }}" alt="shoe image">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="3">
                                <img src="{{ asset('img/Produtos/produto-1pt2.png') }}" alt="shoe image">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="4">
                                <img src="{{ asset('img/Produtos/produto-1pt1.png') }}" alt="shoe image">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-content">
                    <h2 class="product-title">Kit Forjado Pistão E Bielas + Pino + Anel P/ Marea 2.4 5cil</h2>
                    <div class="product-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>4.0(88)</span>
                    </div>

                    <div class="product-price">
                        <p><span>R$5.977,89</span></p>
                        <p>R$5,679.00 (5%)</p>
                    </div>

                    <div class="product-detail">
                        <h2>Descrição</h2>
                        <p>Conteúdo da Embalagem:<br>
                            -01 Jogo de Biela SPA 1000cv 145mm Colo Original Marea 2.4<br>
                            -01 Jogo com 5 Pistões Forjados AFP<br>
                            -01 Jogo de Travas<br>
                            -01 Jogo Pino Forjado Reforçado<br>
                            -01 Jogo Anel Motor<br>
                            -01 Certificado de Compra e Manual de Instrução/instalação<br>
                            -02 Adesivos AFP Racing</p>
                        <ul>
                            <li>Marca: <span>AFP/MTR</span></li>
                            <li>Material: <span>Forjado</span></li>
                            <li>Estoque: <span>5 unidades</span></li>
                            <li>Entrega: <span>Brasil todo</span></li>
                            <li>Frete: <span>Gratuito</span></li>
                        </ul>
                    </div>

                    <div class="purchase-info">
                        <input type="number" min="0" value="1">
                        <button type="button" class="btn">
                            Carrinho <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <script src="{{ asset('js/script.js') }}"></script>



        <div class="page-inner-content">
            <h3 class="section-title">Relacionados</h3>
            <div class="subtitle-underline"></div>
            <div class="cols cols-4">
                <div class="product">
                    <img src="{{ asset('img/produtos/produto-9.png') }}">
                    <div class="desconto">-7%</div>
                    <p class="product-name">Difusor De Escapamento Para Fiat Marea Em 2,0 Pol</p>
                    <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;<span>(20)</span></p>
                    <p class="product-price2">R$2,997.00<span>R$2.787,21</span></p>
                </div>
                <div class="product">
                    <img src="{{ asset('img/produtos/produto-10.png') }}">
                    <p class="product-name">Suspensão A Ar Marea/marea Wekeend - 4 Válvulas 8mm</p>
                    <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9733;<span>(11)</span></p>
                    <p class="product-price2">R$2,494.00</p>
                </div>
                <div class="product">
                    <img src="{{ asset('img/produtos/produto-11.png') }}">
                    <div class="desconto">-15%</div>
                    <p class="product-name">Radiador Água Fiat Marea Turbo 2.4 Brasado 3 Carreras</p>
                    <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9733;<span>(23)</span></p>
                    <p class="product-price2">R$2,449.00<span>R$2.881,17</span></p>
                </div>
                <div class="product">
                    <img src="{{ asset('img/produtos/produto-4.png') }}">
                    <div class="desconto">-10%</div>
                    <p class="product-name">Pistão Forjado Iapel Fiat Marea 2.0 Turbo 83,00mm</p>
                    <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;<span>(15)</span></p>
                    <p class="product-price2">R$4,190.00<span>R$4.655,55</span></p>
                </div>
            </div>
        </div>
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