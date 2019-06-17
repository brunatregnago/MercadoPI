<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mercado</title>
        <link href="<?= $this->config->base_url() ?>cssStyle.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <style>
            .nav-link{
                color: #9BCD9B;
            }
            .nav-link:hover{
                color: white;
            }
        </style>
    </head>
    <body>

        <div class="row"> 
            <div class="col-2" style="background-color:#008B45;">
                <div class="text-white mt-4 text-center">Sistema do Mercado</div>
                <ul class="nav flex-column justify-content-center">
                    <li class="nav-item mt-4">
                        <a class="nav-link" href="<?= $this->config->base_url() . 'index.php/Promocao/cadastro'; ?>">Promoção</a>
                        <hr>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $this->config->base_url() . 'index.php/Produto/lista'; ?>">Produto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $this->config->base_url() . 'index.php/Departamento/lista'; ?>">Departamento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $this->config->base_url() . 'index.php/Categoria/lista'; ?>">Categoria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $this->config->base_url() . 'index.php/Subcategoria/lista'; ?>">Subcategoria</a>
                        <hr>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= $this->config->base_url() . 'index.php/Pais/lista'; ?>">Entrega</a>
                        <hr>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $this->config->base_url() . 'index.php/Pais/lista'; ?>">País</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $this->config->base_url() . 'index.php/Estado/lista'; ?>">Estado</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $this->config->base_url() . 'index.php/Cidade/lista'; ?>">Cidade</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $this->config->base_url() . 'index.php/Bairro/lista'; ?>">Bairro</a>
                        <hr>
                    </li>
                    <li class="nav-item md-5">
                        <a class="nav-link" style="color: #a9a9a9;" href="#">
                            <i class="fas fa-sign-out-alt"></i> Sair 
                        </a>
                        <br>
                    </li>
                </ul>
            </div>
            <div class="col-1"></div>