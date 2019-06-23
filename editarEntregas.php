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
<div class="container rounded-lg" style="background-color: #F5F5F5">
  <div>
    <div class="titulo" align="center">
      <br>
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
        <textarea type="text" class="form-control" name="conteudo" rows="6"  placeholder="Messagem"
        ><?php echo $dados['conteudo']; ?></textarea>
        <br>
      </div>
      <div class="botao" align="center">
        <button type="submit" name="btn-editarEntregas" class="btn btn-primary">Atualizar</button>
        <a href="entregas.php" class="btn btn-dark">Volta</a>
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
