<?
$data = require_once('datainfo.php');
$startData = $data['about'];
$massiveData = $data['contacts'];
$achievementsData = $data['achievements'];
$workData = $data['work'];
$familyData = $data['family']
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мое резюме</title>
    <link rel="shortcut icon" href="images/resume.ico">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
    <script src="js/slides.js" defer></script>
    
    <!-- <script type="text/javascript">
        let firstName = prompt("Как вас зовут?", "Имя");
        function showMsg(){
            let message = "Здравствуйте, " + firstName;
            alert(message);
        }
        showMsg(); -->

    </script>

</head>

<body>

    <button id="toggle-theme-btn"><input type="image" src="/images/moon.png" alt="здесь был Петя" id="toggle-theme-image"></button>

    <div class="header">
        <h1>Мое резюме</h1>
        <div class="menu">
            <ul>
                <li><a href="#aboutme">Обо мне</a></li>
                <li><a href="#myachievements">Мои достижения</a></li>
                <li><a href="#mywork">Моя работа</a></li>
                <li><a href="#myfamily">Моя семья</a></li>
                <li><a href="#contacts">Мои контакты</a></li>
            </ul>
        </div>
    </div>
    <div class="slides">
        <img src="images/nature1.jpeg" class="block" alt="Картинка природы" >
        <img src="images/nature2.webp" alt="Картинка природы">
        <img src="images/nature3.jpg" alt="Картинка природы">
    </div>
    <button class="btnSlide">Сменить изображение</button>

    <div class="container">
        <div class="photo">
            <a href="#"><input type="image" src="images/rocket.png" alt="best photo"></a>
        </div>
        <div class="content">

            <h2 class="titleblog" id="aboutme">Обо мне:</h2>

            <p><?=$startData['myname']?></p> 
            <p><?=$startData['mybirth']?></p> 
            <p><?=$startData['myeducation']?></p> 
            <p><?=$startData['militaryservice']?></p>
            <p><?=$startData['myhobbies']?></p>
            <hr>

            <h2 class="titleblog" id="myachievements">Мои достижения:</h2>

            <p><?=$achievementsData['sport']?></p>
            <p><?=$achievementsData['lostWeight']?></p>
            <p><?=$achievementsData['willpower']?></p>
            <hr>
            <h2 class="titleblog" id="contacts">Мои контакты:</h2>
            <? foreach($massiveData as $value){?>
            <p><?=$value['adress']?></p>
            <p><?=$value['email']?></p>
            <p><?=$value['phone']?></p>
            <? } ?>
            <hr>

            <h2 class="titleblog" id="mywork">Моя работа:</h2>

            <p><?=$workData['inMoscow']?></p>
            <p><?=$workData['outMoscow']?></p>
            <hr>

            <h2 class="titleblog" id="myfamily">Моя семья:</h2>

            <p><?=$familyData['parents']?></p>
            <p><?=$familyData['brother']?></p>
            <p><?=$familyData['wife']?></p>

        </div>

        <div class="footer">
            <a class="copyright" href="gb.ru">Пишу что хочу. Это мой блог. Все права защищены(c)</a>
            <a class="top" href="#top">Перейти вверх страницы</a>
        </div>


</body>

</html>