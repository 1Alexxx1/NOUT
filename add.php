<?php
//header('Content-type: text/html; charset=utf-8');
header('Content-type: text/html; charset=windows-1251');
?>

<html>
<head>
<title>�������</title>
</head>
<body>
�� ������ ���������� ���� ������ ����� <a href="added.php">����</a>.
</body>
</html>
<?php
define("DBName","testbd");
define("HostName","localhost");
define("UserName","root");
define("Password","");

$familiya=$_REQUEST['familiya'];
echo "<br>�������=$familiya <br>";
$imya=$_REQUEST['imya'];
echo "���=$imya <br>";
$ScreenSize=$_REQUEST['ScreenSize'];
echo "���������??? ��������=$ScreenSize <br>";
$MemSize=$_REQUEST['MemSize'];
echo "���������??? ����������=$MemSize <br>";
$HDDSize=$_REQUEST['HDDSize'];
echo "���������?? HDD=$HDDSize <br>";
$SensScreen=$_REQUEST['SensScreen'];
echo "���������?? ���������� ������=$SensScreen <br>";
$videoPrice=$_REQUEST['videoPrice'];
echo "��������� ����������=$videoPrice <br>";
$CPUPrice=$_REQUEST['CPUPrice'];
echo "���������?? ����������=$CPUPrice <br>";
$dostavka=$_REQUEST['dostavka'];
echo "������ ��������=$dostavka <br>";
$kolichestvo=$_REQUEST['kolichestvo'];
echo "���-�� ���������=$kolichestvo <br>";
$address=$_REQUEST['address'];
echo "������ ��������=$address <br>";


$file=fopen('zakaz.txt','a+');
fputs($file,$familiya); 
fputs($file,$imya); 
fputs($file,$ScreenSize); 
fputs($file,$MemSize);
fputs($file,$HDDSize);
fputs($file,$SensScreen);
fputs($file,$videoPrice);
fputs($file,$CPUPrice);
fputs($file,$dostavka);
fputs($file,$kolichestvo);
fputs($file,$address);
fclose($file);



if(!mysql_connect(HostName,UserName,Password))
{ echo "Error connecting to database".DBName."!<br>";
echo mysql_error();
exit;
} 

mysql_select_db(DBName);

$sql="INSERT INTO testbd (familiya, imya, ScreenSize,MemSize,HDDSize,SensScreen,VideoPrice,CPUPrice,dostavka,kolichestvo,address) VALUES ('$familiya','$imya','$ScreenSize','$MemSize','$HDDSize','$SensScreen','$videoPrice','$CPUPrice','$dostavka','$kolichestvo','$address');";
echo $sql;
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
echo "������ ������� ��������� � ���� ������.";

//mysql_close($con);

?>
