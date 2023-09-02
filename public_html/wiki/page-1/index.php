<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/style/css/index.css">
    <link rel="stylesheet" href="/style/css/wiki.css">
    <title>ТопХата Wiki</title>
    <script>
    function copyCommand(command){
        const textarea = document.createElement('textarea');
        textarea.value = command;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand('copy');
        document.body.removeChild(textarea);

        var element = document.getElementById("msg");
            element.style.display = "block";
            setTimeout(() => {
                element.style.display = "none";
            }, 5000);
    }
</script>
</head>
<body>
<?php include 'menu.php'; ?>
<nav class="sun">
    <div>
        <a style="color: rgba(45, 212, 191, 1);">Игрокам</a>
        <a href="/wiki/page-2/">Мэрам</a>
    </div>
</nav>
<div class="commands">
    <div>
        <label>Основные команды</label>
    </div>
    <p><a onclick="copyCommand('/trp')">/rtp</a> - Телепортация в рандомное место</p>
    <p><a onclick="copyCommand('/tpa')">/tpa [Ник]</a> - Телепортация к игроку</p>
    <p><a onclick="copyCommand('/tpaccept')">/tpaccept</a> - Принять телепортацию от игрока</p>
    <p><a onclick="copyCommand('/tpdeny')">/tpdeny</a> - Отклонить телепортацию от игрока</p>
    <p><a onclick="copyCommand('/p friend add')">/p friend add [Ник]</a> - Добавление игрока в друзья</p>
    <p><a onclick="copyCommand('/p friend remove')">/p friend remove [Ник]</a> - Удаление игрока из друзей</p>
    <p><a onclick="copyCommand('/p friend list')">/p friend list [Ник]</a> - Список друзей</p>
    <p><a onclick="copyCommand('/money')">/balance или /money</a> - Кол-во средств на вашем счёте</p>
    <p><a onclick="copyCommand('/pay')">/pay [Ник]</a> - Кол-во средств на вашем счёте</p>
    <p><a onclick="copyCommand('/jobs browse')">/jobs browse</a> - Выбор работы</p>
    <p><a onclick="copyCommand('/sethome')">/sethome</a> - Установить точку дома</p>
    <p><a onclick="copyCommand('/home')">/home</a> - Телепортация на точку дома</p>
    <p><a onclick="copyCommand('/compass')">/compass</a> - Показывает сторону света на которую смотрит игрок</p>
    <p><a onclick="copyCommand('/player')">/player [Ник]</a> - Показывает информацию об игроке</p>
    <p><a onclick="copyCommand('/sb')">/sb</a> - Выкл./Вкл меню справа</p>
    <p><a onclick="copyCommand('/afk')">/afk</a> - Выкл./Вкл afk статуc</p>
    <p><a onclick="copyCommand('/dynmap hide')">/dynmap hide</a> - Скрыться с динамической карты</p>
    <p><a onclick="copyCommand('/dynmap show')">/dynmap show</a> - Появиться на динамической карте</p><br> 
    <hr>
    <div style="transform: translateY(-100%); width: 220px;">
        <label>Команды связанные с городами</label>
    </div>
    <p><a onclick="copyCommand('/town')">/town [Название города]</a> - Появиться на динамической карте</p>
    <p><a onclick="copyCommand('/town list')">/town list</a> - Список городов</p>
    <p><a onclick="copyCommand('/town new')">/town new [Название города]</a> - Создать свой город (доп. инфа во вкладке "Для мэров")</p>
    <p><a onclick="copyCommand('/town online')">/town online [Название города]</a> - Кол-во жителей города в сети</p>
    <p><a onclick="copyCommand('/town spawn')">/town spawn [Название города]</a> - Телепортация на спавн города</p>
    <p><a onclick="copyCommand('/town online')">/town online [Название города]</a> - Кол-во жителей города в сети</p>
    <p><a onclick="copyCommand('/town join')">/town join [Название города]</a> - Присоединиться к городу</p>
    <p><a onclick="copyCommand('/town leave')">/town leave</a> - Покинуть город</p>
    <p><a onclick="copyCommand('/tc')">/tc</a> - Чат города</p><br>
    <hr>
    <div style="transform: translateY(-100%); width: 196px;">
        <label>Управление своим участком</label>
    </div>
    <p><a onclick="copyCommand('/plot toggle [explosion/fire/mobs/pvp]')">/plot toggle [explosion/fire/mobs/pvp] on/off</a> - Вкл/выкл флага</p>
    <p><a onclick="copyCommand('/plot set perm')">/plot set perm [Роль] [Разрешение] on/off</a> - Настройка прав (Лучше не трогать)</p>
    <p><a onclick="copyCommand('/plot trust add')">/plot trust add [Ник]</a> - Добавление игрока в приват</p>
    <p><a onclick="copyCommand('/plot trust remove')">/plot trust remove [Ник]</a> - Удаление игрока из привата</p>
    <p><a onclick="copyCommand('/plot fs')">/plot fs [Цена]</a> - Продажа своего участка</p><br>
</div>
<div class="msg" id="msg">
    <p><strong>Команда скопирована!</strong></p>
</div>
</body>
</html>