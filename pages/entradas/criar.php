<?php
    if(count($_POST) > 0){
        $insere = new stdClass();
        $insere->valor = $_POST['valor'];
        $insere->data = $_POST['data'];
        $insere->descricao = $_POST['descricao'];
        $model->insert('entrada',$insere);
        header('Location:'.$base.'entradas');
        }
?>

<form method="POST">
    <label>
        <p>Valor</p>
        <input type="number" name="valor" required>
    </label>
    <label>
        <p>Data</p>
        <input type="date" name="data" required>
    </label>
    <label>
        <p>Descricao</p>
        <input type="text" name="descricao" required>
    </label>
    <button type="submit">Salvar</button>
   </form>

