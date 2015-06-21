<?php
/*
* Título: Controlador de Busca de Candidato
*
* Autor: Alisson e Carlos
* Data de Criação: 09/06/2015
*
* Descrição: Mostra os candidatos conforme padrão de busca.
*
*/
$root = 'c:/wamp/www/Urna-IAC/';

//Open Db
require_once($root.'model/open_db/open_db.php');

//select
require_once($root.'model/select/select_candidate.php');

//election status
require_once($root.'model/election_status/election_status.php');

//Recebe dados via post
session_start();

$column = $_POST["search-combobox"];
$idElection = $_SESSION['votebem']['idElection'];
$param = "%".$_POST["search-input"]."%";
$table = 'candidatos';

$conn = openDB();

$result = selectCandidate($table, $column, $param, $idElection, $conn);


echo ("var candidatePath=[]; $('#table-body').html('');");

while($row = mysqli_fetch_assoc($result)){
       $cod = number_format($row['idCandidato']);
        $candidatePath= $row['foto'];
        
        $line = "<tr>".
                  "<td>".$row['idEleicao']."</td>".
                  "<td>".$row['nomeFantasia']."</td>".
                  '<td>'.$row['idCandidato']."</td>".
                  "<td>".$row['idPartido']."</td>".
                  "<td>".$row['tipo']."</td>".
                "</tr>";

        //echo $line;
        echo ("$('#table-body').append('$line');");
        echo("candidatePath[$cod] = '$candidatePath';");
        
    }
mysqli_close($conn);

?>