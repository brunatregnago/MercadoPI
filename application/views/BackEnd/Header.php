<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mercado</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-danger bg-success">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?= $this->config->base_url() . 'Produto/lista'; ?>">Produto</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" href="<?= $this->config->base_url() . 'Promocao/lista'; ?>">Promoção</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?= $this->config->base_url() . 'Pais/lista'; ?>">Entrega</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">
                        <i class="fas fa-sign-out-alt"></i> Sair 
                    </a>
                </li>
            </ul>
        </nav>