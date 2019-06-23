<?php
//Header
include_once 'includes/header.php';
//Menu
include_once'includes/menu.php';

?>
<div class="container rounded-lg" style="background-color: #FBFBFB">
  <div>
    <div class="titulo" align="center">
      <h3> Nova Entrega</h3>
    </div>
    <form action="php_action/createEntregas.php" method="POST">
      <div>
        <label>Para Quem ?</label>
        <input type="text" class="form-control" name="titulo" id="titulo" >
        <br>
      </div>
      <div>
        <label>Messagem</label>
        <textarea type="text" class="form-control" name="conteudo" id="conteudo"></textarea> 
        <br>
      </div>
      <div class="botao" align="center">
        <button type="submit" name="btn-cadastrar" class="btn btn-primary">Cadastrar</button>
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
