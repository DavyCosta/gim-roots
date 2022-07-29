<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gim Roots</title>
    <link rel="shortcut icon" href="./img/leão.ico" type="image/x-icon">

    <!-- Fontes - Lato -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,400&display=swap" rel="stylesheet">

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Icons Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Css do projeto -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- javaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top bg-primary-color" id="navbar">
        <div class="container py-3">
            <a href="index.php" class="navbar-brand">
                <img src="./img/logoGim.png" alt="logo">
                <span>Gim Roots </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-items" aria-controls="navbar-items" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </button>


            <div class="collapse navbar-collapse col-10" id="navbar-items">
                   
                
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">                       
                    <li class="nav-item">
                        <a href="index.php" class="nav-link active primary-color" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  primary-color" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Produtos
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="produtosCamisetas.php">Camisetas</a></li>
                          <li><a class="dropdown-item" href="produtosBlusas.php">Blusas</a></li>
                          <li><a class="dropdown-item" href="ProdutosToucas.php">Toucas</a></li>
                        </ul>
                      </li>
                    <li class="nav-item">
                        <a href="novidades.php" class="nav-link primary-color">Novidades</a>
                    </li>
                    <li class="nav-item">
                        <a href="#footer-bottom" class="nav-link primary-color">Contatos</a>
                    </li>
                   
                </ul>
                <div class="nav-item col-2">
                    <a href="favoritos.php" class="bi bi-heart primary-color check"></a>
                    <a href="carrinho.php" class="bi bi-cart2 primary-color check"></a>
                </div>
            </div>
        </div>
      
    </nav>


    <!-- POLITICA DE PRIVACIDADE -->
    <header class="container" id="topic-container">
            <div class="col-12 title">
                <h1>
                    PAGAMENTOS
                </h1>
            </div>
            <div class="topic">
                <p>
                    <b>Cartão de crédito:</b> 
                </p>
                <p>
                    Oferece parcelamento em até 6x. A aprovação das compras realizadas no cartão de crédito dependem da confirmação dos dados do cliente junto a 
                    administradora do cartão, estando sujeita ao cancelamento da compra se for identificado uma transação de alto risco de acordo com as análises do 
                    nosso sistema de pagamentos. Os prazos de postagem e envio só serão validados mediante a aprovação e confirmação do pagamento através de cartão de crédito.
                </p>
                <p>                    
                    <b>Boleto bancário:</b> 
                </p>
                <p>
                Esta forma de pagamento não oferece parcelamento, e tem valor único para pagamento à vista.<br>
                O boleto tem prazo de validade de 72h após a realização do pedido. Se a data cair no fim de semana ou em um feriado, o prazo é automaticamente estendido até o 
                próximo dia útil. Caso não haja pagamento do boleto até o período de validade do mesmo, o pedido será automaticamente cancelado. Somente após a confirmação do 
                pagamento do boleto, passa a valer os prazos e postagem e envio.
                </p>
                    <b>Pix:</b> 
                <p>
                O pagamento de produtos ou serviços usando Pix com o QR Code estático ou dinâmico deverá ser feito dentro do aplicativo da instituição financeira, na área do Pix. 
                Para pagar um produto com o QR Code, o usuário precisará entrar no app de sua instituição, selecionar “Pix” e depois escolher a opção “QR Code”.
                </p>
        </div>
    </header>


    <!-- NEWSLETTER -->
    <div class="container-fluid container-newsletter">
        <div class="container">
            <div class="row">

                <div class="col-12 text-center" id="newsletter">
                    <div class="row ">
                        <h2>Assine Nossa Newsletter</h2>
                        <p class="subtitle secondary-color">
                            Fique por dentro das nossas novidades e promoções!
                        </p>
                    </div>

                    <div class="row g-2">
                        <div class="col-md">
                            <input type="email" class="form-control" placeholder="Digite o seu Nome" value="">
                        </div>

                        <div class="col-md">
                            <input type="email" class="form-control" placeholder="Digite o seu E-mail" value="">
                        </div>
                        <div class="col-md-1">
                            <input type="button" class="btn btn-success" value="Enviar">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="container-fluid bg-dark-color" id="footer">
        <div class="container">
            <div class="row">
                <!-- FOOTER TOP -->
                <div class="col-12" id="footer-top">
                    <div class="row justify-content-between">
                        <div class="col-5">
                            <h1>Gim Roots</h1>
                        </div>
                        <div class="col-7" id="social-icons">
                            <a href="https://www.instagram.com/gim.roots/" target="_blank" rel="noopener noreferrer">
                                <img src="img/whatsApp.png" class="logo-social">
                            </a>
                            <a href="https://www.instagram.com/gim.roots/" target="_blank" rel="noopener noreferrer">
                                <img src="img/instagram.png" class="logo-social">
                            </a>
                            <a href="https://www.facebook.com/gimroots420/" target="_blank" rel="noopener noreferrer">
                                <img src="img/facebook.png" class="logo-social">
                            </a>
                            <a href="https://br.pinterest.com/gimroots/" target="_blank" rel="noopener noreferrer">
                                <img src="img/pinteres.png" class="logo-social">
                            </a>
                            <a href="https://www.linkedin.com/company/gim-roots-estamparia/" target="_blank" rel="noopener noreferrer">
                                <img src="img/linkedin.png" class="logo-social">
                            </a>
                            <a href="https://www.youtube.com/channel/UCYBrpZ1VTfJkm46D9UPtiqg" target="_blank" rel="noopener noreferrer">
                                <img src="img/youtube.png" class="logo-social">
                            </a>
                        </div>
                    </div>
                </div>

                 <!-- FOOTER DETAILS -->
                 <div class="col-12" id="footer-details">
                    <div class="row">
                        <div class="col-12 col-md-3" id="news-container">
                            <h4>Formas de Pagamento</h4>
                            <p class="secondary-color">
                                Divida suas compras em 2 cartões
                            </p>
                            <div>
                                <img src="img/formasDePagamento.PNG" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-12 col-md-3" id="contact-container">
                            <h4>Formas de contato</h4>
                            <p class="bi bi-phone secondary-color"> (11) 99460-3982</p>
                            <p class="bi bi-envelope secondary-color"> gimroots@hotmail.com</p>
                            <p class="bi bi-geo-alt secondary-color"> Guarulhos - SP</p>
                        </div>
                        <div class="col-12 col-md-5" id="links-container">
                            <div class="row">
                                <div class="col-7" id="contact-container">
                                    <h4>Institucional</h4>
                                    <ul class="list-unstyled">
                                        <li><a href="sobre.php" class="secondary-color">Sobre a Gim Roots</a></li>
                                        <li><a href="politicaPrivacidade.php" class="secondary-color">Política de Privacidade</a></li>
                                        <li><a href="politicaTroca.php" class="secondary-color">Política de Troca</a></li>
                                        <li><a href="politicaEntrega.php" class="secondary-color">Política de Entrega</a></li>
                                        <li><a href="dadosTranslacoes.php" class="secondary-color">Dados das Transações</a></li>
                                    </ul>
                                </div>
                                <div class="col-5" id="contact-container">
                                    <h4>Ajuda</h4>
                                    <ul class="list-unstyled">
                                        <li><a href="minhaConta.php" class="secondary-color">Minha Conta</a></li>
                                        <li><a href="meusPedidos.php" class="secondary-color">Meus Pedidos</a></li>
                                        <li><a href="cancelamentos.php" class="secondary-color">Cancelamentos</a></li>
                                        <li><a href="pagamentos.php" class="secondary-color">Pagamentos</a></li>
                                        <li><a href="trabalheConosco.php" class="secondary-color">Trabalhe Conosco</a></li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="razao-social ">
                        <p>Nome fantasia: Gim Roots | cnpj: 30.050.252/0001-52 | Guarulhos - SP</p>
                    </div>

                </div>
                <!-- FOOTER BOOTOM -->
                <div class="col-12" id="footer-bottom">
                    <div class="row justify-content-between">
                        <div class="col-12 col-md-3">
                            <p class="secondary-color">
                                Gim Roots &copy; 2022
                            </p>
                        </div>
                        <div class="col-12 col-md-3">
                            <p class="secondary-color">
                                Desenvolvido por <b>Davy</b>
                                <i class="bi bi-balloon"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>