
<div class="container">
    <?php
    foreach ($subcategoria as $subcat) {
        echo '<div class="row">';
        echo '<div class="col-12">';
        echo '<div class="promocao">';
        echo '<h1><a style="text-decoration: none;font-family: Helvetica, sans-serif;font-size: 21px;color: #00802b;font-weight: bold;" href="http://127.0.0.1/MercadoPI/index.php/PagSubcategoria/lista/' . $subcat->id_subcategoria . '">' . $subcat->nome_subcategoria . '</a></h1>';
        echo '<hr>';
        echo '<div class="row">';
        echo '<div id="owl-demo" class="owl-carousel owl-theme owl-bruna">';
        foreach ($produto as $po) {
            if ($po->cd_subcategoria == $subcat->id_subcategoria) {
                echo '<div class="item">';
                echo '<div class="produto">';
                if ($po->imagem_produto === Null) {
                    echo '<img style="height:170px; width:170px;margin:5px;" src="http://127.0.0.1/MercadoPI/uploads/noimage.png"/>';
                } else {
                    echo '<img style="height:170px; width:170px;margin:5px;" src="http://127.0.0.1/MercadoPI/uploads/' . $po->imagem_produto . '"/>';
                }
                echo '<h2>' . $po->nome_produto . '</h2>';
                echo '<h5>' . $po->peso_produto . ' ' . $po->medida . '</h5>';

                $preco = str_replace(".", ",", $po->valor_unitario_produto);
                echo '<h4>R$ ' . $preco . ' ' . $po->medida_valor . '</h4>';

                echo '<center><a href="http://127.0.0.1/MercadoPI/index.php/PagProdutoEspecifico/lista/' . $po->id_produto . '"><button type="submit" class="btn">Visualizar</button></a></center>';

                echo '</div>';
                echo '</div>';
            }
        }
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    ?>
</div>


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