<?php 
session_start(); //ประกาศใช้ session
ob_start();
session_destroy(); //เคลียร์ค่า session
 header('Location: ../index.php'); //Logout เรียบร้อยและกระโดดไปหน้าตามที่ต้องการ
?>