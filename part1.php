<?php

    // php có 7 kiểu dữ liệu

    // Integer (kiểu số nguyên)
    $a = 9999;  // biến a được khai báo kiểu dữ liệu số nguyên với giá trị là 9999
    var_dump($a); // var_dump trả về kiểu dữ liệu và giá trị.
    echo "<br>"; // xuống dòng


    // Float (kiểu số thực)
    $b = 5.6;  // biến b được khai báo kiểu dữ liệu số thực với giá trị là 5.6
    var_dump($b);
    echo "<br>";

    
    // String (Kiểu chuỗi)
    $message = "Cao Văn Sơn học lập trình Website";
    var_dump($message);
    echo "<br>";


    // Array (Kiểu mảng)
    $arr = array( "html5", "css3", "javascript", 2022);   // biến arr có kiểu dữ liệu dạng mảng với 4 giá trị
    var_dump($arr);
    echo "<br>";
    echo $arr[2]; // lấy ra phần tử có index là 2 (javascript)
    echo "<br>";


    // Boolean
    $x1 = true;
    var_dump($x1);
    echo "<br>";
    $x2 = false;
    var_dump($x2);
    echo "<br>";


    // Object (Đối tượng)
    class Student{
        // khai báo 2 thuộc tính của class là name và age
        public $name;
        public $age;

        // khai báo hàm khởi tạo của class
        public function __construct($name, $age)
        {
            $this->name = $name;
            $this->age = $age;
        }

        // khai báo phương thức cho class
        public  function getInfo(){
            return $this->name." - ".$this->age;
        }
    }

    // khởi tạo object student
    $person_1 = new Student("Cao Văn Sơn", 24);
    echo $person_1->getInfo();
    echo "<br>";


    // NULL
    $x = null;
    var_dump($x);
    echo "<br>";

?>