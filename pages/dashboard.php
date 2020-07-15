<?php 

$entradas_total = 0;

$gastos = $model->result('SELECT * FROM gasto ORDER BY data ASC');
$entradas = $model->result('SELECT * FROM entrada ORDER BY data ASC');



$gastos_total = 0;
$gastos_mes_total = 0;

$mes = date('m');

if($gastos){
    foreach ($gastos as $key => $gasto) {
        $gastos_total = $gastos_total + $gasto->valor;
    }
}

if($entradas){
    foreach ($entradas as $key => $entrada) {
        $entradas_total = $entradas_total + $entrada->valor;
    }
}

$valor_disponivel = $entradas_total - $gastos_total;

    $gastos_mes = $model->result('SELECT * FROM gasto WHERE MONTH(data) = '.$mes);
        foreach ($gastos_mes as $key => $gasto) {
            $gastos_mes_total = $gastos_mes_total + $gasto->valor;
        }
?>

<div class="valores">
    <h1 class="titulo-disponivel">VALOR DISPONÍVEL</h1>
    <h1><?php echo $valor_disponivel; ?></h1>

    <h1 class="titulo-gastos">GASTOS TOTAIS</h1>
    <h1><?php echo $gastos_total; ?></h1>

    <h1 class="titulo-entradas">ENTRADAS TOTAIS</h1>
    <h1><?php echo $entradas_total; ?></h1>

    <?php if($gastos_mes_total >= 100){ ?>
        <h1 class="titulo-mes-mais">GASTOS NO MES</h1>
        <h1><?php echo $gastos_mes_total; ?></h1>
    <?php }else{ ?>
        <h1 class="titulo-mes-menos">GASTOS NO MES</h1>
        <h1><?php echo $gastos_mes_total; ?></h1>
    <?php } ?>

</div>


