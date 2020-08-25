<!DOCTYPE html>
<html>
  <head>
  <link rel="icon" href="../../images/cropped-cropped-Logo-escudo-32x32.png" sizes="32x32" />
    <link rel="icon" href="../../images/cropped-cropped-Logo-escudo-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="../../images/cropped-cropped-Logo-escudo-180x180.png" />
    <meta name="msapplication-TileImage" content="../../images/cropped-cropped-Logo-escudo-270x270.png" />
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../css/styles.css">
    <title>Lista de Fornecedores</title>

    <link href="../../css/styles.css" rel="stylesheet">
  </head>

 <body>
   <?php 
     require "../html/navbar_home.php";
   ?>
  <div class="container-fluid">
   <h4>Lista de Fornecedores</h4>
   </div>
   <div class = "container-fluid">
     <?php
     require "../html/filtros.php";
     ?>
   </div><br>
<div>
 <!-- Preenchendo a tabela com os dados do banco: -->
 <?php
 require "../funcoes/conectar.php";
 require "../funcoes/funcoes.php";
 $sql = "SELECT * FROM tb_Fornecedores WHERE Tipo_Fornecedor = \"Serviços\"";
 $resultado = mysqli_query($strcon2,$sql) or die("Erro ao retornar dados");
 
 echo myTable($strcon2, $sql, "Lista de Fornecedores");

 mysqli_close($strcon2);
 echo "</tbody>";
 echo "</table>";
?>
</div> 
<div class="container-fluid">
  <p><a class = "btn btn-sm btn-icarus" href="../html/home.php">Voltar</a></p>
</div>
</body>
</html>