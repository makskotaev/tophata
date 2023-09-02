<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/style/css/index.css">
    <link rel="stylesheet" href="/style/css/wiki.css">
    <title>ТопХата Wiki</title>
    <script>
    function copyCommand(command) {
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
        <a href="/wiki/page-1/">Игрокам</a>
        <a style="color: rgba(45, 212, 191, 1);">Мэрам</a>
    </div>
</nav>
<div class="commands">
    <div style="width: 145px;">
        <label>Управление городом</label>
    </div>
    <p><a onclick="copyCommand('/town deposit')">/town deposit [Сумма]</a> - Вложение денег в город</p>
    <p><a onclick="copyCommand('/town withdraw')">/town withdraw [Сумма]</a> - Взятие денег из города</p>
    <p><a onclick="copyCommand('/town claim')">/town claim</a> - Преобретение чанка на котором вы стоите (Стоимость участка 25$)</p>
    <p><a onclick="copyCommand('/plot fs')">/plot fs [Цена]</a> - Продажа любого участка города</p>
    <p><a onclick="copyCommand('/plot nfs')">/plot nfs</a> - Отмена продажи выбранного участка</p>
    <p><a onclick="copyCommand('/town set plotprice')">/town set plotprice [Цена]</a> - Установка цены на участки по умолчанию</p>
    <p><a onclick="copyCommand('/town toggle [explosion/fire/mobs/pvp]')">/town toggle [explosion/fire/mobs/pvp] on/off</a> - Вкл/выкл флага</p>
    <p><a onclick="copyCommand('/town set perm')">/town set perm [Роль] [Разрешение] on/off</a> - Настройка прав для города (Лучше не трогать)</p>
    <p><a onclick="copyCommand('/town assistant add')">/town assistant add [Ник]</a> - Добавить ассистента мэра</p>
    <p><a onclick="copyCommand('/town assistant remove')">/town assistant remove [Ник]</a> - Удалить ассистента мэра</p>
    <p><a onclick="copyCommand('/town set board')">/town set board [Сообщение]</a> - Сообщение выдаваемое жителям при входе в игру</p>
    <p><a onclick="copyCommand('/town set tag')">/town set tag [Тэг]</a> - Установка тэга в чате для жителей города</p>
    <p><a onclick="copyCommand('/town set homeblock')">/town set homeblock</a> - Установка homeblock'а города</p>
    <p><a onclick="copyCommand('/town set spawn')">/town set spawn</a> - Установка спавна в городе</p>
    <p><a onclick="copyCommand('/town claim outpost')">/town claim outpost</a> - Установка места блок-поста</p><br>
    <hr>
    <div style="transform: translateY(-100%); width: 220px;">
        <label>Команды связанные с городами</label>
    </div>
    <p><a onclick="copyCommand('/town add')">/town add [Ник]</a> - Добавить нового жителя в город</p>
    <p><a onclick="copyCommand('/town kick')">/town kick [Ник]</a> - Выгнать жителя из города</p>
    <p><a onclick="copyCommand('/town set taxes')">/town set taxes [Сумма]</a> - Установка налогов на каждого жителя</p>
    <p><a onclick="copyCommand('/town set plottax')">/town set plottax</a> - Установка налогов на каждый участок жителя</p>
    <p><a onclick="copyCommand('/town ban add')">/town ban add [Ник]</a> - Объявить игрока вне закона (Жителя города кикает из города)</p>
    <p><a onclick="copyCommand('/town ban remove')">/town ban remove [Ник]</a> - Снять всё обвинения с игрока</p>
    <p><a onclick="copyCommand('/town kick')">/town kick</a> - Выгнать жителя из города</p><br>
</div>
<div class="msg" id="msg">
    <p><strong>Команда скопирована!</strong></p>
</div>
</body>
</html>