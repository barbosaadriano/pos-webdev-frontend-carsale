<?php
//	define("URL","http://localhost/carsale/");
$page = "home";
if (isset($_REQUEST['url'])):
    $page = trim($_REQUEST['url']);
endif;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Car Sale - Especialista em carros antigos e Relíquias </title>
        <meta charset="utf-8">
        <meta name="description" content="Revenda de carros, novos e usuados de alta qualidade">
        <meta name="keywords" content="carros,novos,usados,importados,ivate">
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <!--meta tag do facebook -->
        <meta property="og:locale" content="pt_BR">
        <meta property="og:title" content="Car Sale - Adriano Barbosa">
        <meta property="og:description" content="revenda de carros novos e usados de alta qualidade">
        <meta property="og:image" content="http://pos.professorburnes.com.br/carsale/img/carsale.jpg">
        <meta property="og:image:type" content="image/jpeg">
        <meta property="og:image:width" content="800">
        <meta property="og:image:height" content="315">
        <meta property="og:type" content="website">

        <!--twitter card -->

        <meta property="twitter:card" content="summary">			
        <meta property="twitter:url" content="@professorburnes">			
        <meta property="twitter:image" content="http://pos.professorburnes.com.br/carsale/img/carsale.jpg">
        <meta property="twitter:title" content="Revenda de carros, novos e usuados de alta qualidade">

        <!-- css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="icon" type="image/png" href="imgs/icone.png">

        <!-- JavasCript -->
        <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-inputmask.min.js"></script>
        <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>


    </head>
    <body>
        <header>
            <div class="container">
                <a href="index.php" title="Home" class="logo">
                    <img src="imgs/logo.png" alt="CarSale">
                    Car Sale
                </a>
                <div class="info">
                    <span><i class="fa fa-phone"></i> 0800 011 1406</span>
                    <a href="#" title="facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="#" title="twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#" title="instagran">
                        <i class="fa fa-instagram"></i>
                    </a>

                </div>
            </div>
        </header>
        <nav class="navbar navbar-default">
            <div class="container container-fluid">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="sobre">Sobre</a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Veículos <i class="caret"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="nacionais">Nacionais</a><li>
                                <li><a href="importados">Importados</a><li>
                            </ul>
                        </li>
                        <li><a href="contato">Contato</a></li>						
                    </ul>
                    <form name="form1" method="post" action="buscar" class="navbar-form navbar-right">
                        <div class="input-group input-group-lg">
                            <input type="text" name="busca" placeholder="palavra-chave..." class="form-control">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
        <main>
            <?php
            $page = ($page == "index") ? "home.php" : "$page.php";
            if (file_exists($page))
                include_once($page);
            else
                include_once('404.php');
            ?>	
        </main>
        <div class="clearfix"></div>
        <footer>
            <div class="container">
                <span class="pull-left">
                    <img src="imgs/logo.png" alt="Car Sale">
                    2016 - Todos os direitos reservados
                </span>
                <span class="pull-right">
                    Desenvolvido por avantagem
                </span>
            </div>
        </footer>
    </body>
</html>
