<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>Portal do Surf</title>
    </head>
    <body>
            <div class="container mt-3" style="height: 300px;">
                <div class="d-flex justify-content-center">
                <img src="imagens/Logo_black.png" class="img-fluid" style="height: 300px;" alt="foto de capa">
                </div>
            </div>
        <div class="container mt-3">
            <div class="d-flex flex-row">
                <img src="imagens/Logo_black.png" style="height: 50px;">
                <div class="container-fluid">
                    <input type="text" class="form-control font-accent tt-input mx-80" data-type="search" placeholder="Procurar no Portal do Surf" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;">
                </div>
                <nav class="w-25">
                    <ul class="nav">
                        <?php if(isset($usuario) && $usuario != []) {?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Olá <?php echo $usuario["nome"]; ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sair</a>
                        </li>
                        <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cadastro</a>
                        </li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
            <nav>
                <ul class="nav justify-content-between mt-2">
                    <li class="nav-item">
                        <a class="nav-link" href="previsao.php">Previsão</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="caronas.php">Carona</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="desapego.php">Desapego</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="encontre.php">Encontre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="noticias.php">Notícias</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Links</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" target=_blank href="https://www.isasurf.org/">ISA</a>
                            <a class="dropdown-item" target=_blank href="https://www.worldsurfleague.com/">World Surf League</a>
                            <a class="dropdown-item" target=_blank href="http://wsllatinamerica.com/">WSL Latin America</a>
                            <a class="dropdown-item" target=_blank href="http://www.abrasp.com/">ABRASP</a>
                            <a class="dropdown-item" target=_blank href="https://magicseaweed.com/">Magic Sea Weed</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
        <div class=container>
            <h1>PRAIA DE MARESIAS</h1>
            <div class="d-flex flex-row mr-3">
                <img src="imagens/surfmaresias.png" class="img-fluid" alt="responsive image">
                <div class="container ml-3">
                    <p>A onda de Maresias detém o título de uma das melhores ondas de São Paulo.</p>
                    <ul>
                        <li>Tamanho - 2 a 12 pés</li>
                        <li>Ondulação ideal - Sudeste | Sul</li>
                        <li>Vento ideal - Quadrante Leste | Quadrante Norte</li>
                        <li>Grau de dificuldade - Alta</li>
                        <li>Melhor época - Outono | Primavera</li>
                        <li>Constância - Alta</li>
                        <li>Crowd - Intenso</li>
                    </ul>
                </div>
            </div>
            <div class="container mt-2">
                <h3>Condições atuais:</h3>
                <img src="imagens/prevdia.png" class="img-fluid" alt="condicoes atuais">
            </div>
            <div class="container mt-2">
                <nav>
                    <h2>Encontre nesta área:</h2>
                    <ul class="nav justify-content-between mt-2">
                        <li class="nav-item"><a class=nav-link href="#">Acomodação</a></li>
                        <li class="nav-item"><a class=nav-link href="#">Surf Shop</a></li>
                        <li class="nav-item"><a class=nav-link href="#">Manutenção</a></li>
                        <li class="nav-item"><a class=nav-link href="#">CARONA</a></li>
                    </ul>
                </nav>
            </div>
            <div class="container p-0">
                <img src="imagens/mapa.png" class="img-fluid" alt="condicoes atuais">
            </div>
        </div>
        <div class=container>
            <h2>Itens a venda nesta área:</h2>
            <div class=row>
                <img src="imagens/venda1.png" class="img-fluid mx-1" alt="condicoes atuais">
                <img src="imagens/venda1.png" class="img-fluid mx-1" alt="condicoes atuais">
                <img src="imagens/venda1.png" class="img-fluid mx-1" alt="condicoes atuais">
            </div>
        </div>
        <div class="container mt-2">
            <h3>Previsão dos próximos 7 dias:</h3>
            <img src="imagens/previsurf.png" class="img-fluid" alt="condicoes atuais">
        </div>
        <div class="container mt-2">
            <h3>Pra quem manja:</h3>
            <img src="imagens/manja.png" class="img-fluid" alt="condicoes atuais">
        </div>
        <div class=container>
            <h2>Fotos da galera:</h2>
            <div class=row>
                <img src="imagens/postai.png" class="img-fluid mx-1" alt="condicoes atuais">
                <img src="imagens/postai.png" class="img-fluid mx-1" alt="condicoes atuais">
            </div>
        </div>
        <footer>
            <div class="container mt-3">
                <div class="row">
                    <section class="col-3">
                        <form>
                            <div class="form-group mt-5">
                                <p class="font-weight-bold">Entre em contato</p>
                                <input type="text" class="form-control" placeholder="Nome">
                                <input type="email" class="form-control" placeholder="E-mail">
                                <input type="text" class="form-control" placeholder="Mensagem">
                            </div>
                            <button type="submit" class="btn btn-primary mb-5">Dropar</button>
                        </form>
                    </section>
                    <section class="col-6" id="footerlogo">
                        <img src="imagens/Logo_degrade.png" alt="logo portal do surf">
                    </section>
                    <section class="col-3">
                        <form>
                            <div class="form-group mt-5">
                                <p class="font-weight-bold">Cadastre-se e receba nossas novidades:</p>
                                <input type="email" class="form-control" placeholder="E-mail">
                            </div>
                            <button type="submit" class="btn btn-primary">Cadastre-se</button>
                        </form>
                    </section>
                </div>
            </div>
        </footer>
    </body>
</html>
