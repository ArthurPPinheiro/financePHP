<?php
    $gasto = $model->row('SELECT * FROM gasto WHERE id_gasto = "'.$_GET['id_gasto'].'"');
    if(count($_POST) > 0){
        $altera = new stdClass();
        $altera->valor = $_POST['valor'];
        $altera->data = $_POST['data'];
        $model->update('gastos',$altera, 'id_gasto = "'.$_GET['id_gasto'].'"');
        header('Location:'.$base.'gastos');
    }
?>

<form method="POST">
    <label>
        <p>Valor</p>
        <input type="number" name="valor" value="<?php echo $gasto->valor; ?>" required>
    </label>
    <label>
        <p>Data</p>
        <input type="date" name="data" value="<?php echo $gasto->data; ?>" required>
    </label>
    <label>
        <p>Descricao</p>
        <input type="text" name="descricao" value="<?php echo $gasto->descricao; ?>" required>
    </label>
    <button type="submit">Salvar</button>
   </form>

