<?php
echo ("Mã sản phẩm: EV2009"."<br>");
echo ("Tên sản phẩm: Tấm hợp kim nhôm ngoài trời EV2009"."<br>");
echo ("Số lượng: 500"."<br>");
echo ("Đơn giá: 160000"."<br>");
echo ("VAT: 0.05"."<br>");
$soluong = 500;
$dongia = 160000;
$vat = 0.05;
echo ("Chưa trừ VAT: ");
echo $soluong * $dongia."<br>";
echo ("Đã trừ VAT: ");
echo $soluong * $dongia * $vat;
?>