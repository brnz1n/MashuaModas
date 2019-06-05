<?php
//Header
include_once 'includes/header.php';
//conexão
include_once 'php_action/db_connect.php';
//Menu
include_once'includes/menu.php';
//Select
if (isset($_GET['id']));
$id = mysqli_escape_string($connect, $_GET['id']);

$sql = "SELECT * FROM vendas WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
?>

<div class="container rounded-lg" style="background-color: #F5F5F5">
  <div>
    <div class="titulo" align="center">
      <br>
      <h3> Editar Vendas</h3>
    </div>
    <form action="php_action/updateVendas.php" method="POST">
      <div>
        <input type="hidden" name="id" value=" <?php echo $dados['id']; ?>">
      </div>
      <div>
        <label>Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do Produto"
        value=" <?php echo $dados['nome']; ?>">
        <br>
      </div>
      <div>
        <label>Quantidade</label>
        <input type="text" class="form-control" name="quantidade"  placeholder="Quantidade do Produto"
        value=" <?php echo $dados['quantidade']; ?>">
        <br>
      </div>
      <div>
        <label>Valor da Venda</label>
        <input type="text" class="form-control" name="valorVenda" placeholder="Valor da Venda"
        value=" <?php echo $dados['valorVenda']; ?>">
        <br>
      </div>
      <div class="botao" align="center">
        <button type="submit" name="btn-editarVendas" class="btn btn-primary">Atualizar</button>
        <a href="vendas.php" class="btn btn-dark">Volta</a>
      </div>
    </form>
    <br>
  </div>
</div>

<!--footer-->
<?php
include_once 'includes/footer.php';
?>
<!--footer-->
