<?php
session_start();
$cpp = 0;
$python = 0;
$java = 0;
$php = 0;
$js = 0;
$cs = 0;

$web = 0;
$soft = 0;
$mobile = 0;


if ($_POST['first'] == "web") {
    $php++;
    $js++;
    $python++;

    $web++;
}
else if ($_POST['first'] == "soft"){
    $cpp++;
    $cs++;
    $python++;

    $soft++;
}
else if ($_POST['first'] == "mobile"){
    $java++;
    $cs++;

    $mobile++;
}


if ($_POST['second'] == "withArch") { //
    $cpp++;
    $cs++;
    $java++;
}
else if ($_POST['second'] == "withoutArch") {
    $python++;
    $php++;
    $js++;
}


if ($_POST['third'] == "fast") {
    $python++;
    $cs++;
}
else if ($_POST['third'] == "slow") {
    $cpp++;
    $cs++;
    $php++;
    $js++;
    $java++;
}


if ($_POST['fourth'] == "programmer") {
    $cpp++;
    $php++;
    $js++;
    $java++;
}
else if ($_POST['fourth'] == "beginner") {
    $python++;
    $cs++;
}


if ($_POST['fifth'] == "easy") {
    $php++;
    $python++;
}
else if ($_POST['fifth'] == "hard") {
    $cpp++;
    $cs++;
    $java++;
    $js++;
}



?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результат</title>
    <style>
  body { background: url(back.jpg); 
    background-size: 100%;
  }
  button.new {
   background: -moz-linear-gradient(#D0ECF4, #5BC9E1, #D0ECF4);
   background: -webkit-gradient(linear, 0 0, 0  100%, from(#D0ECF4), to(#D0ECF4), color-stop(0.5, #5BC9E1));
   filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00BBD6', endColorstr='#EBFFFF');
   padding: 3px 7px;
   color: #333;
   -moz-border-radius: 5px;
   -webkit-border-radius: 5px;
   border-radius: 5px;
   border: 1px solid #666;
  }
</style>
</head>
<body bgcolor="#008080">
<form name=myform1 action=index.html method=POST>
<table width="60%"  border="0" align="center" cellspacing="0">
<?php
if ($web == 1){
    if($python >= $js && $python >= $php){ ?>
        <tr><td>
        <p><h6 align="center"><font size="6" color="darkblue" face="Calibri"><?php echo $_COOKIE["cookieName"]?>, рекомендую Вам начать с изучения Python — высокоуровневого языка программирования общего назначения с хорошей читаемостью кода и минималистичным синтаксисом. Он отлично подходит для изучения начинающим программистам и точно пригодится в будущем: в веб-разработке, для быстрого решения прикладных задач и для кучи других областей.</font></h6></p>

        </td></tr>

    <?php }
    else if($js >= $python && $js >= $php){ ?>
        <tr><td>
        <p><h6 align="center"><font size="6" color="darkblue" face="Calibri"><?php echo $_COOKIE["cookieName"]?>, JavaScript - то, что Вам нужно. JasaScript постоянно совершенствуется язык, а также на нем написано огромное количество сайтов</font></h6></p>

        </td></tr>
    <?php }
    else if($php >= $python && $php >= $js){ ?>
        <tr><td>
        <p><h6 align="center"><font size="6" color="darkblue" face="Calibri"><?php echo $_COOKIE["cookieName"]?>, рекомендую Вам начать с PHP. Он легко учится, а также на нем написано огромное количество сайтов</font></h6></p>

        </td></tr>
    <?php }
}
else if ($soft == 1){

    if($cs >= $cpp && $cs >= $python){ ?>
        <tr><td>
        <p><h6 align="center"><font size="6" color="darkblue" face="Calibri"><?php echo $_COOKIE["cookieName"]?>, посмотрите в сторону платформы .NET и объектно-ориентированного языка C#, разработанного в компании Microsoft. Вы сможете решать широкий спектр задач и реализовывать проекты любой сложности</font></h6></p>

        </td></tr>
    <?php }
    else if($cpp >= $python && $cpp >= $cs){ ?>
        <tr><td>
        <p><h6 align="center"><font size="6" color="darkblue" face="Calibri"><?php echo $_COOKIE["cookieName"]?>, рекомендую Вам начать изучать C++, он всегда востребован. Вы сможете писать на нем программы любой сложности. Также, на C++ написано огромное количество популярных языков</font></h6></p>

        </td></tr>
    <?php }
    else if($python >= $cs && $python >= $cpp){ ?>
        <tr><td>
        <p><h6 align="center"><font size="6" color="darkblue" face="Calibri"><?php echo $_COOKIE["cookieName"]?>, рекомендую Вам начать с изучения Python — высокоуровневого языка программирования общего назначения с хорошей читаемостью кода и минималистичным синтаксисом. Он отлично подходит для изучения начинающим программистам и точно пригодится в будущем: в веб-разработке, для быстрого решения прикладных задач и для кучи других областей.</font></h6></p>

        </td></tr>
    <?php }
}
else if ($mobile == 1){
    if($java >= $cs){ ?>
        <tr><td>
        <p><h6 align="center"><font size="6" color="darkblue" face="Calibri"><?php echo $_COOKIE["cookieName"]?>, для разработки мобильных приложений Вам потребуются такие языки, как Java и Swift</font></h6></p>

        </td></tr>
    <?php }
    else { ?>
        <tr><td>
        <p><h6 align="center"><font size="6" color="darkblue" face="Calibri"><?php echo $_COOKIE["cookieName"]?>, посмотрите в сторону платформы Xamarin и объектно-ориентированного языка C#, разработанного в компании Microsoft. Вы сможете решать широкий спектр задач и реализовывать проекты любой сложности не только для телефонов, но и для умных часов, приставок и многого другого</font></h6></p>

        </td></tr>
    <?php }
}
?>
<tr><td>
<div align="center">
<p><button class="new" style="width:150px; height:75px"><font size="5" face="Times New Roman">Начать сначала</font></button></p>
</div>
</td></tr>
</table>
</body>
</html>