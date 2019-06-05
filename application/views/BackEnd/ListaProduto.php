<div class="container">
    <br>
    <div class=" table-responsive">
        <table class="table table-striped table-bordered" id="table" style="text-align: center;">
            <thead>
                <tr>
                    <th> Imagem </th>
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
                    echo '<td>' . $p->imagem_produto . '</td>';
                    echo '<td>' . $p->id_produto . '</td>';
                    echo '<td>' . $p->nome_produto . '</td>';
                    echo '<td>' . $p->peso_produto . '</td>';
                    echo '<td>' . $p->valor_unitario_produto . '</td>';
                    echo '<td>'
                    . '<a class="btn btn-warning text-white mr-2" href="' . $this->config->base_url() . 'index.php/Prova/alterar/'
                    . $p->id_produto . '"><i class="fas fa-edit"></i></a>'
                    . '<a class="btn btn-danger" href="' . $this->config->base_url() . 'index.php/Prova/deletar/'
                    . $p->id_produto . '"><i class="fas fa-trash"></i></a>'
                    . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>