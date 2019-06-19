
<div class="container">
    <div class="promocao">
        <div class="row">
            <div class="col-12">
                <h1></h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div id="owl-demo" class="owl-carousel owl-theme owl-bruna">
                <?php
                foreach ($departamento as $dep) {
                    echo '<div class="item">';
                    echo '<div class="produto">';if ($dep->imagem_produto === Null) {
                        echo '<img src="uploads/noimage.png"/>';
                    } else {
                        echo '<img src="' . $dep->imagem_produto . '"/>';
                    }
                    echo '<h2>' . $dep->nome_produto . '</h2>';
                    echo '<h5>' . $dep->peso_produto . ' ' . $dep->medida . '</h5>';
                    echo '<h4>R$ ' . $dep->valor_unitario_produto . ' ' . $dep->medida_valor . '</h4>';
                    echo '<center><button type="button" class="btn" data-toggle="button" aria-pressed="false" autocomplete="off">Visualizar</button></center>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>
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
