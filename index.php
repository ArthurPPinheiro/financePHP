<!DOCTYPE html>
<?php
    include 'includes/config.php';
    include_once 'classes/Model.php';
    include 'includes/verifica_usuario.php';
    $page = $_GET['page'] ? $_GET['page'] : 'dashboard';

    $model = new Model();

?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Painel de Controle</title>
    
    <base href="<?php echo $base; ?>"/>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/responsive.css">

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/jquery.form.min.js"></script>
    <script src="assets/js/main.js"></script>
</head>
<body>
    <div id="topo">
    <div class="logo">
            <img src="assets/img/logo.png" alt="Logo">
        </div>
        <i id="icone-menu" class="fas fa-bars"></i>
    </div>
    
    <div id="coluna">
        <div class="logo">
            <h2>FINANCE</h2>
        </div>
        <ul>
            <li <?php echo $page == 'dashboard' ? 'class="ativo"' : ''; ?>>
            <a href="dashboard"><i class="fas fa-home"></i> Início</a></li>
        </ul>
        <ul>
            <li <?php echo $page == 'gastos/lista' || $page == 'gastos/criar' || $page == 'gastos/editar'  ? 'class="ativo"' : ''; ?>>
            <a href="gastos"><i class="fas fa-users"></i> Gastos</a></li>
        </ul>
        <ul>
            <li <?php echo $page == 'entradas/lista' || $page == 'entradas/criar' || $page == 'entradas/editar'  ? 'class="ativo"' : ''; ?>>
            <a href="entradas"><i class="fas fa-users"></i> Entradas</a></li>
        </ul>
        <ul>

        <ul>
            <li <?php echo $page == 'sair' ? 'class="ativo"' : ''; ?>>
            <a href="sair"><i class="fas fa-times"></i> Sair</a></li>
        </ul>

    </div>
    
    <div id="conteudo">
        <?php
        include 'pages/'.$page.'.php';
        ?>
    </div>
</body>
</html>