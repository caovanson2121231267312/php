<?php
	$x = 4;
    if ($x % 2 == 0){
        echo 'Số '.$x.' Là Số Chẵn';
    }else {
    	echo 'Số '.$x.' Là Số lẻ';
    }


    echo "<br>";


    $mau = 'màu xanh';
    if ($mau == 'màu xanh'){
        echo 'Đây là màu xanh';
    } else if ($mau == 'màu đỏ'){
        echo "Đây là màu đỏ";
    } else if ($mau == 'màu vàng'){
        echo 'Đây là màu vàng';
    } else{
        echo 'Các màu khác';
    }


    echo "<br>";


    $number = 1;
    switch ($number) {
    case 0 :
        echo 'Số không';
        break;
    case 1:
        echo 'Số một';
        break;
    case 2:
        echo 'Số hai';
        break;
    case 3:
        echo 'Số ba';
        break;
    case 4 :
        echo 'Số bốn';
        break;
    default:
        echo 'Không tìm thấy';
        break;
    }
?>