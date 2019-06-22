
<div class="container">
    <div id="owl-demo" class="owl-theme owl-bruna">
        <div class="row">
            <?php
            foreach ($todosdepartamentos as $tdep) {
                echo '<div class="col-3 mt-4">';
                echo '<div class="promocao">';
                echo '<h1 value="' . $tdep->id_departamento . '">' . $tdep->nome_departamento . '</h1>';
                echo '<hr>';

                foreach ($categoria as $cat) {
                    if ($cat->cd_departamento == $tdep->id_departamento) {
                        echo '<div class="item">';
                        echo '<div class="produto">';
                        echo '<a value="' . $cat->id_categoria . '"' . ' href="">' . $cat->nome_categoria . '</a>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</div>
