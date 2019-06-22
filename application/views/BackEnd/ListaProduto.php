<!--pagina departamento recebe o id do departamento
 que foi selecionado pelo usuario e filtra os produtos que contem
o cd desse departamento


pagina categoria recebe o id do departamento e filtra os produtos
que possuem o cd dessa categoria -->
    <div class=" table-responsive col-9 mt-5">
        <table class="table table-striped table-bordered col-md-10" id="table" style="text-align: center;">
        <?php
        $mensagem = $this->session->flashdata('mensagem');
        echo (isset($mensagem) ? '<div class="alert alert-warning col-md-10" role="alert">' . $mensagem . '</div>' : '');
        ?>  
            <thead>
                <tr>
                    <!--<th> Imagem </th>-->
                    <th> Código </th>
                    <th> Descrição </th>
                    <th> Peso </th>
                    <th> Preço </th>
                    <th> Departamento </th>
                    <th> Categoria </th>
                    <th> Subcategoria </th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($produto as $p) {
                    echo '<tr>';
                 // echo '<button type="button" class="btn btn-light mr-4 mb-3 mt-4 shadow text-center"><img class="img-fluid mb-2" style="max-height:150px; max-width:150px;" src="' . $this->config->base_url() . 'uploads/' . $e->imagem_produto . '">';
                    echo '<td>' . $p->id_produto . '</td>';
                    echo '<td>' . $p->nome_produto . '</td>';
                    echo '<td>' . $p->peso_produto .' '. $p->medida .'</td>';
                    echo '<td>' .'R$ '. $p->valor_unitario_produto . '</td>';
                    echo '<td>' . $p->departamento . '</td>';
                    echo '<td>' . $p->categoria . '</td>';
                    echo '<td>' . $p->subcategoria . '</td>';
                    echo '<td>'
                    . '<a class="btn btn-warning text-white mr-2" href="' . $this->config->base_url() . 'index.php/Produto/alterar/'
                    . $p->id_produto . '"><i class="fas fa-edit"></i></a>'
                    . '<a class="btn btn-danger" href="' . $this->config->base_url() . 'index.php/Produto/deletar/'
                    . $p->id_produto . '"><i class="fas fa-trash"></i></a>'
                    . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>