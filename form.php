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

<title> ������ ���� ������� ���!!! </title>
</head>
<body>
<form name="forma" method="post" action="add.php">
<p>����� ��������</p>
<p>
������� ���� �������:<br>
<input type="text" name="familiya" >
</p>
<p>
������� ���� ���:<br>
<input type="text" name="imya">
</p>
<p>������ ������</p>
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
<p>����� ����������� ������</p>
<p>
<input  type="radio" name="MemSize" value="100" checked>
1��<br>
<input   type="radio" name="MemSize"  value="200">
2��<br>
<input   type="radio" name="MemSize"  value="300">
3��<br>
<input   type="radio" name="MemSize"  value="400">
4��<br>
<input   type="radio" name="MemSize"  value="500">
6��<br>
<input   type="radio" name="MemSize"  value="890">
8��<br>
<input   type="radio" name="MemSize"  value="910">
12��<br>
<input   type="radio" name="MemSize"  value="8000">
16��<br>
<input   type="radio" name="MemSize"  value="9000">
24��<br>
</p>
<p>����� HDD</p>
<p>
<input  type="radio" name="HDDSize" value="100" checked>
�� 160��<br>
<input   type="radio" name="HDDSize"  value="200">
160��-200�� <br>
<input   type="radio" name="HDDSize"  value="300">
250��-300�� <br>
<input   type="radio" name="HDDSize"  value="400">
300��-400�� <br>
<input   type="radio" name="HDDSize"  value="500">
1��<br>
</p>
<p>��������� �����</p>
<p>
<input  type="radio" name="SensScreen" value="1000" checked>
��<br>
<input   type="radio" name="SensScreen"  value="400">
���<br>
</p>
<p>����������(����� ������)</p>
<p>
<input  type="radio" name="videoPrice" value="100" checked>
512��<br>
<input   type="radio" name="videoPrice"  value="200">
1��<br>
<input   type="radio" name="videoPrice"  value="300">
2��<br>
<input   type="radio" name="videoPrice"  value="400">
3��<br>
<input   type="radio" name="videoPrice"  value="500">
4��<br>
<input   type="radio" name="videoPrice"  value="600">
6��<br>
</p>
<p>���������(���������� �������� �������)</p>
<p>
<input  type="radio" name="CPUPrice" value="100" checked>
����� 2 ��� <br>
<input   type="radio" name="CPUPrice"  value="200">
2.1 - 2.5 ���<br>
<input   type="radio" name="CPUPrice"  value="300">
2.6 - 3 ���<br>
<input   type="radio" name="CPUPrice"  value="400">
����� 3 ���<br>
</p>

<p>�������� ������ ��������:</p>
<p>
<select name="dostavka" size="1">
<option selected value="10"> � �������</option>
<option value="20">� �������� </option>
<option value="0"> ���������</option>
</select>
</p> 
<p>
������� ���������� ����� ���������:<br>
<input type="text" name="kolichestvo" value="1">
</p>
<p> ������� ����� ��� ��������:<br>
<textarea name="address" cols="40" rows="5"></textarea>
</p>
<input type=button value="��������������� ���������" onClick="calculate();"><br>
<textarea name=result></textarea>
<p>
<input type="submit" value="�������� ��� �����" width="20">
 <input type="reset" value="������ ">
</p>
</form>
</body>
</html>
