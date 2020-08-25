<!DOCTYPE html>
<html>
<head>
      <title> Inserir Dados </title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
      <h1>Inserir Dados de Temperatura</h1>
      <div id = "container">
      <form method="POST" action="funcoes.php">
      <label>Codigo da Temperaturas:</label><input type="text" name="Cod_Temperaturas" id="Cod_Temperaturas"><br>
      <label>Temperatura Ambiente:</label><input type="text" name="Temp_Ambiente" id="Temp_Ambiente"><br>
      <label>Temperatura da Pista:</label><input type="text" name="Temp_Pista" id="Temp_Pista"><br>
      <input type="submit" value="Inserir" id="inserir" name="inserir">
      </form>
</div>
<p><a class = "botao botao-block" href="index.php">Voltar</a></p>
</body>
</html>