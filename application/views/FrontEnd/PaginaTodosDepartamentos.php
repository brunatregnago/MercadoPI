
<div class="container">
    <div id="owl-demo" class="owl-theme owl-bruna">
        <div class="row">
            <?php
            foreach ($todosdepartamentos as $tdep) {
                echo '<div class="col-3 mt-4">';
                echo '<div class="promocao">';
                echo '<div class="dep">';
                echo '<a href="' . $this->config->base_url() . 'index.php/PagDepartamento/lista/' . $tdep->id_departamento . '"><h1>' . $tdep->nome_departamento . '</h1></a>';
                echo '<hr>';

                foreach ($categoria as $cat) {
                    if ($cat->cd_departamento == $tdep->id_departamento) {
                        echo '<div class="item">';
                        echo '<div class="produto">';
                        echo '<a value="' . $cat->id_categoria . '"' . ' href="' . $this->config->base_url() . 'index.php/PagCategoria/lista/' . $cat->id_categoria . '">' . $cat->nome_categoria . '</a>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</div>
