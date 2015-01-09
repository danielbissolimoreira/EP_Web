<?php
session_start();
$_SESSION['username'] = $_POST['user'];
$_SESSION['userpass'] = $_POST['pass'];
$_SESSION['authuser'] = 0;
$connect = mysql_connect("localhost", "admin", "Y6vKryh49tZVqBcw")
or die("Hey loser, check your server connection.");
//Check if pwd is correct
mysql_select_db("test");
$query = "SELECT EMAIL, SENHA " .
"FROM pessoa " .
"WHERE EMAIL = '{$_SESSION['username']}'";
$results = mysql_query($query)
or die(mysql_error());
$row = mysql_fetch_array($results);
//Check username and password information
if (($_SESSION['username'] == $row[0]) and ($_SESSION['userpass'] == $row[1]))
{
		$_SESSION['authuser'] = 1;
} 
else {
		echo "Desculpe, nome de usuário ou senha incorretos. Agendamento não concluido!";
		exit();
}
?>
<html>
  <head>
	<?php include "header.html"; ?>
    <link href="Style.css" rel="stylesheet" />
  </head>
  <body>
    <div id="main">
      <h1>Agendamento</h1>
	  <table>
	  <tr>	
			<td width="15%">Selecione um dia:</td>
			<td width="85%">
				<?php
				$num_of_days = cal_days_in_month(CAL_GREGORIAN, date("d"), date("Y")); // 31
				?>
				<select name="horarios">
				
				<option value="" selected><?php echo date("j")+1; ?></option><?php
					for ($day=date("j")+2; $day <= $num_of_days ;$day++) {
					?>
					<option value="<?php echo $day; ?>">
					<?php echo $day; ?>
					</option><?php
					}
					?>
				  </select>
			</td>
		</tr>
		<tr>
			<td width="15%">Selecione um horário: </td>
			<td width="85%">
				<select name="horarios">
				<option value="oito">08:00</option>
				<option value="nove">09:00</option>
				<option value="dez">10:00</option>
				<option value="onze">11:00</option>
				<option value="doze">12:00</option>
				<option value="treze">13:00</option>
				<option value="quinze">15:00</option>
				<option value="desesseis">16:00</option>
				<option value="desessete">17:00</option>
				</select>
			</td>
		</tr>
		<tr>
			<td width="15%">
				<input type="submit" name="Submit" value="Submit" />
			</td>
        </tr>
	  </table>
	  <?php echo "Agendamentos para o próprio dia somente por telefone: 9999-9999."; ?>
      <footer id="foot01"></footer><?php include "Footer.php"; ?>
    </div>
  </body>
</html>
