<!--  Código html para exibir a barra de navegação nas páginas -->
  
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #002b47;">
  <a class="navbar-brand" href="home.php">
    <img src="../../images/Lgicarus.png" width="75" height="35.8" class="d-inline-block align-top" alt="">
    Banco de Dados Icarus
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="../html/home.php">Home <span class="sr-only">(Página atual)</span></a>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Inserir Dados
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Setup de Suspensão</a>
          <a class="dropdown-item" href="#">Temperaturas</a>
          <a class="dropdown-item" href="#">Características do Carro</a>
          <a class="dropdown-item" href="#">Fornecedores</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Consultar Dados
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="../consultas/consultar_setup_suspensao.php">Setup de Suspensão</a>
          <a class="dropdown-item" href="../consultas/consultar_temperaturas.php">Temperaturas</a>
          <a class="dropdown-item" href="../consultas/consultar_caracteristica_carro.php">Características do Carro</a>
          <a class="dropdown-item" href="../consultas/consultar_fornecedores_home.php">Fornecedores</a>
        </div>
      </li>
      <a class="nav-item nav-link disabled" href="#">Desativado</a>
    </div>
  </div>
</nav>

















