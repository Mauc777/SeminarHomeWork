<?
// Подключение PHP файла
$data = include('datainfo.php');
// переменная      ключ
$startData = $data['about'];
$massiveData = $data['contacts'];
$travelData = $data['myachievements'];
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Мое резюме</title>
  <link rel="shortcut icon" href="images/FavIcon11.png">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/script.js" defer></script>
  <!-- <script src="js/script.js" async></script> -->

</head>

<body>

  <button id="toggle-theme-btn"><img src="/images/moon.png" alt="Кнопка moon" id="toggle-theme-image"></button>

  <div class="header">
    <h1>Мое резюме</h1>
    <div class="menu">
      <ul>
        <li><a href="#aboutme">Обо мне</a></li>
        <li><a href="#myachievements">Мои достижения</a></li>
        <li><a href="#contacts">Мои контакты</a></li>
      </ul>
    </div>
  </div>


  </div>
  <button class="btnRight">Right</button>
  </div>
  <!-- <script src="/JS/slides.js" class="btnRight" defer></script> -->


  <div class="slides">
    <img src="images/nature1.jpeg" class="block" alt="Картинка природы_1">
    <img src="images/nature2.jpg" alt="Картинка природы_2">
    <img src="images/nature3.jpg" alt="Картинка природы_3">
  </div>

  <div class="container">
    <div class="photo">
      <!-- <a href="#"><img target="_blank"><input type="image" src="images/BocalIcon.png" alt="Бокал-фото"></a> -->
      <a href="https://gb.ru" target="_blank"> <input type="image" src="images/BocalIcon.png" alt="Бокал-фото"> </a>
    </div>

    <div class="content">


      <h2 class="titleblog" id="aboutme">Обо мне:
      </h2>
      <p><?=$startData['helo' ]?></p>
      <p><?=$startData['myname' ]?></p>
      <p><?=$startData['info' ]?></p>
      <p><?=$startData['hobbies']?></p>
      <p><?=$startData['hobbies2' ]?></p>
      <p><?=$startData['history' ]?></p>

      <h2 class="titleblog" id="myachievements">Мои достижения:</h2>
      <a href="#"><img id="Ea1" src="images/Eagl.png" alt="Орел"></a>
      <!-- <a href="#"><img id="Ea1" src="images/Eagl.png"  alt="Орел"></a>  -->

      <hr>
      <p></p>
      <p></p>
      <p></p>
      <p><?=$travelData['Participated']?></p>
      <p><?=$travelData['education']?></p>
      <p><?=$travelData['travel']?></p>
      <hr>



      <h2 class="titleblog" id="contacts">Мои контакты:</h2>
      <? foreach($massiveData as $value) {?>
      <p><?=$value['adress']?></p>
      <p><?=$value['email']?></p>
      <p><?=$value['tel']?></p>
      <? } ?>

      <a class="WhatsApp" id="WhatsApp1" href="https://api.whatsapp.com/send? phone=9280105153"> WhatsApp </li> </a>
      <a class="Telegram" id="Telegram1" href="https://t.me/cls500_988">Telegram </a>

    </div>

    <div class="footer">

      <a class="copyright">Страница - визитка Маиса Г. Все права защищены(c)</a>

      <a class="WhatsApp" href="#contacts"> ссылка на WhatsApp </a>
      <a class="Telegram" href="#contacts"> ссылка на Telegram </a>

      <a class="top" href="#top"> Перейти вверх страницы </a>



    </div>

    <script src="js/slides.js" class="btnRight" defer></script>
    <!-- Выполнение зазания\ДЗ-3 пункта 3-->
    <!-- Ссылаемся на файл, содержащий скрипт приветствия пользователя -->

    <!-- <script language="JavaScript" src="js/function_name.js" defer>   -------Запрос имени на странице
    </script> -->



</body>

</html>

<!-- Попытка нового залива -->