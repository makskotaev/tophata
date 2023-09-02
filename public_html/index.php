<html lang="ru">
<head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="style/css/index.css">
      <title>ТопХата</title>
      <script>
            function HideForm(){
                  var element = document.getElementById("form");
                  element.style.display = "none";
            }   
            function ShowForm(){
                  var element = document.getElementById("form");
                  element.style.display = "flex";
            } 
            function Stop(){
                  event.stopPropagation(); 
            }
      </script>
</head>
<body>
<form id="form" onclick="HideForm()" action="/command.php" method="post">
      <div class="donat" onclick="Stop()">
            <h1>Покупка доната Карлик</h1>
            <h2>Возможности:</h2>
            <div class="dots">
                  <ul>
                        <li>Кит вип</li>
                        <li>Бонус к зарплате</li>
                        <li>Выбор цвета ника</li>
                        <li>Скидка на снюс</li>
                        <li>Телепорт на спавн</li>
                        <li>Выбор цвета ника</li>
                        <li>Ну и просто ты гей</li>
                  </ul>
                  <div class="input-box">
                        <input type="text" name="nick" class="nick" required>
                        <label>Nickname</label>
                  </div>
                  <div style="margin-bottom: 20px;">
                        <input type="checkbox" id="accept" name="accept" required>
                        <label>Я подтверждаю точность предоставленных мною данных и уверен в их правильности.</label>
                  </div>
                  <button>Оплатить 100₽</button>
            </div>
      </div> 
</form>      
      <?php include 'menu.php'; ?>
<h1 class="title">Донаты</h1>
<div class="donates">      
      <div class="donate">
            <h2>Карлик</h2>
            <h3 style="text-align: center;">Возможности:</h3>
            <ul>
                  <li>Кит вип</li>
                  <li>Бонус к зарплате</li>
                  <li>Выбор цвета ника</li>
                  <li>Скидка на снюс</li>
                  <li>Телепорт на спавн</li>
                  <li>Ну и просто ты гей</li>
            </ul>
            <div>
                  <h1>100₽</h1>
                  <h3>На всегда</h3>
            </div>
            <div class="btn">
                  <button onclick="ShowForm()">Купить</button>
            </div>
      </div>
</div>      
</body>
</html>