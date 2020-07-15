<?php

    $gastos = $model->result('SELECT * FROM gasto ORDER BY data ASC');

?>

<a class="adicionar" href="gastos/criar">Adicionar</a>

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
        if($gastos){
            foreach ($gastos as $key => $gasto) { ?>
                <tr>
                    <td><input type="checkbox" data="<?php echo $gasto->id_gasto; ?>"></td>
                    <td><?php echo $gasto->valor; ?></td>
                    <td><?php echo $gasto->data; ?></td>
                    <td><?php echo $gasto->descricao; ?></td>
                    <td><a class="editar" href="gastos/editar/<?php echo $gasto->id_gasto; ?>">Editar</a></td>
                </tr>
            <?php }
        }?>
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
            var ids_gasto = '';
            $('input[type="checkbox"]').each(function(){
                if($(this).is(':checked')){
                    ids_gasto += $(this).attr('data')+'-';
                }
            })
            ids_gasto = ids_gasto.slice(0, -1);
            window.location.href = "<?php echo $base; ?>gastos/deletar/"+ids_gasto; 
        });
    });
</script>
