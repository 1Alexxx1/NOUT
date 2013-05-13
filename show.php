<html>
<head>
<title>Ноутбук</title>
</head>
<body>
Вы можете посмотреть базу данных нажав <a href="added.php">сюда</a>.
</body>
</html>
<?php
$file=fopen('zakaz.txt','a+');
fputs($file,$_POST['data1']); 
fputs($file,$_POST['data2']); 
fputs($file,$_POST['data3']); 
fputs($file,$_POST['data4']);
fputs($file,$_POST['data5']);
fputs($file,$_POST['data6']);
fputs($file,$_POST['data7']);
fputs($file,$_POST['data8']);
fputs($file,$_POST['data9']);
fputs($file,$_POST['data10']);
fputs($file,$_POST['data11']);
fclose($file);
?> 
<?php
$con=mysqli_connect("localhost","iskyweb_test5","test5","iskyweb_test5");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO testbd (data1, data2, data3,data4,data5,data6,data7,data8,data9,data10,data11)
VALUES
('$_POST[data1]','$_POST[data2]','$_POST[data3]','$_POST[data4]','$_POST[data5]','$_POST[data6]','$_POST[data7]','$_POST[data8]','$_POST[data9]','$_POST[data10]','$_POST[data11]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error());
  }
echo "Запись успешно добавлена в базу данных.";

mysqli_close($con);

?>
<?php
echo "<p>Ваш заказ:</p>";
$data1=$_REQUEST['data1'];
echo "<br>Фамилия=$data1 <br>";
$data2=$_REQUEST['data2'];
echo "Имя=$data2 <br>";
$data3=$_REQUEST['data3'];
echo "Стоимость монитора=$data3 <br>";
$data4=$_REQUEST['data4'];
echo "Стоимость оперативки=$data4 <br>";
$data5=$_REQUEST['data5'];
echo "Стоимость HDD=$data5 <br>";
$data6=$_REQUEST['data6'];
echo "Стоимость сенсорного экрана=$data6 <br>";
$data7=$_REQUEST['data7'];
echo "стоимость видеокарты=$data7 <br>";
$data8=$_REQUEST['data8'];
echo "Стоимость процессора=$data8 <br>";
$data9=$_REQUEST['data9'];
echo "Способ доставки=$data9 <br>";
$data10=$_REQUEST['data10'];
echo "Кол-во ноутбуков=$data10 <br>";
$data11=$_REQUEST['data11'];
echo "Адресс доставки=$data11 <br>";

?>
