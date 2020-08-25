<!--          <div class="dropdown">
            <button class="btn btn-sm btn-icarus dropdown-toggle dropdown-toggle-split" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Tipos de Fornecedores
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a value="materiais" class="dropdown-item" href="../consultas/consultar_fornecedores_materiais.php">Materiais</a>
                <a value="servicos" class="dropdown-item" href="../consultas/consultar_fornecedores_serviços.php">Serviços</a>
                <a value="todos" class="dropdown-item" href="../consultas/consultar_fornecedores.php">Todos</a>

            </div>
        </div>

      
        <div class="dropdown">
        <form id="responsavel" name="Responsavel" action="consultar_fornecedores.php" method="POST">
            <button class="btn btn-sm btn-icarus dropdown-toggle dropdown-toggle-split" type="submit" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Responsável
                </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" name="responsavel">
                <button value="Fábio" class="dropdown-item" type="submit">Fábio</button> 
                <a value="Mateus" class="dropdown-item" href="../consultas/consultar_fornecedores.php">Mateus</a>
                <a value="Rafael" class="dropdown-item" href="../consultas/consultar_fornecedores.php">Rafael</a>
            </div>  
         </form>
        </div>
    -->
<div class="row">
    <div class="col-md-auto">
        <form name="Tipos de Fornecedores" action="consultar_fornecedores.php" method="POST">
            <div>
                <select class="btn btn-sm btn-icarus dropdown-toggle dropdown-toggle-split" name="tipo_fornecedor">
                    <option value="Todos"selected>Tipos de Fornecedores</option>
                    <option value="Material">Materiais</option>
                    <option value="Serviços">Serviços</option>
                    <option value="Todos">Todos</option>
                </select>
            </div>
    </div>

    <div class="col-md-auto">
        <form name="Resposavel" action="consultar_fornecedores.php" method="POST">
            <div>
                <select class="btn btn-sm btn-icarus dropdown-toggle dropdown-toggle-split" name="responsavel">
                    <option selected>Responsável</option>
                    <option value="Fábio">Fábio</option>
                    <option value="Mateus">Mateus</option>
                    <option value="Rafael">Rafael</option>
                </select>
            </div>
    </div>

    <div class="col-md-auto">  
        <form name="Situação Relacionamento" action="consultar_fornecedores.php" method="POST">
            <div>
                <select class="btn btn-sm btn-icarus dropdown-toggle dropdown-toggle-split" name="situacao">
                    <option selected>Situação do Relacionamento</option>
                    <option value="Contactado">Contactado</option>
                    <option value="Não Contactado">Não Contactado</option>
                    <option value="Contactado: há">Possibilidade de Parceria</option>
                    <option value="Não há">Sem Possibilidade de Parceria</option>
                </select>
            </div>
    </div><br>
            <button class="btn btn-sm btn-icarus">Buscar</button>
        </form>
</div>
    
<!--
        <div class="dropdown">
            <button class="btn btn-sm btn-icarus dropdown-toggle dropdown-toggle-split" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Situação do Relacionamento
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a value="materiais" class="dropdown-item" href="../consultas/consultar_fornecedores_materiais.php">Contactado</a>
                <a value="servicos" class="dropdown-item" href="../consultas/consultar_fornecedores_serviços.php">Não Contactado</a>
                <a value="todos" class="dropdown-item" href="../consultas/consultar_fornecedores.php">Possibilidade de Parceria</a>
                <a value="todos" class="dropdown-item" href="../consultas/consultar_fornecedores.php">Sem Possibilidade de Parceria</a>
            </div>
        </div>
    -->
    


