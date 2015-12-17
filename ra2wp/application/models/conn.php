<?php

/* * ***************************
 * connect to the database ra2db
 * *************************** */
$conn = @mysql_connect("localhost", "root", "admin12345");
if (!$conn) {
    die("Connect to the database failed:" . mysql_error());
}
mysql_select_db("omsrez_db", $conn);
//字符转换，读库
mysql_query("set character set 'gbk'");
//写库
mysql_query("set names 'gbk'");

$con = mysqli_connect("localhost", "root", "admin12345", "ra2db");
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con, "omsrez_db");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//$iipp=$_SERVER["REMOTE_ADDR"];  
//echo "Your IP address is:".$iipp; 
//echo "<br />"; 
//echo exec('whoami'); 
?>