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


    <!-- POLITICA DE TROCAS -->
    <header class="container" id="topic-container">
            <div class="col-12 title">
                <h1>
                    POLÍTICA DE TROCAS
                </h1>
            </div>
            <div class="topic">
                <p>
                    Visando o melhor atendimento ao cliente, a GIM ROOTS possui uma Política de Trocas e Devolução alinhada às mais recentes normas do Código de Defesa do Consumidor.
                    Só serão aceitas para troca ou devolução, os produtos que:
                <p>
                    <b>1)</b> Possuírem Nota Fiscal (DANFE) enviada através no e-mail cadastrado na hora da compra no site;
                </p>
                <p>
                    <b>2)</b> Não tiverem o lacre de garantia violado ou sem seu cartão de garantia;
                </p>
                <p>
                    <b>3)</b> Para os  produtos, a GIM ROOTS disponibiliza o serviço de trocas e devoluções, desde que eles estejam com as suas etiquetas originais internas e o cliente apresente 
                    a nota ou cupom fiscal. Você tem até 7 dias corridos após o recebimento do pedido para solicitar a devolução e até 30 dias corridos para solicitar a troca.
                <p>
                    Realizaremos a troca do produto com defeitos de fabricação em até 30 dias após o recebimento do pedido em sua casa. Isso não se aplica para defeitos estéticos, apenas defeitos que 
                    comprometem o funcionamento do produto. <br>Para arrependimento de compra ou devolução do produto adquirido na GIM ROOTS, o prazo é de 7 dias após o recebimento do produto.
                    Envie um e-mail para gimroots@hotmail.com informando o número do pedido, nome completo e CPF da compra para darmos início ao procedimento de garantia.<br>
                    Em até 2 dias úteis enviaremos orientações de envios.
                </p>
                <p>
                    Os produtos devolvidos sem a comunicação de troca ou devolução através do e-mail acima, não serão reenviados ao cliente sem o contato prévio.
                    Em caso de devolução do produto o prazo para estorno do valor da compra é de até 30 dias corridos após o contato com o cliente.<br>
                    Para produtos em atendimento de garantia, o prazo para reparo é de até 30 dias corridos e postagem do produto de volta ao cliente.<br>
                    Já para a troca realizada na loja física, é necessária a apresentação do cupom ou nota fiscal. Não se preocupe, caso um novo produto seja adquirido no ato da troca, um novo 
                    comprovante referente ao(s) novo(s) item(ns) será impresso, para eventual necessidade de troca.
                <p>
                    Quero trocar um produto que está com o valor diferente do que eu paguei. E agora?
                </p>
                <p>
                    <b>Valor maior!</b> A troca por outro produto igual, de cor ou tamanho diferente e valor maior pode ser realizada sem custo algum.
                </p>
                <p>
                    <b>Valor menor!</b> A troca por outro produto igual, de cor ou tamanho diferente e valor menor pode ser realizada sem custo algum. O restante do valor ficará disponível em seu CPF como vale-troca. 
                </p>
                    <b>Confira sempre os produtos que chegam para você!</b> <br>É importante verificar o pedido recebido no momento da entrega. 
                    Examine a descrição do produto escolhido: modelo, numeração, código da cor e todas as características do produto adquirido na nossa loja virtual.<br>
                </p>
                <p>
                    <b>Lembre-se:</b> algumas peças possuem cores sortidas e a foto no site é meramente ilustrativa.<br>
                    Qualquer dúvida quanto a este ou outro assunto, disponibilizamos o e-mail<b> gimroots@hotmail.com</b>  para esclarecimentos.
                </p>
                
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