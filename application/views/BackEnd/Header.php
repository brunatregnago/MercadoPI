<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mercado</title>
        <link rel="stylesheet" type="text/css" href="BackEnd/Style.css">
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
                        <a class="nav-link" href="<?= $this->config->base_url() . 'Promocao/cadastro'; ?>">Promoção</a>
                        <hr>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $this->config->base_url() . 'Produto/cadastro'; ?>">Produto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $this->config->base_url() . 'Departamento/cadastro'; ?>">Departamento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $this->config->base_url() . 'Categoria/cadastro'; ?>">Categoria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $this->config->base_url() . 'Subcategoria/cadastro'; ?>">Subcategoria</a>
                        <hr>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= $this->config->base_url() . 'Pais/lista'; ?>">Entrega</a>
                        <hr>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $this->config->base_url() . 'Pais/cadastro'; ?>">País</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $this->config->base_url() . 'Estado/cadastro'; ?>">Estado</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $this->config->base_url() . 'Cidade/cadastro'; ?>">Cidade</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $this->config->base_url() . 'Bairro/cadastro'; ?>">Bairro</a>
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