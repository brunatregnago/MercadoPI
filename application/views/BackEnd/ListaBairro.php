
    <div class=" table-responsive col-9 mt-5">
        <table class="table table-striped table-bordered col-md-10" id="table" style="text-align: center;">
        <?php
        $mensagem = $this->session->flashdata('mensagem');
        echo (isset($mensagem) ? '<div class="alert alert-warning col-md-10" role="alert">' . $mensagem . '</div>' : '');
        ?>  
            <thead>
                <tr>
                    <th> Bairro </th>
                    <th> Cidade </th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($bairro as $b) {
                    echo '<tr>';
                    echo '<td>' . $b->nome_bairro . '</td>';
                    echo '<td>' . $b->cidade . ' - ' . $b->estado. '</td>';
                    echo '<td>'
                    . '<a class="btn btn-warning text-white mr-2" href="' . $this->config->base_url() . 'index.php/Bairro/alterar/'
                    . $b->id_bairro . '"><i class="fas fa-edit"></i></a>'
                    . '<a class="btn btn-danger" href="' . $this->config->base_url() . 'index.php/Bairro/deletar/'
                    . $b->id_bairro . '"><i class="fas fa-trash"></i></a>'
                    . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>