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
                    POLÍTICA DE ENTREGAS
                </h1>
            </div>
            <div class="topic">
                <b>ENTREGAS E FRETES</b>
                <p>
                    A entrega da sua compra com a GIM ROOTS é dividida em duas etapas:
                </p>
                <p>
                    Prazo de postagem e Prazo de Entrega.
                </p>                    
                    <b>PRAZO DE POSTAGEM:</b> 
                <p>
                    É o tempo que seu produto leva para chegar até os Correios. Podendo variar de acordo com as personalizações e produto escolhidos 
                    na hora da compra, por isso antes de finalizar a compra, fique atento ao prazo de postagem do produto escolhido.
                </p>
                    <b>PRAZO DE ENTREGA:</b> 
                <p>
                    É o tempo que o produto leva para chegar até o cliente no ciclo de entrega dos Correios esse prazo vai de acordo com o modo de envio 
                    escolhido no site na hora da compra e o prazo estipulado pelos Correios de acordo com cada região.
                </p>
                <p>
                    Oferecemos os seguintes serviços de entrega:
                </p>
                    Sedex e PAC
                </p>

                <p>
                O valor entre os serviços pode divergir conforme o CEP de destino do produto, assim como o prazo final de entrega, e são calculados através de tópicos como o peso e 
                tamanho do pacote/caixa que deverá ser colocado o produto, Você pode calcular os prazos e valores antes de finalizar a compra. Em qualquer um dos modos de envio, o 
                pacote pode ser recebido por terceiros, como porteiros, familiares e amigos. Desde que recebam e assinem o comprovante de entrega. Depois do produto entregue de 
                acordo com os protocolos do melhor envio no endereço que foi solicitado, não nos responsabilizamos perante a quem recebeu o pacote e se o mesmo for extraviado depois 
                da assinatura do comprovante de entrega.
                </p>
                <p>
                Caso o pacote seja recusado ou não atendido, o produto voltará a nossa central e será cobrado um novo frete para o reenvio do produto. Ou se o cliente preferir o 
                reembolso do valor do produto, visto que o primeiro envio foi realizado.
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