<?php
if (isset($_POST['subject']) && (isset($_POST['email']) && (isset($_POST['name']) && (isset($_POST['message'])){
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];

    if (mail('egor04corp04123@gmail.com',
    'новое письмо',
    'вы ввели тему '.$subject."/n".
    'вы ввели почту '.$email."/n".
    'вы ввели имя '.$name."/n".
    'вы ввели сообщение '.$message
    )) {
        echo('Сообщение отправленео');
    } else {
        echo('ошибка');
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords"content="theory, mystic, boba" />
<meta name="description" content="я царь и бох" />
<link href="style.css" rel="stylesheet" type="text/css" />
<linc href="img/favicon.ico.ico" rel="shortcut icon" type="image/x-icon" />
<title>Song under the red moon</title>
<style type="text/css">
    body { 
     background-image: url(img/fon.jpg); 
     background-position: left bottom; 
     background-repeat: repeat; 
    }
   </style>
        <script src="https://lidrekon.ru/slep/js/jquery.js"></script>
<script src="https://lidrekon.ru/slep/js/uhpv-full.min.js"></script>
</head>
<body>
    
    <img id="specialButton" style="cursor:pointer;" src="https://lidrekon.ru/images/special.png" alt="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" title="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" />
<div id="page-wrap">
<header>
<a href="index.html" title="На главную" id="logo">Doofenshmirtz Evil Incorporated</a><span class="contact"><a href="fyfel.html" title="Информация обо мне любимом"> О компании</a></span>
</header>
<div class="clear"><br /></div>
<center>
    <div id="menu">Разделы<hr /></div>
    <div id="menuHrefs">
         <a href="fyfel.html">О компании</a>
         <a href="svez.html">обратная связь</a>
         <a href="hobbi.html">хобби</a>
         <a href="opisanie.html">описание</a>
         <a href="index.html">главная страница</a>
    </div>
</center>
<div id="wrapper">
    <div id="articles">
         <form action="" method="POST">
             <label for="subject">тема сообщения</label>
             <input type="text" id="subject" name="subject" placeholder="тема сообщения" />
             <label for="email">email</label>
             <input type="email" id="email" name="email" placeholder="adress@example.com" />
             <label for="name">введите ваше имя</label>
             <input type="text" id="name" name="name" placeholder="введите ваше имя" />
             <label for="message">введите ваше сообщение</label>
             <textarea placeholder="ведите ваше сообщение" id="message" name="message"></textarea>
             <input type="submit" value="отправить" id="send" name="send" />
         </form>
    </div>	
</div>
</div>
<footer>
<span class="left">Все права мои &copy; 2077</span><span class="right">контактны телефон<br>+8 800 535 35 35<img src="img/among us.ico" alt="не спи" title="не спи" /></span>
</footer>
</body>
</html>