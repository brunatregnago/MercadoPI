<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mercado</title>  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link href="<?= $this->config->base_url() ?>css/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= $this->config->base_url() ?>css/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <link href="<?= $this->config->base_url() ?>css/Style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="headerone">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="#">Institucional</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Fale Conosco</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Área Restrita</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="headertwo col-12 mt-2">
                <ul class="nav justify-content">
                    <li class="nav-item col-md-3">
                        <a class="nav-link" href="#"><img src=""></a>
                    </li>
                    <form class="form-inline col-md-5" action="<?= base_url('buscar')?>" method="POST">
                        <input class="form-control mr-sm-2 col-md-10" id="buscar" name="buscar" type="search" placeholder="Pesquise aqui o que deseja" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                    </form>

                    <div class="col-md-3 d-none d-md-block"><!--Link para cadastrar usuário-->
                        <li><a href="" class="user">
                                <i class="far fa-user"></i>
                            </a>
                        </li>
                    </div>
                </ul>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"</script>
        <!-- jQuery UI -->
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"</script>



