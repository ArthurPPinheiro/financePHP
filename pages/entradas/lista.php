<?php

    $entradas = $model->result('SELECT * FROM entrada ORDER BY data ASC');

?>



<a class="adicionar" href="entradas/criar">Adicionar</a>


<table>
    <thead>
        <tr>
            <th></th>
            <th>Valor</th>
            <th>Data</th>
            <th>Descricao</th>
            <th><a class="deleta-selecionados" href="#">Deletar Selecionados</a></th>
        </tr>
    </thead>
    <tbody>
            <?php 
            if($entradas){
                foreach ($entradas as $key => $entrada) { ?>
                    <tr>
                        <td><input type="checkbox" data="<?php echo $entrada->id_entrada; ?>"></td>
                        <td><?php echo $entrada->valor; ?></td>
                        <td><?php echo $entrada->data ; ?></td>
                        <td><?php echo $entrada->descricao; ?></td>
                        <td><a class="editar" href="entradas/editar/<?php echo $entrada->id_entrada; ?>">Editar</a></td>
                    </tr>
                <?php } 
            } ?>
    </tbody>
</table>

<script>
    $(document).ready(function(){

        $('input[type="checkbox"]').change(function(){
            $('.deleta-selecionados').fadeOut();
            $('input[type="checkbox"]').each(function(){
                if($(this).is(':checked')){
                    $('.deleta-selecionados').fadeIn();
                }
            })
        });
        $('.deleta-selecionados').click(function(event){
            event.preventDefault();
            var ids_entrada = '';
            $('input[type="checkbox"]').each(function(){
                if($(this).is(':checked')){
                    ids_entrada += $(this).attr('data')+'-';
                }
            })
            ids_entrada = ids_entrada.slice(0, -1);
            window.location.href = "<?php echo $base; ?>entradas/deletar/"+ids_entrada; 
        });
    });
</script>