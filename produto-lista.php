<?php 
        include_once("cabecalho.php");
        include_once("conecta.php");
        include_once("produto-database.php");
?>

    <table class="table table-striped table-bordered">
        <tr>
            <td>Nome</td>
            <td>Preço</td>
            <td>Descrição</td>
            <td>Categoria</td>
            <td>Ação</td>
        </tr> 
        <?php
            $produtos = listaProdutos($conexao);
            foreach ($produtos as $produto):
        ?>

        <tr>
            <td><?=$produto["nome"];?></td>
            <td><?=$produto["preco"];?></td>
            <td><?=$produto["descricao"];?></td>
            <td><?=$produto["cat_nome"];?></td>
            <td>
                <a href="produto-update-form.php" class="btn btn-primary">U</a>
            </td>
        </tr> 

        <?php 
            endforeach;
        ?>
<?php 
    include_once("rodape.php");

?>