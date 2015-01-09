<?php
session_unset();
?>
<html>
  <head>
	<?php include "header.html"; ?>
    <link href="Style.css" rel="stylesheet" />
  </head>
  <body>
    <nav id="nav01"></nav>
    <div id="main">
      <h1>Login</h1>
      <h2>Faça sua autenticação para realizar um agendamento</h2>
      
	  <form method="post" action="agendamento.php">
		<table align="right">
			<tr>
				<td width="15%">Digite o nome de usuário:</td>
				<td width="85%">
					<input type="text" name="user"><br>
				</td>
			</tr>
			<tr>
			<td width="15%">Digite a senha:</td>
				<td width="85%">
				<input type="password" name="pass" maxlength="10"><br>
				</td>
			</td>
		</tr>
		<tr>
			<td width="15%">
				<input type="submit" name="Submit" value="Submit" />
			</td>
        </tr>
		</table>
	  </form>
	  <?php include "Footer.php"; ?>
    </div>
  </body>
</html>
