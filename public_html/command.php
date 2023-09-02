<?php
require_once('Rcon.php');

$host = 'localhost'; // Server host name or IP
$port = 25575;                      // Port rcon is listening on
$password = '123456'; // rcon.password setting set in server.properties
$timeout = 3;                       // How long to timeout.
$nick = $_POST['nick'];

use Thedudeguy\Rcon;

$rcon = new Rcon($host, $port, $password, $timeout);

?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style/css/index.css">
  <title>Оплата</title>
</head>
<body>

<?php include 'menu.php';
if ($rcon->connect()){
  if($rcon->sendCommand("op $nick")){
  echo'<div class="display">';
  echo'<div>';
  echo'<div style="width: 128px; margin-inline: auto;">';
  echo'<img src="style\ico\check-mark.png">';
  echo'</div>';
  echo'<p style="color:#2DD4BF; text-align: center;">Донат был успешно выдан!</p>';
  echo '<button onclick="location.href=\'/minecraft\'">На главную</button>';
  echo'</div>';
  echo'</div>';
}else{
  echo'<div class="display">';
  echo'<div>';
  echo'<img src="style\ico\cross.png">';
  echo'<p style="color:#2DD4BF; text-align: center;">Ошибка платежа. (2)</p>';
  echo '<button onclick="location.href=\'/minecraft\'">На главную</button>';
  echo'</div>';
  echo'</div>';
  }
}
?>
</body>
</html>