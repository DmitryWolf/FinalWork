<?php
session_start(); // доделать
setcookie('cookieName', $_POST['name'], time()+60*60*24);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тест</title>
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
<form name=myform1 action=page3.php method=POST>
<?php
$za = $_POST['name'];
?>
<table width="60%"  border="0" align="center" cellspacing="0">
<tr><td>		
<div align="center"><font size="5" color="darkblue" face="Calibri">
<p><h3 align="center"><font size="6">Какая сфера вам интереснее?</font></h3></p>
<p>Веб: сайты и интернет-сервисы <input type=radio name=first value=web></p>
<p>Десктоп-приложения: под Windows, macOS, Linux <input type=radio name=first value=soft></p>
<p>Мобильные приложения: для телефонов, планшетов <input type=radio name=first value=mobile></p>
</font></div>
</td></tr>

<tr><td>
<div align="center"><font size="5" color="darkblue" face="Calibri">
<p><h3 align="center"><font size="6">Хотите ли вы изучать архитектуру компьютера? </font></h3></p>
<p>Да<input type=radio name=second value=withArch></p>
<p>Нет<input type=radio name=second value=withoutArch></p>
</font></div>
<p></p>
</td></tr>

<tr><td>
<div align="center"><font size="5" color="darkblue" face="Calibri">
<p><h3 align="center"><font size="6">Как быстро вы хотите получить результат? </font></h3></p>
<p>Хочу как можно скорее начать делать что-то настоящее <input type=radio name=third value=fast></p>
<p>Готов долго учиться и вникать, но зато потом получить лучший результат <input type=radio name=third value=slow></p>
</font></div>
<p></p>
</td></tr>

<tr><td>
<div align="center"><font size="5" color="darkblue" face="Calibri">
<p><h3 align="center"><font size="6">Вы хотите выбрать программирование как основную профессию или же язык вам нужен только для решения прикладных задач: быстро что-то посчитать, проанализировать? </font></h3></p>
<p>Хочу стать программистом<input type=radio name=fourth value=programmer></p>
<p>Язык нужен для решения прикладных задач<input type=radio name=fourth value=beginner></p>
</font></div>
<p></p>
</td></tr>

<tr><td>
<div align="center"><font size="5" color="darkblue" face="Calibri">
<p><h3 align="center"><font size="6">Какой язык программирования более всего привлекает? </font></h3></p>
<p>Более легкий в изучении, но менее широко-функциональный <input type=radio name=fifth value=easy></p>
<p>Более сложный, но более широко-функциональный <input type=radio name=fifth value=hard></p>
</font></div>
<p></p>
</td></tr>

<tr><td>
<div align="center"><font size="5" face="Calibri">
<p><button class="new" style="width:150px; height:50px"><font size="5" face="Times New Roman">Результат</font></button></p>
</font></div>
</td></tr>
</table>
</form>
</body>
</html>