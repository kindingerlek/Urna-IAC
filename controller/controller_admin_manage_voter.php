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
require_once($root.'model/select/select_user.php');


//Recebe dados via post
$column = $_POST["search-combobox"];
$param = "%".$_POST["search-input"]."%";


$conn = openDB();

$result = selectUser($column, $param, $conn);

$i=0;

echo ("$('#table-body').html('');");

while($row = mysqli_fetch_assoc($result)){

  if($row["cpf"] != "00000000000"){
        
        $i++;
                                
        $line = "<tr><td>".$i."</td><td>".$row['nome']."</td><td>".$row['tituloEleitor']."</td><td>".$row['cpf']."</td><td>".$row['zona']."</td><td>".$row['secao']."</td><td></td></tr>";

        //echo $line;
        echo ("$('#table-body').append('$line');");
       
    }
}

mysqli_close($conn);

?>
