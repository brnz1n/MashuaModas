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

$sql = "SELECT * FROM entregas WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
?>

<div class="container rounded-lg" style="background-color: #FBFBFB">
  <div>
    <div class="titulo" align="center">
      <h3> Editar Entregas</h3>
    </div>
    <form action="php_action/updateEntregas.php" method="POST">
      <div>
        <input type="hidden" name="id" value=" <?php echo $dados['id']; ?>">
      </div>
      <div>
        <label>Para Quem ?</label>
        <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Para Quem ?"
        value=" <?php echo $dados['titulo']; ?>">
        <br>
      </div>
      <div>
        <label>Messagem</label>
        <textarea type="text" class="form-control" name="conteudo"  placeholder="Messagem"
        ><?php echo $dados['conteudo']; ?></textarea>
        <br>
      </div>
      <div class="botao" align="center">
        <button type="submit" name="btn-editarEntregas" class="btn btn-primary">Atualizar</button>
        <a href="entregas.php" class="btn btn-dark">Volta</a>
      </div>
    </form>
  </div>
</div>

<!--footer-->
<?php
include_once 'includes/footer.php';
?>
<!--footer-->
