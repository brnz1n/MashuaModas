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
    <h3 class="card-header">Devedores</h3>
  </div>
  <br>
  <div class="card text-white bg-dark" align="center">
    <a class="btn btn-dark" href="adicionarDevedor.php">Adicionar <i class="fas fa-hand-holding-usd"></i></a>
  </div>
  <br>
  <div class="table-responsive">
    <table class="table table-hover table-bordered table-striped table-dark">
      <thead>
        <tr align="center">
          <th scope="col">Nome</th>
          <th scope="col">Quantidade</th>
          <th scope="col">V. Venda</th>
          <th scope="col">Data de Pagamento</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $sql = "SELECT * FROM devedores";
        $resultado = mysqli_query($connect, $sql);
        while ($dados = mysqli_fetch_array($resultado)):
          ?>
          <tr align="center">  
            <td> <?php echo $dados['nome']; ?></td>
            <td> <?php echo $dados['quantidade']; ?></td>
            <td> <?php echo $dados['valorVenda'].'.00'; ?></td>
            <td> <?php echo $dados['data']; ?></td>
            <td><a href="editarDevedores.php?id= <?php echo $dados['id']; ?>" class="btn btn-light"><i class="fas fa-pen"></i></a> 
              <button type="button" href="<?php echo $dados['id']; ?>" class="btn btn-danger" data-toggle="modal" data-target="#modal<?php echo $dados['id']; ?>">
                <i class="fas fa-trash"></i>
              </button></td>

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
                      <form action="php_action/deleteDevedor.php" method="POST">
                        <input type="hidden" name="id" value=" <?php echo $dados['id']; ?> ">
                        <button type="submit" name="btn-deletar" class="btn btn-danger">Sim, quero deletar!</button>
                        <button class="btn btn-success" data-dismiss="modal" aria-label="Close">Cancelar</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </tr> 
          <?php endwhile; ?> 
        </tbody>
      </table>
    </div>
  </div>
  <?php 
  include_once 'includes/footer.php';
  ?>