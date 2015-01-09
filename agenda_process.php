<?php  
$connect = mysql_connect("localhost", "root", "")
or die("Hey loser, check your server connection.");
mysql_select_db("test");


if(isset($_POST['horario'])){
  $data = date("Y") .'-'. date("m").'-'. $_POST['data'];
  $datacompleta = date("Y") .'-'. date("m").'-'. $_POST['data'] . " " . $_POST['horario'];
  $horario = $_POST['horario'];
  $email = $_POST['id'];
  $query = "INSERT INTO agenda (`dia`, `data_completa`, `hora`, `email`) VALUES ('$data', 'datacompleta','$horario','$email')";
  $results = mysql_query($query);
  header("Location: home.php");
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
    <h1>Agendamento</h1>
    <form action="agenda_process.php" method="post"> 
    <?php  echo("<input type = hidden name = data value = $_POST[data]>"); ?> 
    <?php  echo("<input type = hidden name = id value = $_POST[id]>"); ?> 
      <table>
        <tr>  
          <td width="15%">Selecione um horario:</td>
          <td width="85%">
            <?php
              $query = "SELECT * from horarios where horarios.hora not in (select hora from agenda where dia =" ."'". date("Y") .'-'. date("m").'-'. $_POST['data'] ."')";
            $results = mysql_query($query)
            or die(mysql_error());
            $row = mysql_fetch_array($results);
            ?>
            <select name="horario">

              <?php
                while($result = mysql_fetch_array($results)){
                  echo("<option value = $result[0]> $result[0]</option>");
                }
              ?>
              </select>
            </td>
          </tr>
          <tr>
          </tr>
          <tr>
            <td width="15%">
              <input type="submit" name="Submit" value="Submit" />
            </td>
          </tr>
        </table>
      </form>
    </div>
  </body>
  </html>
