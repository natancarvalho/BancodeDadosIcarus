<?php
require "conectar.php";

class Funcoes {

      public function gerarCodigoSetup (string $Modelo_Carro): string{
            return $codigoSetup = "STSUS".$Modelo_Carro."02";
      }
}

/*Função para gerar o html para exibir as tabelas*
 *Recebe como argumento a string de conexão, a query SQL e o nome da tabela*/
function myTable($strcon2,$sql,$nome_tabela){
    $html = "";
    $rsResult = mysqli_query($strcon2, $sql) or die(mysqli_error($strcon2));
    if(mysqli_num_rows($rsResult)>0)
    {
        //We start with header. >>>Here we retrieve the field names<<<
        $html .= "<div class=\"container-fluid\">
        <div class=\"table-responsive\" style=\"overflow: auto; height: 435px;\">
        <table class=\"table table-bordered table-sm overflow-auto\">
        <caption>".$nome_tabela."</caption>
        <thead class=\"thead-dark\">
        <tr>";
        $i = 0;
        while ($i < mysqli_num_fields($rsResult)){
           $field = mysqli_fetch_field_direct($rsResult, $i);
           $fieldName=$field->name;
           $html .= "<th scope=\"col\">$fieldName</th>";
           $i = $i +1;
        }
        $html .= " </tr>
               </thead>"; 
        //>>>Field names retrieved<<<

        //We dump info
        $bolWhite=true;
        while ($row = mysqli_fetch_assoc($rsResult)) {
            $html .= $bolWhite ? "<tr>" : "<tr>";
            $bolWhite=!$bolWhite;
            foreach($row as $data) {
                $html .= "<td>$data</td>";
            }
            $html .= "</tr>";
        }
        $html .= "</tr>";
        $html .= "</table>";
        $html .= "</div>";
        $html .= "</div>" ;

        return $html;
    }
}

/*Função para pegar o nome das colunas da tabela e montar em html*
 *Recebe como argumento a string de conexão com o banco de dados*/
function get_col_names($strcon2, $nome_tabela) 
    {
        $nomes_colunas = "";
        $sql = "SELECT * FROM ".$nome_tabela;
        $rsResult = mysqli_query($strcon2, $sql) or die(mysqli_error($strcon2));
        if(mysqli_num_rows($rsResult)>0)
        {
            //We start with header. >>>Here we retrieve the field names<<<
            $i = 1;
            while ($i < mysqli_num_fields($rsResult)){
               $field = mysqli_fetch_field_direct($rsResult, $i);
               $fieldName=$field->name;
               //echo ",tb_Fornecedor_Material.$fieldName\n";
               $nomes_colunas2 = ",".$nome_tabela.".".$fieldName."\n";
               $nomes_colunas .= $nomes_colunas2;
               //echo "OI -> $nomes_colunas2";
               $i = $i + 1;
            } return $nomes_colunas;
        } 
    }
 
/*Função para gerar a query que vai imprimir a tabela em html*
 *Recebe como argumento a string a string contendo o nome das colunas gerada pela função acima*/    
function makeQuery ($nome_tabelaA, $nome_tabelaB, $ChaveA, $ChaveB, $nomes_colunas){
    //$nomes_colunas = get_col_names($strcon2);

    $select = "SELECT ".$nome_tabelaA.".*";
    $from = " FROM ".$nome_tabelaA.
    " INNER JOIN ".$nome_tabelaB. " ON ".$nome_tabelaA.".".$ChaveA."=".$nome_tabelaB.".".$ChaveB;

    $sql = $select.$nomes_colunas.$from;
    //echo $sql;
    return $sql;
}

function queryFiltro ($tabela, $coluna, $valor){
    $select = "SELECT * FROM ".$tabela;
    $where = " WHERE ".$coluna." LIKE "."\"%$valor%\"" ;
    

    $sql = $select.$where;
    //echo $sql;
    return $sql;
}
?>