<?php 
	$arr = [1,2,6,3,2];


	echo count($arr);  // Hàm này có tác dụng đếm xem trong mảng có bao nhiêu phần tử.
	echo "<br>";


	 $array = [
        'domain' => 'caovanson.com',
        'description' => 'Website học lập trình'
    ];
    print_r(array_values($array));  // Hàm này có tác dụng trả về một mảng tuần tự với phần tử là key của mảng ban đầu.
    echo "<br>";


    print_r(array_pop($array));  // Hàm này trả về phần tử cuối cùng của mảng.
    echo "<br>";


    print_r(array_push($arr, 3));  // Hàm này có tác dụng thêm một hoặc nhiều phần tử vào cuối mảng và trả về số lượng phần tử của mảng sau khi thêm.
    echo "<br>";


    print_r(array_shift($arr));  // Hàm có tác dụng xóa phần tử đầu tiên của mảng và trả về phần tử vừa xóa.
    echo "<br>";


    print_r(array_unshift($arr, 9,7,8));  // Hàm có tác dụng thêm một hoặc nhiều phần tử vào đầu mảng, và trả về số lượng phần tử của mảng sau khi thêm.
    echo "<br>";


    sort($arr); //TRUE Hàm có tác dụng thêm một hoặc nhiều phần tử vào đầu mảng, và trả về số lượng phần tử của mảng sau khi thêm.
    print_r($arr);
    echo "<br>";


    print_r(array_reverse($arr));  // Hàm có tác dụng đảo ngược lại vị trí của các phần tử trong mảng.
    echo "<br>";


    print_r(array_merge($arr, $array, $arr));  // Hàm có tác dụng gộp hai hay nhiều mảng thành một mảng.
    echo "<br>";


    print_r(array_search(3, $arr));  //  Hàm có tác dụng tìm kiếm giá trị của mảng và trả về key của phần tử đó nếu có.
    echo "<br>";


    print_r(array_unique($arr));  //  Hàm có tác dụng loại bỏ các phần tử trùng nhau trong mảng và trả về một mảng mới sau khi đã loại bỏ.
    echo "<br>";


    $arr1 = [1, 2, 3, 2, 0];
    print_r(array_diff($arr1, $arr)); // Hàm có tác dụng trả về mảng chứa các phần tử có trong mảng $array1 nhưng không có trong mảng $array2,..,$arrayn
    echo "<br>";

?>