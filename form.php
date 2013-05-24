<?php
//header('Content-type: text/html; charset=utf-8');
header('Content-type: text/html; charset=windows-1251');
?>
<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="content-type" content="text/html; charset=windows-1251">
<script>
function calculate()
{
var radios = document.getElementsByTagName('input');
var summ=0;
for (var i = 0; i < radios.length; i++) {
    if (radios[i].type === 'radio' && radios[i].checked) {
        summ+=parseFloat(radios[i].value);   
    }
}


var nubmer=parseFloat(document.forma.data10.value);
  document.forma.result.value=summ*nubmer;
}
</script>

<title> Сделай свой ноутбук сам!!! </title>
</head>
<body>
<form name="forma" method="post" action="add.php">
<p>Заказ ноутбука</p>
<p>
Введите свою фамилию:<br>
<input type="text" name="familiya" >
</p>
<p>
Введите свое имя:<br>
<input type="text" name="imya">
</p>
<p>Размер экрана</p>
<p>
<input  type="radio" name="ScreenSize" value="100" checked>
9-10<br>
<input   type="radio" name="ScreenSize"  value="200">
11-12,5<br>
<input   type="radio" name="ScreenSize"  value="300">
13<br>
<input   type="radio" name="ScreenSize"  value="400">
14<br>
<input   type="radio" name="ScreenSize"  value="500">
15-15,6<br>
<input   type="radio" name="ScreenSize"  value="600">
16-17<br>
<input   type="radio" name="ScreenSize"  value="700">
18-20<br>
</p>
<p>Объем оперативной памяти</p>
<p>
<input  type="radio" name="MemSize" value="100" checked>
1гб<br>
<input   type="radio" name="MemSize"  value="200">
2гб<br>
<input   type="radio" name="MemSize"  value="300">
3гб<br>
<input   type="radio" name="MemSize"  value="400">
4гб<br>
<input   type="radio" name="MemSize"  value="500">
6гб<br>
<input   type="radio" name="MemSize"  value="890">
8гб<br>
<input   type="radio" name="MemSize"  value="910">
12гб<br>
<input   type="radio" name="MemSize"  value="8000">
16гб<br>
<input   type="radio" name="MemSize"  value="9000">
24гб<br>
</p>
<p>Объём HDD</p>
<p>
<input  type="radio" name="HDDSize" value="100" checked>
до 160гб<br>
<input   type="radio" name="HDDSize"  value="200">
160гб-200гб <br>
<input   type="radio" name="HDDSize"  value="300">
250гб-300гб <br>
<input   type="radio" name="HDDSize"  value="400">
300гб-400гб <br>
<input   type="radio" name="HDDSize"  value="500">
1тб<br>
</p>
<p>Сенсорный экран</p>
<p>
<input  type="radio" name="SensScreen" value="1000" checked>
да<br>
<input   type="radio" name="SensScreen"  value="400">
нет<br>
</p>
<p>Видеокарта(Объем памяти)</p>
<p>
<input  type="radio" name="videoPrice" value="100" checked>
512мб<br>
<input   type="radio" name="videoPrice"  value="200">
1гб<br>
<input   type="radio" name="videoPrice"  value="300">
2гб<br>
<input   type="radio" name="videoPrice"  value="400">
3гб<br>
<input   type="radio" name="videoPrice"  value="500">
4гб<br>
<input   type="radio" name="videoPrice"  value="600">
6гб<br>
</p>
<p>Процессор(Внутренняя тактовая частота)</p>
<p>
<input  type="radio" name="CPUPrice" value="100" checked>
Менее 2 ГГц <br>
<input   type="radio" name="CPUPrice"  value="200">
2.1 - 2.5 ГГц<br>
<input   type="radio" name="CPUPrice"  value="300">
2.6 - 3 ГГц<br>
<input   type="radio" name="CPUPrice"  value="400">
Более 3 ГГц<br>
</p>

<p>Выберите способ доставки:</p>
<p>
<select name="dostavka" size="1">
<option selected value="10"> К подезду</option>
<option value="20">В квартиру </option>
<option value="0"> Самовывоз</option>
</select>
</p> 
<p>
Введите количество таких ноутбуков:<br>
<input type="text" name="kolichestvo" value="1">
</p>
<p> Введите адрес для доставки:<br>
<textarea name="address" cols="40" rows="5"></textarea>
</p>
<input type=button value="Приблизительная стоимость" onClick="calculate();"><br>
<textarea name=result></textarea>
<p>
<input type="submit" value="Показать Ваш заказ" width="20">
 <input type="reset" value="Отмена ">
</p>
</form>
</body>
</html>
