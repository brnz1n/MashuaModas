<?php 
//Conexão
include_once 'php_action/db_connect.php';
//header
include_once 'includes/header.php';
//menu
include_once'includes/menu.php';

?>
<div class="col-12 col-md-auto">
	<div align="center">
		<h3>Estoque</h3>
		<a class="btn btn-warning" href="adicionarEntregas.php">Adicionar Entrega</a>
		<br><br>
	</div>
	<div class="container table-responsive">
		
		<?php 
		$sql = "SELECT * FROM entregas";
		$resultado = mysqli_query($connect, $sql);
		while ($dados = mysqli_fetch_array($resultado)):
			?> 

			<div class="card" align="center">
				<h5 class="card-header"> Entrega Para fazer ! </h5>
				<div class="card-body">
					<h5 class="card-title"><?php echo $dados['titulo']; ?></h5>
					<p class="card-text"><?php echo $dados['conteudo']; ?></p>

					<a href="editarEntregas.php?id= <?php echo $dados['id']; ?>" class="btn btn-primary">Editar</a>
					<button type="button" href="<?php echo $dados['id']; ?>" class="btn btn-danger" data-toggle="modal" data-target="#modal<?php echo $dados['id']; ?>">
						Apagar
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

<?php 
include_once 'includes/footer.php';
?>