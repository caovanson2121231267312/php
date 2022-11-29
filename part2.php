<?php

    $a = 21;
    $b = 66;

    $c = $a + $b;
    echo "Kết quả phép cộng: $c <br/>";
    $c = $a - $b;
    echo "Kết quả phép trừ: $c <br/>";
    $c = $a * $b;
    echo "Kết quả phép nhân: $c <br/>";
    $c = $a / $b;
    echo "Kết quả phép chia: $c <br/>";
    $c = $a % $b;
    echo "Phần dư phép chia: $c <br/>";
     
    $c = $a++;
    echo "Thêm một vào $c: $a <br/>";
   
    $c = $a--;
    echo "Giảm $a đi 1: $c <br/>";

    if( $a == $b ){ 
       echo "a bằng b<br/>"; 
    }else{ 
       echo "a không bằng b<br/>";  
    } 
 
    if( $a > $b ){ 
       echo "a lớn hơn b<br/>"; 
    }else{ 
       echo "a không lớn hơn b<br/>"; 
    } 
    
    if( $a < $b ){ 
       echo "a nhỏ hơn b<br/>"; 
    }else{ 
       echo "a không nhỏ hơn b<br/>"; 
    } 

    if( $a != $b ){ 
       echo "a khác b<br/>"; 
    }else{ 
       echo "b bằng b<br/>"; 
    } 

    if( $a >= $b ){ 
       echo "a lớn hơn hoặc bằng b<br/>"; 
    }else{ 
       echo "a không lớn hơn hoặc bằng<br/>"; 
    } 
    
    if( $a <= $b ){ 
       echo "a nhỏ hơn hoặc bằng b<br/>"; 
    }else{ 
       echo "a không nhỏ hơn hoặc bằng b<br/>"; 
    } 
?>