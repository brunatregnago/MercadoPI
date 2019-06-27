
<div class="container">
    <div class="container">
    <?php
    foreach ($subcategoria as $sub) {
        echo '<div class="promocao">';
        echo '<div class="row">';
        echo '<div class="col-12">';
        echo '<h1><a style="text-decoration: none;font-family: Helvetica, sans-serif;font-size: 21px;color: #00802b;font-weight: bold;" href="http://127.0.0.1/MercadoPI/index.php/PagSubcategoria/lista/' . $sub->id_subcategoria . '">' . $sub->nome_subcategoria . '</a></h1>';
        

        echo '<hr>';
        echo '</div>';
        echo '</div>';
        echo '<div class="row">';
        echo '<div id="owl-demo" class="owl-carousel owl-theme owl-bruna">';
        foreach ($produto as $po) {
            if ($po->cd_subcategoria == $sub->id_subcategoria) {
                echo '<div class="item">';
                echo '<div class="produto">';
                if ($po->imagem_produto === Null) {
                    echo '<img style="height:170px; width:170px;margin:5px;" src="http://127.0.0.1/MercadoPI/uploads/noimage.png"/>';
                } else {
                    echo '<img style="height:170px; width:170px;margin:5px;" src="http://127.0.0.1/MercadoPI/uploads/' . $po->imagem_produto . '"/>';
                }
                echo '<h2>' . $po->nome_produto . '</h2>';
                echo '<h5>' . $po->peso_produto . ' ' . $po->medida . '</h5>';
                echo '<h4>R$ ' . $po->valor_unitario_produto . ' ' . $po->medida_valor . '</h4>';
                echo '<center><a href="http://127.0.0.1/MercadoPI/index.php/PagProdutoEspecifico/lista/' . $po->id_produto . '"><button type="submit" class="btn">Visualizar</button></a></center>';

                echo '</div>';
                echo '</div>';
            }
            
        }
    }
    ?>
</div>
<script src="<?= $this->config->base_url() ?>js/owl.carousel.min.js"></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: false,
        margin: 10,
        responsiveClass: true,
        nav: false,
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