<?php
//Header
include_once 'includes/header.php';
//Menu
include_once'includes/menu.php';

?>

<div class="container rounded-lg" style="background-color: #FBFBFB">
  <div>
    <div class="titulo" align="center">
      <h3> Novo Produto </h3>
    </div>
    <form action="php_action/createVendas.php" method="POST">
      <div>
        <label>Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do Produto">
        <br>
      </div>
      <div>
        <label>Quantide</label>
        <input type="text" class="form-control" name="quantidade" id="quantidade" placeholder="Quantidade do Produto">
        <br>
      </div>
      <div>
        <label>Valor da Venda</label>
        <input type="text" class="form-control" name="valorVenda" id="valorVenda" placeholder="Valor da Venda">
        <br>
      </div>
      <div class="botao" align="center">
        <button type="submit" name="btn-cadastrar" class="btn btn-primary">Cadastrar</button>
        <a href="vendas.php" class="btn btn-dark">Volta</a>
      </div>

    </form>
  </div>
</div>

<!--footer-->
<?php
include_once 'includes/footer.php';
?>
<!--footer-->
