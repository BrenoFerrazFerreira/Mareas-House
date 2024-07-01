<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Carrinho de Compras</title>
  <link rel="stylesheet" href="{{ asset('css/carrinho.css')}}" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
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
          <a href="{{ route('cadastro') }}" style="text-decoration: none; margin-top: 0.5rem;">Inscrever-se</a>
        </div>
        <img src="{{ asset('img/icon.png') }}">
        <a href="{{ route('carrinho') }}" style="text-decoration: none;">
          <img src="{{ asset('img/shoppingcart.png') }}">
        </a>
        <img src="{{ asset('img/menu.png') }}" class="menu-button">
      </div>
    </div>
  </div>
  <main>
    <h3 class="section-title">Seu carrinho!</h3>
    <div class="subtitle-underline"></div>
    <div class="content">
      <section>
        <table>
          <thead>
            <tr>
              <th>Produto</th>
              <th>Preço</th>
              <th>Quantidade</th>
              <th>Total</th>
              <th>-</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="product">
                  <img src="{{ asset('img/produtos/produto-3.png') }}" alt="" />
                  <div class="info">
                    <div class="name">4 Rodas Aro 17 Fiat Marea Tempra Tipo<br>Elba Uno Brava</div>
                    <div class="category">Rodas</div>
                    </>
                  </div>
              </td>
              <td>R$ 4.227</td>
              <td>
                <div class="qty">
                  <button><i class="bx bx-minus"></i></button>
                  <span>1</span>
                  <button><i class="bx bx-plus"></i></button>
                </div>
              </td>
              <td>R$ 4.227</td>
              <td>
                <button class="remove"><i class="bx bx-x"></i></button>
              </td>
            </tr>
            <tr>
              <td>
                <div class="product">
                  <img src="{{ asset('img/produtos/produto-10.png') }}" alt="" />
                  <div class="info">
                    <div class="name">Suspensão A Ar Marea/marea Wekeend<br>- 4 Válvulas 8mm</div>
                    <div class="category">Suspensão</div>
                  </div>
                </div>
              </td>
              <td>R$ 2.494</td>
              <td>
                <div class="qty">
                  <button><i class="bx bx-minus"></i></button>
                  <span>2</span>
                  <button><i class="bx bx-plus"></i></button>
                </div>
              </td>
              <td>R$ 4.988</td>
              <td>
                <button class="remove"><i class="bx bx-x"></i></button>
              </td>
            </tr>
            <tr>
              <td>
                <div class="product">
                  <img src="{{ asset('img/produtos/produto-7.png') }}" alt="" />
                  <div class="info">
                    <div class="name">Pistão 1000cv Afp Racing Marea Turbo</div>
                    <div class="category">Motor</div>
                  </div>
                </div>
              </td>
              <td>R$ 3.800</td>
              <td>
                <div class="qty">
                  <button><i class="bx bx-minus"></i></button>
                  <span>1</span>
                  <button><i class="bx bx-plus"></i></button>
                </div>
              </td>
              <td>R$ 3.800</td>
              <td>
                <button class="remove"><i class="bx bx-x"></i></button>
              </td>
            </tr>
            <tr>
              <td>
                <div class="product">
                  <img src="{{ asset('img/produtos/produto-2.png') }}" alt="" />
                  <div class="info">
                    <div class="name">Kit Turbo Fiat Marea 5 Cilindros Fivetech<br>20v + Turbina R494</div>
                    <div class="category">Upgrade</div>
                  </div>
                </div>
              </td>
              <td>R$ 5.430</td>
              <td>
                <div class="qty">
                  <button><i class="bx bx-minus"></i></button>
                  <span>1</span>
                  <button><i class="bx bx-plus"></i></button>
                </div>
              </td>
              <td>R$ 5.430</td>
              <td>
                <button class="remove"><i class="bx bx-x"></i></button>
              </td>
          </tbody>
        </table>
      </section>
      <aside>
        <div class="box">
          <header>Resumo da compra</header>
          <div class="info">
            <div><span>Sub-total</span><span>R$ 18.445</span></div>
            <div><span>Frete</span><span>Gratuito</span></div>
            <div>
              <button>
                Adicionar cupom de desconto
                <i class="bx bx-right-arrow-alt"></i>
              </button>
            </div>
          </div>
          <footer>
            <span>Total</span>
            <span>R$ 18.445</span>
          </footer>
        </div>
        <button>Finalizar Compra</button>
      </aside>
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