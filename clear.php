<?php
define("DBName","testbaza");
define("HostName","localhost");
define("UserName","root");
define("Password","");
if(!mysql_connect(HostName,UserName,Password))
{ echo "Error connecting to database".DBName."!<br>";
echo mysql_error();
exit;
}

mysql_select_db(DBName);
 $r=mysql_query('SET PHP_MODE="NO_AUTO_VALUE_ON_ZERO"');
 $r=mysql_query('SET PHP_MODE="NO_AUTO_VALUE_ON_ZERO"');
 $r=mysql_query('SET time_zone = "+00:00"');
 $r=mysql_query("CREATE TABLE IF NOT EXISTS `testbd` (  `data1` text NOT NULL,  `data2` text NOT NULL,  `data3` text NOT NULL,  `data4` text NOT NULL,  `data5` text NOT NULL,  `data6` text NOT NULL,  `data7` text NOT NULL,  `data8` text NOT NULL,  `data9` text NOT NULL,  `data10` text NOT NULL,  `data11` text NOT NULL ENGINE=InnoDB DEFAULT CHARSET=latin1;");
 $r=mysql_query("INSERT INTO `testbd` (`data1`, `data2`, `data3`, `data4`, `data5`, `data6`, `data7`, `data8`, `data9`, `data10`, `data11`) VALUES ('', '', '100', '100', '100', '1000', '100', '100', 'Ê ïîäåçäó', '1', ''),('', '', '100', '100', '100', '1000', '100', '100', 'Ê ïîäåçäó', '1', '');");
 
 
