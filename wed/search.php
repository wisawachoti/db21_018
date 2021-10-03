<?php
//เชื่อมฐานข้อมูล
require('dbconnect.php');

// รับค่าข้อมูล
echo "เลขที่ใบสั่งซื้อ ".$_POST["offer_id"]."<br>";

echo "วันที่ ".$_POST["date"]."<br>";

echo "ประเภทการชำระเงิน ".$_POST["payment"]."<br>";

echo "ชื้อ-นามสกุล(ลูกค้า) ".$_POST["customer_id"]."<br>";

//บันทึกข้อมูล
$sql = "INSERT INTO "

?>