
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
* Descrição: 	Recebe um usuario e uma senha via POST. 
* 				Verifica se um login é válido e direciona para a a tela correspondente, se não, retorna erro 
*
*/

$root = 'c:/wamp/www/Urna-IAC/';

// //Sub Controllers
// require_once($root.'controller/controller_register_user/controller_register_user_validate.php');

// //Erro
// require_once($root.'model/error/error.php');

//Open Db
require_once($root.'model/open_db/open_db.php');

//Eval
require_once($root.'model/eval/eval_field.php');

// //Format
// require_once($root.'model/format/format_number.php');
// require_once($root.'model/format/format_text.php');

// //Verify
// require_once($root.'model/verify/verify_address.php');
// require_once($root.'model/verify/verify_user.php');
// require_once($root.'model/verify/verify_zip_code.php');

//Insert
require_once($root.'model/select/select_user.php');


echo ("alert('oi');");

//Recebe dados via post
$column = 'nome';//$_POST["search-combobox"];
$param = '%Car%';//$_POST["search-input"];


if(!evalField($param))
	{
		$param = '';
	}



$conn = openDB();

$result = selectUser($column, $param, $conn);

$i=0;


while($row = mysqli_fetch_assoc($result)){

	if($row["cpf"] != "00000000000"){
       	
       	$i++;
                                
        $line = "<tr><td>".$i."</td><td>".$row["nome"]."</td><td>".$row["tituloEleitor"]."</td><td>".$row["cpf"]."</td><td>".$row["zona"]."</td><td>".$row["secao"]."</td><td></td></tr>";
        print_r($row);
       
    }
}

mysqli_close($conn);

?>
