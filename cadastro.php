<html>
<head>
<?php include "header.html"; ?>
    <link href="Style.css" rel="stylesheet" />
</head>
<body>
<nav id="nav01"></nav>
<div id="main">
<h1>Cadastro</h1>
<p> Preencha os campos abaixo para realizar o cadastro. </p>
<form action="cadastro_process.php" method="post">
	<table align="right">
	<tr>
		<td width="15%">Email *</td>
		<td width="85%">
			<input type="text" name="email" maxlength="30"><br>
		</td>
	</tr>
	<tr>
		<td  width="15%">Nome *</td>
		<td  width="85%">
			<input type="text" name="nome" maxlength="20"><br>
		</td>
	</tr>
	<tr>
		<td  width="15%">Telefone *(somente números)</td>
		<td  width="85%">
			<input type="text" name="telefone" maxlength="11"><br>
		</td>
	</tr>
	<tr>
		<td  width="15%">Senha *(Entre 4 e 10 caracteres)</td>
		<td  width="85%">
			<input type="text" name="senha" maxlength="10"><br>
		</td>
	</tr>	
	<tr>
		<td  colspan="2" align="left">
			<input type="submit" name="SUBMIT" value="Cadastrar">
		</td>
	</tr>
	</table>
</form>
<th> Os campos marcados com * são obrigatórios.</th>
</div>
</body>
</html>