<html>
<head>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Ноутбук</title>

</head>
<body>
</body>
</html>
<?php
$con=mysqli_connect("localhost","iskyweb_test5","test5","iskyweb_test5");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM testbd");

echo "<table>

<th>Фамилия</th>
<th>Имя</th>
<th>Размер экрана</th>
<th>Объем оперативной памяти</th>
<th>Объём HDD</th>
<th>Сенсорный экран</th>
<th>Видеокарта(Объем памяти)</th>
<th>Процессор(Частота)</th>
<th>Способ доставки</th>
<th>Количество</th>
<th>Адресс доставки</th>
"; 

while($row = mysqli_fetch_array($result))
 {
  echo "<tr>";
  echo "<td>" . $row['data1'] . "</td>";
  echo "<td>" . $row['data2'] . "</td>";
  echo "<td>" . $row['data3'] . "</td>";
  echo "<td>" . $row['data4'] . "</td>";
  echo "<td>" . $row['data5'] . "</td>";
   echo "<td>" . $row['data6'] . "</td>";
    echo "<td>" . $row['data7'] . "</td>";
   echo "<td>" . $row['data8'] . "</td>";
	  echo "<td>" . $row['data9'] . "</td>";
	   echo "<td>" . $row['data10'] . "</td>";
 echo "<td>" . $row['data11'] . "</td>";	   
  echo "</tr>";
  }

echo"</table>";
mysqli_close($con);
?>
