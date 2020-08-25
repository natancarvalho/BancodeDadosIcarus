<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../images/cropped-cropped-Logo-escudo-32x32.png" sizes="32x32" />
    <link rel="icon" href="../../images/cropped-cropped-Logo-escudo-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="../../images/cropped-cropped-Logo-escudo-180x180.png" />
    <meta name="msapplication-TileImage" content="../../images/cropped-cropped-Logo-escudo-270x270.png" />
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../css/styles.css">
    <title>Características do Carro</title>
  </head>

<body>
<?php 
     require "../html/navbar_home.php";
  ?>
  <div class="container-fluid">
   <h4>Características do Carro</h4>
   </div>

<div> 
 <!-- Preenchendo a tabela com os dados do banco: -->
 <?php
 require "../funcoes/conectar.php";
 require "../funcoes/funcoes.php";

 $nomes_colunas = get_col_names($strcon,"tb_geo_susp");
 $nomes_colunas2 = get_col_names($strcon,"tb_rigidez");
 $nome_tabelaA = "tb_caracteristica_carro";
 $nome_tabelaB = "tb_geo_susp";
 $nome_tabelaC = "tb_rigidez";
 $ChaveA = "Cod_Geo_Susp";
 $ChaveB = "Cod_Rigidez";


 $select = "SELECT ".$nome_tabelaA.".*";
 $from = " FROM (".$nome_tabelaA;
 $join1 = " INNER JOIN ".$nome_tabelaB. " ON ".$nome_tabelaA.".".$ChaveA."=".$nome_tabelaB.".".$ChaveA.")";
 $join2 = " INNER JOIN ".$nome_tabelaC. " ON ".$nome_tabelaA.".".$ChaveB."=".$nome_tabelaC.".".$ChaveB;

 $sql = $select.$nomes_colunas.$from.$join1.$join2;

 /*$sql = "SELECT 
 tb_caracteristica_carro.*, 
 tb_geo_susp.*, 
 tb_rigidez.* 
FROM (tb_caracteristica_carro 
INNER JOIN tb_geo_susp ON tb_caracteristica_carro.Cod_Geo_Susp=tb_geo_susp.Cod_Geo_Susp)
INNER JOIN tb_rigidez ON tb_caracteristica_carro.Cod_Rigidez=tb_rigidez.Cod_Rigidez;";*/

 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");
 
 echo myTable($strcon, $sql, "Características do Carro");
 
?>
</div>
<div class="container-fluid">
  <p><a class = "btn btn-sm btn-icarus" href="../html/home.php">Voltar</a></p>
</div>
</body>
</html>