<?php
//header('Content-type: text/html; charset=utf-8');
header('Content-type: text/html; charset=windows-1251');
?>

<html>
<head>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>�������</title>

</head>
<body>
</body>
</html>
<?php
define("DBName","testbd");
define("HostName","localhost");
define("UserName","root");
define("Password","");

if(!mysql_connect(HostName,UserName,Password))
{ echo "Error connecting to database".DBName."!<br>";
echo mysql_error();
exit;
}
mysql_select_db(DBName);


$result = mysql_query("SELECT * FROM testbd");

echo "<table border=2>

<th>�������</th>
<th>���</th>
<th>������ ������</th>
<th>����� ����������� ������</th>
<th>����� HDD</th>
<th>��������� �����</th>
<th>����������(����� ������)</th>
<th>���������(�������)</th>
<th>������ ��������</th>
<th>����������</th>
<th>������ ��������</th>
"; 

while($row = mysql_fetch_array($result))
 {
  echo "<tr>";
  echo "<td>" . $row['familiya'] . "</td>";
  echo "<td>" . $row['imya'] . "</td>";
  echo "<td>" . $row['ScreenSize'] . "</td>";
  echo "<td>" . $row['MemSize'] . "</td>";
  echo "<td>" . $row['HDDSize'] . "</td>";
  echo "<td>" . $row['SensScreen'] . "</td>";
  echo "<td>" . $row['videoPrice'] . "</td>";
  echo "<td>" . $row['CPUPrice'] . "</td>";
  echo "<td>" . $row['dostavka'] . "</td>";
  echo "<td>" . $row['kolichestvo'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "</tr>";
 }

echo"</table>";
//mysql_close($con);
?>
