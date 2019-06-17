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
        <div class="headertwo">
            <ul class="nav justify-content">
                <li class="nav-item">
                    <a class="nav-link" href="#"><img src=""></a>
                </li>
                <form name="frmBusca" method="post" action="" >
                    <input type="text" name="palavra" />
                    <input type="submit"  value="Buscar" />
                </form>

                <div class="col-md-2 d-none d-md-block"><!--Link para cadastrar usuário-->
                    <a href="" class="user">
                        <i class="far fa-user"></i>
                    </a>
                </div>
            </ul>
        </div>
    </body>
</html>
