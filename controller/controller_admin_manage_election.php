<?php
/*
* Título: Controlador de Busca de Eleição
*
* Autor: Alisson e Carlos
* Data de Criação: 09/06/2015
*
* Descrição: Mostra as Eleições conforme padrão de busca.
*
*/
$root = 'c:/wamp/www/Urna-IAC/';

//Open Db
require_once($root.'model/open_db/open_db.php');

//select
require_once($root.'model/select/select.php');

//election status
require_once($root.'model/election_status/election_status.php');

//Recebe dados via post
$column = $_POST["search-combobox"];
$param = "%".$_POST["search-input"]."%";
$table = 'eleicoes';


$conn = openDB();

$result = select($table, $column, $param, $conn);

echo ("$('#table-body').html('');");

while($row = mysqli_fetch_assoc($result)){

		$status = electionStatus($row);

          
        $line = "<tr>".
                  "<td>".$row['idEleicao']."</td>".
                  "<td>".$row['tipo']."</td>".
                  '<td data="'.$status.'">'.$status."</td>".
                  "<td>".$row['data']."</td>".
                  "<td>".$row['horaInicio']."</td>".
                  "<td>".$row['horaFim']."</td>".
                "</tr>";

        //echo $line;
        echo ("$('#table-body').append('$line');");
       
    }

mysqli_close($conn);

?>