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
            <img src="imagens/Logo_white.png" class="img-fluid" style="position: absolute; height: 300px;" alt="foto de capa">
            <img src="imagens/capasurf.png" class="img-fluid">
            </div>
        </div>
        <div class="container mt-3">
            <div class="d-flex flex-row">
                <img src="imagens/Logo_black.png" style="height: 50px;">
                <div class="container-fluid">
                    <input type="text" class="form-control font-accent tt-input mx-80" data-type="search" placeholder="Procurar no Portal do Surf" autocomplete="off" spellcheck="false" dir="center" style="position: relative; vertical-align: top; background-color: transparent;">
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
        <div class="container mt-2">
        <h1>Selecione praia mais perto de você e se prepare pro surf!</h1>
        <select class="form-control font-accent tt-input mx-80" name=”praia”>
                <option disabled selected>Qual praia?</option>
                <option value=”una”>Barra do Una</option>
                <option value=”juquehy”>Juquehy</option>
                <option value=”maresias”><a class=nav-link href="previsaum.php">Maresias</a></option>
                <option value=”baleia”>Baleia</option>
                <option value=”pauba”>Pauba</option>
                <option value=”guaeca”>Guaeca</option>
                <option value="riviera">Riviera</option>
            </select>
        </div>
    </body>