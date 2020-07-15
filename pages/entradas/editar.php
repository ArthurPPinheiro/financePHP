<?php
    $entrada = $model->row('SELECT * FROM entrada WHERE id_entrada = "'.$_GET['id_entrada'].'"');
    if(count($_POST) > 0){
        $altera = new stdClass();
        $altera->valor = $_POST['valor'];
        $altera->data = $_POST['data'];
        $model->update('entradas',$altera, 'id_entrada = "'.$_GET['id_entrada'].'"');
        header('Location:'.$base.'entradas');
    }
?>

<form method="POST">
    <label>
        <p>Valor</p>
        <input type="number" name="valor" value="<?php echo $entrada->valor; ?>" required>
    </label>
    <label>
        <p>Data</p>
        <input type="date" name="data" value="<?php echo $entrada->data; ?>" required>
    </label>
    <label>
        <p>Descricao</p>
        <input type="text" name="descricao" value="<?php echo $entrada->descricao; ?>" required>
    </label>
    <button type="submit">Salvar</button>
   </form>

