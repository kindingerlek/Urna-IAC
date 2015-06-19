<?php
/*
* Título: Controle de Login
*
* Autor: Alisson e Carlos
* Data de Criação: 29/05/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição:  Recebe um usuario e uma senha via POST. 
*         Verifica se um login é válido e direciona para a a tela correspondente, se não, retorna erro 
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


echo ("$('#table-body').html('');");

while($row = mysqli_fetch_assoc($result)){
          
        $line = "<tr>".
                  "<td>".$row['idEleicao']."</td>".
                  "<td>".$row['nomeFantasia']."</td>".
                  '<td>'.$row['idCandidato']."</td>".
                  "<td>".$row['idPartido']."</td>".
                  "<td>".$row['tipo']."</td>".
                "</tr>";

        //echo $line;
        echo ("$('#table-body').append('$line');");
       
    }

mysqli_close($conn);

?>