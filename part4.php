<?php
	// vòng lặp for

	for ($i = 0; $i <= 10; $i++) {
        echo "$i <br>";
    }
    // * $i = 0 : Dữ liệu cần lặp, do nó chưa có giá trị nên mình gán nó là 0.
	// * $i <= 10 : Điều kiện lặp, ví dụ này nghĩa là nó sẽ lặp đến khi nào $i nhỏ hơn hoặc bằng 10.
	// * $i++ : Toán tử đếm khi vòng lặp thực hiện, $i++ nó giống như $i + 1, tức là tăng 1 giá trị mỗi chu kỳ lặp.


	// vòng lặp while
	$x = 1;
	while ( $x <= 10) {
	    $x++;
	    echo "$x <br>";
	}


	// vòng lặp do while
	$x = 0;
    do {
        $x++;
        echo "$x <br>";
    } while ( $x <= 10 );


    // vòng lặp foreach
    $arr = array("hello", "Cao Sơn", 6, 2022, "PHP");

    foreach( $arr as $value ) {
        echo "$value <br>";
    }
    // Vòng lặp này ta sẽ lặp các giá trị và khoá trong mảng, chúng ta không có gắn điều kiện hay số lần lặp gì cả mà nó sẽ lặp khi nào hết mảng thì thôi.
?>