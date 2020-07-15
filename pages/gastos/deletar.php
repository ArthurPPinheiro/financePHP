<?php
    $ids = explode('-',$_GET['ids_gasto']);
    foreach ($ids as $key => $id) {
        $gasto = $model->row('SELECT * FROM gastos WHERE id_gasto = "'.$id.'"');
        $model->query('DELETE FROM gasto WHERE id_gasto = "'.$id.'"');
    }
    header('Location:'.$base.'gastos');
?>