<?php 
//conexão
include_once 'php_action/db_connect.php';
//header
include_once 'includes/header.php';
//menu
include_once'includes/menu.php';
?>
<div class="card text-white bg-dark" align="center" >
  <h5 class="card-header">Financeiro <i class="fas fa-balance-scale"></i></h5>
</div>
<div class="card" align="center" style="background-color: #ca1466">
  <h5 class="card-header" style="color: white">Entrada Estoque <i class="fas fa-chart-line"></i></h5>
</div>
<br>
<!--Tabela de valores do estoque, entreda e saida-->
<div class="col-12 col-md-auto" align="center">
  <div class="row">
    <!--Columa dos Produtos da Tabela-->
    <div class="col-sm">
      <div class="card text-white bg-dark">
        <h5 class="card-header">Entrada <i class="fas fa-cash-register"></i></h5>
        <table class="table table-borderless table-dark">
          <thead class="thead">
            <?php 
            $sql = "SELECT * FROM produtos";
            $resultado = mysqli_query($connect, $sql);
            while ($dados = mysqli_fetch_array($resultado)):
              ?>
              <tr align="center">
                <th><?php echo $dados['nome']; ?></th>
                <th>Qtd: <?php echo $dados['quantidade']; ?></th>
                <th>V. Entrada: <?php echo $dados['valorCompra'].'.00'; ?></th>
              </tr>
            </thead>
          <?php endwhile; ?> 
        </table>
      </div>
    </div>
    <!--Columa da Soma Total dos Valores da Tabela-->
    <div class="col-sm">
      <div class="card text-white bg-dark">
        <h5 class="card-header">Total <i class="fas fa-coins"></i></h5>
        <table class="table table-borderless table-dark">
          <thead class="thead">
            <?php
            $sql = "SELECT valorCompra, quantidade, valorCompra * quantidade as 'totalPreco' FROM produtos";
            $resultadoTotal = mysqli_query($connect, $sql);
            $linhas = mysqli_num_rows($resultadoTotal);
            while($linhas = mysqli_fetch_array($resultadoTotal)):
              ?>
              <tr align="center">
                <th>Total Gasto: <?php echo $linhas['totalPreco'].'.00'; ?></th>
              </tr>
            </thead>
          <?php endwhile; ?> 
        </table>
      </div>
    </div>
  </div>
</div>
<br>
<div class="card" align="center" style="background-color: #ca1466">
  <h5 class="card-header" style="color: white">Saida Estoque <i class="fas fa-chart-line"></i></h5>
</div>
<br>
<!--Tabela de valores do estoque, entreda e saida-->
<div class="col-12 col-md-auto" align="center">
  <div class="row">
    <!--Columa dos Produtos da Tabela-->
    <div class="col-sm">
      <div class="card text-white bg-dark">
        <h5 class="card-header">Saida <i class="fas fa-cash-register"></i></h5>
        <table class="table table-borderless table-dark">
          <thead class="thead">
            <?php 
            $sql = "SELECT * FROM produtos";
            $resultado = mysqli_query($connect, $sql);
            while ($dados = mysqli_fetch_array($resultado)):
              ?>
              <tr align="center">
                <th><?php echo $dados['nome']; ?></th>
                <th>Qtd: <?php echo $dados['quantidade']; ?></th>
                <th>V. Saida: <?php echo $dados['valorVenda'].'.00'; ?></th>
              </tr>
            </thead>
          <?php endwhile; ?> 
        </table>
      </div>
    </div>
    <!--Columa da Soma Total dos Valores da Tabela-->
    <div class="col-sm">
      <div class="card text-white bg-dark">
        <h5 class="card-header">Total <i class="fas fa-coins"></i></h5>
        <table class="table table-borderless table-dark">
          <thead class="thead">
            <?php
            $sql = "SELECT valorVenda, quantidade, valorVenda * quantidade as 'totalPreco' FROM produtos";
            $resultadoTotal = mysqli_query($connect, $sql);
            $linhas = mysqli_num_rows($resultadoTotal);
            while($linhas = mysqli_fetch_array($resultadoTotal)):
              ?>
              <tr align="center">
                <th>Lucro Total: <?php echo $linhas['totalPreco'].'.00'; ?></th>
              </tr>
            </thead>
          <?php endwhile; ?> 
        </table>
      </div>
    </div>
  </div>
</div>

<!--Footer-->
<?php 
include_once 'includes/footer.php';
?>
<!--Footer-->