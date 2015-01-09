<?php
// define variables and initialize with empty values
$nomeErr = $emailErr = $telefoneErr = $senhaErr = "";
$nome = $email = $telefone = $senha = "";
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['nome'])) {
        $nomeErr = "faltando";
    }
    else {
        $nome = $_POST['nome'];
    }
 
    if (empty($_POST['email'])) {
        $emailErr = "faltando";
    }
    else {
        $email = $_POST['email'];
    }
 
    if (empty($_POST['telefone']) || !is_numeric($_POST['telefone'])){
        $telefoneErr = "telefone deve conter somente números.";
    }
    else {
        $telefone = $_POST['telefone'];
    }

    if (empty($_POST['senha']))  {
        $senhaErr = "faltando";
    }
    else {
        $senha = $_POST['senha'];
    }
        if($nomeErr!="" || $emailErr!="" || $telefoneErr!="" || $senhaErr!=""){
                                echo  $nomeErr;
                                echo  $emailErr;
                                echo  $telefoneErr;
                                echo  $senhaErr;
                echo "Um ou mais campos estão preenchidos incorretamente.";
                exit();
        }
		else{
		//connect to MySQL
		$connect = mysql_connect("localhost", "admin", "Y6vKryh49tZVqBcw")
		or die ("Hey loser, check your server connection.");
		//make sure we're using the right database
		mysql_select_db("test");
		//insert data into "movie" table
		$insert = "INSERT INTO pessoa (email, nome, telefone, " .
		"senha) " .
		"VALUES(
		'" . $_POST['email'] . "',
		'" . $_POST['nome'] . "',
		'" . $_POST['telefone'] . "',
		'" . $_POST['senha'] . "')";
		
		if (isset($insert) && !empty($insert)) {
		echo "<!--" . $insert . "-->";
		$result = mysql_query($insert)
		or die("Usuário já cadastrado!");
		}
	}
}
?>
<html>
  <head>
    <?php include "header.html"; ?>
    <link href="Style.css" rel="stylesheet" />
    <title></title>
  </head>
  <body>
    <nav id="nav01"></nav>
    <div id="main">
      <h1>Cadastro Realizado com sucesso!</h1>
    </div>
  </body>
</html>