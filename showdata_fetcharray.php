<?php
require('dbconnect.php');

$sql = "SELECT * FROM employee";
$result=mysqli_query($connect,$sql);

$row=mysqli_fetch_array($result,MYSQLI_NUM); // MYSQLI_NUM, MYSQLI_ASSOC, MYSQLI_BOTH
echo "รหัสพนักงาน = ".$row[0]."<br>";
echo "ชื่อ = ".$row[1]."<br>";
echo "นามสกุล = ".$row[2]."<br>";
echo "เพศ = ".$row[3]."<br>";
echo "ทักษะ = ".$row[4]."<br>";
echo "<hr>";

// MYSQLI_ASSOC
// $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
// echo "รหัสพนักงาน = ".$row["id"]."<br>";
// echo "ชื่อ = ".$row["fname"]."<br>";
// echo "นามสกุล = ".$row["lname"]."<br>";
// echo "เพศ = ".$row["gender"]."<br>";
// echo "ทักษะ = ".$row["skills"]."<br>";
// echo "<hr>";

// MYSQLI_BOTH
// $row=mysqli_fetch_array($result,MYSQLI_BOTH);
// echo "รหัสพนักงาน = ".$row["id"]."<br>";
// echo "ชื่อ = ".$row[1]."<br>";
// echo "นามสกุล = ".$row[2]."<br>";
// echo "เพศ = ".$row["gender"]."<br>";
// echo "ทักษะ = ".$row[4]."<br>";
// echo "<hr>";


?>