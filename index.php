<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <ol>
    <?php
     function say_hi($name, $day){
         switch($day){
             case 'Пн' : ;
             case 'Вт' : ;
             case 'Ср' : ;
             case 'Чт' : ;
             case 'Пт' : echo 'Приввет ' . $name . ' Хорошего и продуктивного дня!' ; break ;
             case 'Сб' : ;
             case 'Вс' : echo 'Привет ' . $name . ' Желаю вам хорошо отдохнуть'; break;
          }
     };

     say_hi('Андрей', 'Вт');
    ?>
    </ol>
</body>
</html>