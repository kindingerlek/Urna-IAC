<?php
/*
* Título: Controlador de Busca de Eleitores
*
* Autor: Alisson e Carlos
* Data de Criação: 09/06/2015
*
* Descrição: Mostra os Eleitores conforme padrão de busca.
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
$table = 'usuarios';


$conn = openDB();

$result = select($table, $column, $param, $conn);

$i=0;

echo ("$('#table-body').html('');");

while($row = mysqli_fetch_assoc($result)){

  if($row["cpf"] != "00000000000"){
        
        $i++;
                                
        $line = "<tr>".
                  "<td>".$i."</td>".
                  "<td>".$row['nome']."</td>".
                  "<td>".$row['tituloEleitor']."</td>".
                  "<td>".$row['cpf']."</td>".
                  "<td>".$row['zona']."</td>".
                  "<td>".$row['secao']."</td>".
                "</tr>";

        //echo $line;
        echo ("$('#table-body').append('$line');");
       
    }
}

mysqli_close($conn);

?>

        