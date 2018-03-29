<?php 
    include_once('cabecalho.php');
    include_once('conecta.php');
    include_once('produto-database.php');

    $categorias = buscaCategorias($conexao);
?>


<form action = "produto-update.php" method="POST">
 <div class="form-group">
 <input type="hidden" name="id" value="<?= $_GET['id']?>" class="form-control" id="id"  >
   <label for="nome">Nome</label>
   <input type="text" name="nome" class="form-control" id="nome"  placeholder="Nome">
 </div>
 <div class="form-group">
   <label for="preco">Preço</label>
   <input type="number" name="preco" step="0.01" class="form-control" id="inputpreco" placeholder="Preco">
 </div>
 <div class="form-group">
   <label for="descricao">Descrição</label>
   <input type="text" name="descricao" class="form-control" id="descicao" placeholder="Descrição">
 </div> 
 <div class="form-group">
   <label for="categoria">Categoria</label>
   <select name="categoria" id="categoria" class="form-control">
    
    <?php foreach ($categorias as $categoria):?>
      <option value="<?php $categoria['id']?>"><?=$categoria['nome']?></option>
    <?php endforeach;?>

 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
    include_once('rodape.php');
?>