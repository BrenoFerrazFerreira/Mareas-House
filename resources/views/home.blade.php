<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <title>Marea's House</title>
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
    <header>
        <div class="header-inner-content">
            <div class="header-bottom-side">
                <div class="header-bottom-side-left">
                    <h2>Precisando de peças específicas para o seu carro? É aqui na Marea’s House!</h2>
                    <p>
                        Personalize a sua pesquisa utilizando filtros apropriados,<br>para chegar
                        aos produtos que você deseja!
                    </p>
                    <form action="">
                        <div class="filtros">
                            <div class="filtro-select">
                                <h3>Modelos:</h3>
                                <select name="modelo" id="modelo">
                                    <option value="modelo1">1.8 16v SX</option>
                                    <option value="modelo2">1.6 16v SX</option>
                                    <option value="modelo3">1.8 20v HLX</option>
                                    <option value="modelo4">2.4 20v ELX</option>
                                </select>
                            </div>
                            <div class="filtro-select">
                                <h3 style="margin-left: 1rem;">Ano:</h3>
                                <select name="ano" id="ano">
                                    <option value="ano1">1997</option>
                                    <option value="ano2">1998</option>
                                    <option value="ano3">1999</option>
                                    <option value="ano4">2000</option>
                                    <option value="ano4">2000</option>
                                    <option value="ano5">2001</option>
                                    <option value="ano6">2002</option>
                                    <option value="ano7">2003</option>
                                    <option value="ano8">2004</option>
                                    <option value="ano9">2005</option>
                                    <option value="ano10">2006</option>
                                    <option value="ano11">2007</option>
                                </select>
                            </div>
                            <div class="filtro-select">
                                <h3 style="margin-left: 1rem;">Categoria:</h3>
                                <select name="categoria" id="categoria">
                                    <option value="categoria1">Hatch</option>
                                    <option value="categoria2">Sedan</option>
                                    <option value="categoria3">Weekend</option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <button>Ver Agora &#8594;</button>
                </div>
                <div class="header-bottom-side-right">
                    <img src="{{ asset('img/header.png') }}">
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="gray-background">
            <div class="page-inner-content">
                <h1 style="color: #fff; padding-top: 1rem;">Mais novidades como essa? É aqui na Marea’s House!</h1>
                <div class="cols cols-4">
                    <img src="{{ asset('img/logo.png') }}">
                    <div class="product exclusive-produto">
                        <a href="{{ route('produto') }}" style="text-decoration: none;">
                            <img src="{{ asset('img/produtos/produto-1.png') }}">
                            <div class="desconto">-5%</div>
                            <p class="product-name" style="color: #fff;">Kit Forjado Pistão E Bielas + Pino P/ Marea 2.4
                                5
                                Cilindros</p>
                            <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9733;<span style="color: #c6c6c6;">(88)</span>
                            </p>
                            <p class="product-price">R$5,679.00<span style="color: #c6c6c6;">R$5.977,89</span></p>
                        </a>
                    </div>
                    <div class="product">
                        <img src="{{ asset('img/produtos/produto-2.png') }}">
                        <div class="desconto">-10%</div>
                        <p class="product-name" style="color: #fff;">Kit Turbo Fiat Marea 5 Cilindros Fivetech 20v +
                            Turbina R494</p>
                        <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;<span style="color: #c6c6c6;">(12)</span></p>
                        <p class="product-price">R$5,430.00<span style="color: #c6c6c6;">R$6.033,33</span></p>
                    </div>
                    <div class="product">
                        <img src="{{ asset('img/produtos/produto-3.png') }}">
                        <div class="desconto">-7%</div>
                        <p class="product-name" style="color: #fff;">4 Rodas Aro 17 Fiat Marea Tempra Tipo Elba Uno
                            Brava </p>
                        <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;<span style="color: #c6c6c6;">(7)</span></p>
                        <p class="product-price">R$4,227.00<span style="color: #c6c6c6;">R$4.545,16</span></p>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="page-inner-content">
                <h3 class="section-title">Mais vendidos esta semana!</h3>
                <div class="subtitle-underline"></div>
                <div class="cols cols-4">
                    <div class="product">
                        <img src="{{ asset('img/produtos/produto-1.png') }}">
                        <div class="desconto">-5%</div>
                        <p class="product-name">Kit Forjado Pistão E Bielas + Pino P/ Marea 2.4 5 Cilindros</p>
                        <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9733;<span>(88)</span></p>
                        <p class="product-price">R$5,679.00<span>R$5.977,89</span></p>
                    </div>
                    <div class="product">
                        <img src="{{ asset('img/produtos/produto-2.png') }}">
                        <div class="desconto">-10%</div>
                        <p class="product-name">Kit Turbo Fiat Marea 5 Cilindros Fivetech 20v + Turbina R494</p>
                        <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;<span>(12)</span></p>
                        <p class="product-price">R$5,430.00<span>R$6.033,33</span></p>
                    </div>
                    <div class="product">
                        <img src="{{ asset('img/produtos/produto-3.png') }}">
                        <div class="desconto">-7%</div>
                        <p class="product-name">4 Rodas Aro 17 Fiat Marea Tempra Tipo Elba Uno Brava </p>
                        <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;<span>(7)</span></p>
                        <p class="product-price">R$4,227.00<span>R$4.545,16</span></p>
                    </div>
                    <div class="product">
                        <img src="{{ asset('img/produtos/produto-4.png') }}">
                        <div class="desconto">-10%</div>
                        <p class="product-name">Pistão Forjado Iapel Fiat Marea 2.0 Turbo 83,00mm</p>
                        <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;<span>(15)</span></p>
                        <p class="product-price">R$4,190.00<span>R$4.655,55</span></p>
                    </div>
                    <div class="product">
                        <img src="{{ asset('img/produtos/produto-5.png') }}">
                        <div class="desconto">-10%</div>
                        <p class="product-name">Kit Suspensão A Ar Super Black 8mm Stage 3</p>
                        <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9733;<span>(20)</span></p>
                        <p class="product-price">R$4,098.00<span>R$4.553,33</span></p>
                    </div>
                    <div class="product">
                        <img src="{{ asset('img/produtos/produto-6.png') }}">
                        <div class="desconto">-10%</div>
                        <p class="product-name">Par Amortecedores Dianteiros Turbogas Marea Weekend 2.0 </p>
                        <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9733;<span>(25)</span></p>
                        <p class="product-price">R$3,975.00<span>R$4.416,66</span></p>
                    </div>
                    <div class="product">
                        <img src="{{ asset('img/produtos/produto-7.png') }}">
                        <p class="product-name">Pistão 1000cv Afp Racing Marea Turbo</p>
                        <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9733;<span>(7)</span></p>
                        <p class="product-price">R$3,800.00</p>
                    </div>
                    <div class="product">
                        <img src="{{ asset('img/produtos/produto-8.png') }}">
                        <p class="product-name">Escapamento Esportivo Elétrico Válvula Dupla Down Pipe Marea</p>
                        <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;<span>(30)</span></p>
                        <p class="product-price">R$3,597.00</p>
                    </div>
                </div>
            </div>

            <div class="page-inner-content">
                <h3 class="section-title">Visualizações recentes</h3>
                <div class="subtitle-underline"></div>
                <div class="cols cols-4">
                    <div class="product">
                        <img src="{{ asset('img/produtos/produto-9.png') }}">
                        <div class="desconto">-7%</div>
                        <p class="product-name">Difusor De Escapamento Para Fiat Marea Em 2,0 Pol</p>
                        <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;<span>(20)</span></p>
                        <p class="product-price">R$2,997.00<span>R$2.787,21</span></p>
                    </div>
                    <div class="product">
                        <img src="{{ asset('img/produtos/produto-10.png') }}">
                        <p class="product-name">Suspensão A Ar Marea/marea Wekeend - 4 Válvulas 8mm</p>
                        <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9733;<span>(11)</span></p>
                        <p class="product-price">R$2,494.00</p>
                    </div>
                    <div class="product">
                        <img src="{{ asset('img/produtos/produto-11.png') }}">
                        <div class="desconto">-15%</div>
                        <p class="product-name">Radiador Água Fiat Marea Turbo 2.4 Brasado 3 Carreras</p>
                        <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9733;<span>(23)</span></p>
                        <p class="product-price">R$2,449.00<span>R$2.881,17</span></p>
                    </div>
                    <div class="product">
                        <img src="{{ asset('img/produtos/produto-4.png') }}">
                        <div class="desconto">-10%</div>
                        <p class="product-name">Pistão Forjado Iapel Fiat Marea 2.0 Turbo 83,00mm</p>
                        <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;<span>(15)</span></p>
                        <p class="product-price">R$4,190.00<span>R$4.655,55</span></p>
                    </div>
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
    <!--<script src="{{ asset('js/script.js')}}"></script>-->
    <script>
        const navbar = document.querySelector(".navbar");
        const menuButton = document.querySelector(".menu-button");
        menuButton.addEventListener("click", () => {
            navbar.classList.toggle("show-menu")
        });
    </script>


</body>

</html>