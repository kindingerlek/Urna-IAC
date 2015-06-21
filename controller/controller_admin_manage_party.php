<?php
/*
* Título: Controlador de Busca de Candidato
*
* Autor: Alisson e Carlos
* Data de Criação: 09/06/2015
*
* Descrição: Mostra os Partidos conforme padrão de busca.
*
*/
$root = 'c:/wamp/www/Urna-IAC/';

//Open Db
require_once($root.'model/open_db/open_db.php');

//select
require_once($root.'model/select/select.php');


//Recebe dados via post
$column = $_POST["search-combobox"];
$param = "%".$_POST["search-input"]."%";
$table = 'partidos';


$conn = openDB();

$result = select($table, $column, $param, $conn);

$i=0;

echo ("$('#table-body').html('');");

while($row = mysqli_fetch_assoc($result)){

  
        $i++;
                                
        $line = "<tr>" .
                    "<td>".$i."</td>". 
                    "<td>".$row['nome']."</td>".
                    "<td>".$row['sigla']."</td>".
                    "<td>".$row['idPartido']."</td>".
                "</tr>";

        //echo $line;
        echo ("$('#table-body').append('$line');");
       
    }

mysqli_close($conn);

?>

        