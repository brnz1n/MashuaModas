<?php 
//Conexão
include_once 'php_action/db_connect.php';
//header
include_once 'includes/header.php';
//menu
include_once'includes/menu.php';
?>
<div class="col-12 col-md-auto">
  <div class="card text-white bg-dark" align="center">
    <h3 class="card-header">Entregas</h3>
  </div>
  <br>
  <div class="card text-white bg-dark" align="center">
    <a class="btn btn-dark" href="adicionarEntregas.php">Adicionar <i class="fas fa-shipping-fast"></i></a>
  </div>
  <br>
  <div class="container table-responsive">
    <?php 
    $sql = "SELECT * FROM entregas";
    $resultado = mysqli_query($connect, $sql);
    while ($dados = mysqli_fetch_array($resultado)):
      ?> 
      <div class="card text-white bg-dark" align="center">
        <h5 class="card-header"><?php echo $dados['titulo']; ?></h5>
        <div class="card-body">
          <h6 class="card-text"><?php echo $dados['conteudo']; ?></h6>
          <a href="editarEntregas.php?id= <?php echo $dados['id']; ?>" class="btn btn-light"><i class="fas fa-pen"></i></a>
          <button type="button" href="<?php echo $dados['id']; ?>" class="btn btn-danger" data-toggle="modal" data-target="#modal<?php echo $dados['id']; ?>">
            <i class="fas fa-trash"></i>
          </button>
        </div>
      </div>
      <br>
      <!-- Modal -->
      <div class="modal fade" id="modal<?php echo $dados['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Aviso!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Tem certeza que deseja apagar ?
            </div>
            <div class="modal-footer">
              <form action="php_action/deleteEntregas.php" method="POST">
                <input type="hidden" name="id" value=" <?php echo $dados['id']; ?> ">
                <button type="submit" name="btn-deletar" class="btn btn-danger">Sim, quero deletar!</button>
                <button class="btn btn-success" data-dismiss="modal" aria-label="Close">Cancelar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->
    <?php endwhile; ?> 
  </div>
</div>
<!--Footer-->
<?php 
include_once 'includes/footer.php';
?>
<!--Footer-->
