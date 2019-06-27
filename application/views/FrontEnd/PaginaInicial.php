
<!--Promoção-->
<div class="container">
    <div class="promocao">
        <div class="row">
            <div class="col-12">
                <a style="text-decoration: none;" href="http://127.0.0.1/MercadoPI/index.php/PagPromocao/lista"><h1>Promoções</h1></a>
                <hr>
            </div>
        </div>
        <div class="row">
            <div id="owl-demo" class="owl-carousel owl-theme owl-bruna">
                <?php
                foreach ($promocao as $pr) {
                    echo '<div class="item">';
                    echo '<div class="produto">';
                    if ($pr->imagem_produto === Null) {
                        echo '<img style="height:170px; width:170px;margin:5px;" src="http://127.0.0.1/MercadoPI/uploads/noimage.png"/>';
                    } else {
                        echo '<img style="height:170px; width:170px;margin:5px;" src="http://127.0.0.1/MercadoPI/uploads/' . $pr->imagem_produto . '"/>';
                    }
                    echo '<h2>' . $pr->nome_produto . '</h2>';
                    echo '<h5>' . $pr->peso_produto . ' ' . $pr->medida . '</h5>';
                    echo '<h4>R$ ' . $pr->valor_unitario_produto . ' ' . $pr->medida_valor . '</h4>';
                    echo '<center><a href="http://127.0.0.1/MercadoPI/index.php/PagProdutoEspecifico/lista/' . $pr->id_produto . '"><input type="hidden" value="' . $pr->id_produto . '"><button type="submit" class="btn">Visualizar</button></a></center>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>

    <!--CATEGORIA de protudos da mercearia HOME
    <div class="engloba_cate_prod d-none d-md-block">-->

    <div class="promocao">
        <div class="row">

            <div class="col-12">
                <?php
                foreach ($departamentoi as $di) {
                    echo '<h1><a style="text-decoration: none;font-family: Helvetica, sans-serif;font-size: 21px;color: #00802b;font-weight: bold;" href="http://127.0.0.1/MercadoPI/index.php/PagDepartamento/lista/' . $di->id_departamento . '">' . $di->nome_departamento . '</a></h1>';
                    $dep = $di->id_departamento;
                }
                ?>
                <hr>
            </div>
        </div>
        <!--            <div class="col-md-2">
                        <div class="categorias">
                            <h1><a href="">Mercearia</a></h1>
                            <h2><a href="">Grãos</a></h2>
                            <h2><a href="">Óleos, azeites e vinagres</a></h2>
                            <h2><a href="">Temperos</a></h2>
                            <h2><a href="">Farinhas</a></h2>
                            <h2><a href="">Massas e molhos</a></h2>
                            <h2><a href="">Doces e sobremesas</a></h2>
                        </div>
                    </div>-->
        <div class="row">
            <div class="col-md-12">  
                <div id="owl-demo" class="owl-carousel owl-theme owl-bruna">
                    <?php
                    foreach ($produto as $po) {

                        if ($po->cd_departamento === $dep) {
                            echo '<div class="item">';
                            echo '<div class="col-md-12">';
                            echo '<div class="produto">';
                            if ($po->imagem_produto === Null) {
                                echo '<img style="height:170px; width:170px;margin:5px;" src="http://127.0.0.1/MercadoPI/uploads/noimage.png"/>';
                            } else {
                                echo '<img style="height:170px; width:170px;margin:5px;" src="http://127.0.0.1/MercadoPI/uploads/' . $po->imagem_produto . '"/>';
                            }
                            echo '<h2>' . $po->nome_produto . '</h2>';
                            echo '<h5>' . $po->peso_produto . ' ' . $po->medida . '</h5>';
                            echo '<h4>R$ ' . $po->valor_unitario_produto . ' ' . $po->medida_valor . '</h4>';
                            echo '<center><a href="http://127.0.0.1/MercadoPI/index.php/PagProdutoEspecifico/lista/' . $po->id_produto . '"><input type="hidden" value="' . $po->id_produto . '"><button type="submit" class="btn">Visualizar</button></a></center>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>


    <div class="promocao">
        <div class="row">

            <div class="col-12">
                <?php
                foreach ($departamentoit as $dit) {
                    echo '<h1><a style="text-decoration: none;font-family: Helvetica, sans-serif;font-size: 21px;color: #00802b;font-weight: bold;" href="http://127.0.0.1/MercadoPI/index.php/PagDepartamento/lista/' . $dit->id_departamento . '">' . $dit->nome_departamento . '</a></h1>';

                    $dep = $dit->id_departamento;
                }
                ?>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">  
                <div id="owl-demo" class="owl-carousel owl-theme owl-bruna">
                    <?php
                    foreach ($produto as $po) {

                        if ($po->cd_departamento === $dep) {
                            echo '<div class="item">';
                            echo '<div class="col-md-12">';
                            echo '<div class="produto">';
                            if ($po->imagem_produto === Null) {
                                echo '<img style="height:170px; width:170px;margin:5px;" src="http://127.0.0.1/MercadoPI/uploads/noimage.png"/>';
                            } else {
                                echo '<img style="height:170px; width:170px;margin:5px;" src="http://127.0.0.1/MercadoPI/uploads/' . $po->imagem_produto . '"/>';
                            }
                            echo '<h2>' . $po->nome_produto . '</h2>';
                            echo '<h5>' . $po->peso_produto . ' ' . $po->medida . '</h5>';
                            echo '<h4>R$ ' . $po->valor_unitario_produto . ' ' . $po->medida_valor . '</h4>';
                            echo '<center><a href="http://127.0.0.1/MercadoPI/index.php/PagProdutoEspecifico/lista/' . $po->id_produto . '"><input type="hidden" value="' . $po->id_produto . '"><button type="submit" class="btn">Visualizar</button></a></center>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--LINK POR IMAGEM PARA CATEGORIAS
<div class="prop d-none d-md-block">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Hortifruti</h2>
                <img class="col-md-12" src="" alt="Hortifruti">
            </div>
            <div class="col-md-4">
                <h2>Laticínios</h2>
                <img class="col-md-12" src="" alt="Laticinios">
            </div>
            <div class="col-md-4">
                <h2>Limpeza</h2>
                <img class="col-md-12" src="" alt="Limpeza">
            </div>
        </div>
    </div>
</div>-->



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="<?= $this->config->base_url() ?>js/owl.carousel.min.js"></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: false,
        margin: 10,
        responsiveClass: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
</script>
