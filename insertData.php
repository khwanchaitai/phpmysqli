<?php
// เชื่อมต่อฐานข้อมูล
// ดึงเรียกใช้การเชื่อมต่อจาก dbconnect.php
require('dbconnect.php');

// รับค่าที่ส่งมาจากฟอร์มลงในตัวแปร
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$gender=$_POST["gender"];

$emskills=implode(",",$_POST["skills"]); // แปลง array=> string


//บันทึกข้อมูล
$sql = "INSERT INTO employee(fname,lname,gender,skills) VALUES('$fname','$lname','$gender','$emskills')";

$result=mysqli_query($connect,$sql); // สั่งรันคำสั่ง sql

if($result){
    echo "บันทึกข้อมูลเรียบร้อย";
}else{
    echo mysqli_error($connect);
    
}

?>