<?php
	$sum1 = 0;
	$x = 1;
	while ($x < 100) {
    $sum1 += $x;
    $x++;
}
	echo "Tổng các số từ 1-100 là: $sum1 <br>";
    $sum2 = 0;
	$y = 1;
	while ($y < 100) {
    $sum2 += $y * $y;
    $y++;
	if($y == 50){
   break;
	}
}
	echo "Tổng bình phương của 50 sô đầu tiên là: $sum2 ";
?>