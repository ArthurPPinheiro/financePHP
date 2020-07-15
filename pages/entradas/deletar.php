<?php
    $ids = explode('-',$_GET['ids_entrada']);
    foreach ($ids as $key => $id) {
        $entrada = $model->row('SELECT * FROM entrada WHERE id_entrada = "'.$id.'"');
        $model->query('DELETE FROM entrada WHERE id_entrada = "'.$id.'"');
    }
    header('Location:'.$base.'entradas');
?>