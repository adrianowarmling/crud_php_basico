<?php 
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('produto-database.php');
?>

<?php
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    $categoria = $_POST['categoria'];
    $deu = alteraProduro($conexao,$id, $nome, $preco, $descricao, $categoria);

    if (!$deu) {
        echo mysqli_error($conexao);
    }
?>


<?php
    include_once('rodape.php');
?>