# Introduction to web Technology

- Công nghệ web là một thuật ngữ chung đề cập đến nhiều ngôn ngữ và gói đa phương tiện được sử dụng kết hợp với nhau, để tạo ra các trang web. Mỗi công nghệ có chức năng riêng biệt và cần yêu cầu sử dụng kép ít nhất thêm một công nghệ khác. Do đó, có thể nói rằng tất cả các thành phần tạo nên một trang web phụ thuộc lẫn nhau.  

# Introduction to HTML5 and CSS

- HTML5: HTML là từ viết tắt của Hypertext Markup Language, hay còn được gọi là ngôn ngữ siêu văn bản. HTML có chức năng giúp người dùng xây dựng và cấu trúc các phần trong trang web, HTML5 được cải tiến so với HTML, đã được tích hợp các chức năng hỗ trợ video, âm thanh. HTML5 là phiên bản mới, do đó có nhiều thẻ mới và một số thẻ cũng đã bỏ đi. Do đó, chỉ có một số trình duyệt hỗ trợ cho HTML5.

- CSS: CSS là viết tắt của Cascading Style Sheets, một ngôn ngữ thiết kế đơn giản, xử lý một phần giao diện của trang web. CSS, bạn có thể kiểm soát màu chữ, cỡ chữ, kiểu chữ, khoảng cách giữa các đoạn văn bản, kích thước của các thành phần trên trang web, màu nền, thiết kế bố cục và cách trang web hiển thị trên những màn hình có kích thước khác nhau cũng như hàng loạt hiệu ứng khác.

# PHP Introduction

- **Khái niệm:** PHP được viết tắt của cụm từ Personal Home Page. PHP hoạt động chủ yếu ở phía Server, hôc trợ quá trình tạo ra các mã HTML phục vụ cho các hoạt động trên Client. PHP đa phần đều sở hữu cấu trúc code đơn giản, nhỏ gọn, dễ đọc hiểu, cùng tốc độ thực thi nhanh chóng.

* **Ưu điểm:**
	* PHP được sử dụng miễn phí, cộng đồng lớn.
	* Cú pháp và cấu trúc của PHP tương đối dễ dàng.
	* Áp dụng được nhiều framework.
	* Khả năng bảo mật cao cho dù đây là mã nguồn mở, PHP được cộng đồng phát triển rất mạnh mẻ vì vậy PHP được coi là an toàn khi sử dụng với sự chia sẻ cách bảo mật.

* **Nhược điểm**
	* PHP chỉ có thể sử dụng làm website và các ứng dụng website mở rộng.
	* PHP có ít công cụ debugger hơn so với các ngôn ngữ lập trình khác

# PHP

## PHP Syntax

- Tệp lệnh PHP có thể đặt ở bất cứ đâu trong tài liệu.
- Một tập lệnh php bắt đầu bằng <?php và kết thúc bằng ?>.
- 1 file PHP có đuôi ".php".
- 1 tệp PHP thường có thể chứa các thẻ HTMl hoặc các lệnh php.
```php
<?php
    echo "hello";
?>
```

## PHP Data Types

- PHP có tất cả 7 kiểu dữ liệu:

### Integer

- Kiểu dữ liệu integer (viết tắt là int) là kiểu dạng số nguyên.
- không là số thập phân.
- Có thể là số dương hoặc số âm.
- Giá trị nằm trong khoảng: -2,147,483,648 và 2,147,483,647

```php
<?php
    $x = 9999;  // biến x được khai báo kiểu dữ liệu số nguyên với giá trị là 9999
    var_dump($x); // var_dump trả về kiểu dữ liệu và giá trị.
?>
```

### Float

- Kiểu dữ liệu float là kiểu số thực, là dạng số thập phân hay dạng lũy thừa.

```php
<?php
    $b = 5.6;  // biến b được khai báo kiểu dữ liệu số thực với giá trị là 5.6
    var_dump($b);
?>
```

### String

- Kiểu dữ liệu string là kiểu dạng chuỗi các ký tự, được chứa bên trong dấu ngoặc đơn hoặc ngoặc kép.

```php
<?php
    $message = "Cao Văn Sơn học lập trình Website";
    var_dump($message);
?>
```

### Array

- Kiểu dữ liệu array là kiểu dữ liệu lưu trữ nhiều giá trị trong một biến duy nhất.
- Các phần tử array được đánh chỉ mục từ 0 trở đi, tức phần tử đầu tiên sẽ được xem là phần tử 0.
- Cách viết một phần tử mảng: $tenmang[index], với index là số chỉ mục phần tử mảng.

```php
<?php
    $arr = array( "html5", "css3", "javascript", 2022);   // biến arr có kiểu dữ liệu dạng mảng với 4 giá trị
    var_dump($arr);
    echo "<br>";
    echo $arr[2]; // lấy ra phần tử có index là 2 (javascript)
?>
```

### Boolean

- Kiểu dữ liệu boolean là kiểu dữ liệu đại diện cho 2 trạng thái đúng (true) và sai (false).
- Giá trị true và false không phân biệt viết hoa hay viết thường: TRUE = true, FALSE = false

```php
<?php
    $x1 = true;
    var_dump($x1);
    echo "<br>";
    $x2 = false;
    var_dump($x2);
    echo "<br>";
?>
```

### Object

- Class và Object là khía cạnh thuộc về lập trình hướng đối tượng.
- Class là khuôn mẫu cho các Object và một Object là thể hiện của một Class.
- Các Object kế thừa tất cả thuộc tính và hành vi của Class nhưng mang những giá trị khác nhau.

```php
<?php
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
?>
```

### NULL

- Null là kiểu dữ liệu đặc biệt, có giá trị duy nhất là null.
- Một biến được tạo mà không có giá trị nào thì tự động được gán giá trị null.

```php
<?php
    $x = null;
    var_dump($x);
?>
```


## PHP Variables, Constants and Array  


### PHP Variables (Biến)

- Một biến bắt đầu bằng dấu $, theo sau là tên của biến.
- Tên biến phải bắt đầu bằng một chữ cái hoặc ký tự gạch dưới.
- Tên biến không thể bắt đầu bằng số.
- Tên biến chỉ có thể chứa các ký tự chữ-số và dấu gạch dưới (Az, 0-9 và _).
- Tên biến có phân biệt chữ hoa chữ thường.

```php
<?php
    $v1 = "hello";
    $abc = 123;
?>
```

### PHP Constants (Hằng)

- Hằng (constant) được sử dụng để lưu trữ một giá trị đơn giản, tuy nhiên điểm khác biệt giữa hằng so với biến là hằng sẽ không thể thay đổi giá trị sau khi được xác định.
- Một tên hằng hợp lệ phải được bắt đầu bằng một chữ cái hoặc dấu gạch dưới, không có dấu $ phía trước tên hằng.
- Không giống như các biến, mặc định các hằng sẽ có phạm vi toàn cục (global) trên toàn bộ tập lệnh.

```php
<?php
    define("V1", "hello"); // tên hằng Có phân biệt chữ hoa, chữ thường
    echo V1; // hello

    function alert(){
        echo V1;
    }
    alert(); // hello
?>
```

### PHP Array (Mảng)

* **Mảng được lập chỉ mục hoặc Mảng số:** Mảng có chỉ mục số nơi các giá trị được lưu trữ tuyến tính.

```php
<?php 
    $arr = array("Zack", "Anthony", "Ram", "Salim", "Raghav"); 
    $arr[0] = "ZACK"; 
    $arr[1] = "ANTHONY"; 
    $arr[2] = "RAM"; 
    $arr[3] = "SALIM"; 
    $arr[4] = "RAGHAV"; 
?> 
```

* **Mảng liên kết:** Mảng có chỉ mục chuỗi trong đó thay vì lưu trữ tuyến tính, mỗi giá trị có thể được gán một khóa cụ thể.

```php
<?php 
    $arr = array("mohammad" => 2000, "qadir" => 1000, "zara" => 500);
    $arr['mohammad'] = 2000;
    $arr['qadir'] = 1000;
    $arr['zara'] = 500;
?> 
```

* **Mảng đa chiều:** Mảng chứa một hoặc nhiều mảng bên trong nó và có thể được truy cập thông qua nhiều chỉ số.

```php
<?php
$diemdanhgia = array( 
    "volvo" => array
    (
        "mausac" => 7,
        "kieudang" => 8,  
        "tocdo" => 9
    ),

    "bmw" => array
    (
        "mausac" => 7,
        "kieudang" => 9,
        "tocdo" => 6
    ),

    "toyota" => array
    (
        "mausac" => 8,
        "kieudang" => 8,
        "tocdo" => 9
    )
);
    /* truy cập các giá trị của mảng đa chiều */
    echo "Điểm đánh giá màu sắc của Volvo là: " ;
    echo $diemdanhgia['volvo']['mausac'] . ""; 
 
    echo "Điểm đánh giá kiểu dáng của BMW là: ";
    echo $diemdanhgia['bmw']['kieudang'] . ""; 
 
    echo "Điểm đánh giá tốc độ của Toyotalà: " ;
    echo $diemdanhgia['toyota']['tocdo'] . "";
?>
```

## PHP Operators

| Operator | Name                | Syntax   | Operation                          |
|:---------|:--------------------|:---------|:-----------------------------------|
| +        | Cộng                | $x + $y  | Tính tổng phép tính                |
| -        | Trừ                 | $x - $y  | Trừ phép tính                      |
| *        | Nhân                | $x * $y  | Nhân phép tính                     |
| /        | Chia                | $x / $y  | Chia phép tính                     |
| **       | Lũy thừa            | $x ** $y | $x được nâng lên thành lũy thừa $y |
| %        | Mô đun              | $x % $y  | Phần còn lại của $x chia cho $y    |
| ">"      | Lớn hơn             | $x > $y  | $x phải lớn hơn $y                 |
| <        | Nhỏ hơn             | $x < $y  | $x phải lớn hơn $y                 |
| ==       | Bằng                | $x == $y | $x bằng $y                         |
| <=       | Nhỏ hơn hoặc bằng   | $x <= $y | $x nhỏ hơn hoặc bằng $y            |
| `>=      | Lớn hơn hoặc bằng   | $x >= $y | $x lớn hơn hoặc bằng               |
| +=       | Cộng bằng           | $x += $y | $x += $y => $x = $x + $y           |
| -=       | Trừ bằng            | $x -= $y | $x -= $y => $x = $x - $y           |
| *=       | Nhân bằng           | $x `*= $y| $x *= $y => $x = $x `* $y          |
| /=       | Chia bằng           | $x /= $y | $x /= $y => $x = $x / $y           |
| %=       | Modulo bằng         | $x %= $y | $x %= $y => $x = $x % $y           |
| ? :      | Biểu thức điều kiện |          | ($a > $b ) ? $a :$b                |
| !        | Toán NOT (phủ định) | !($x)    | !(true || true) ≡ false            |
| &&       | Toán tử và          |($x && $y)| (true && true) ≡ true              |


## Control Structures

### if else statement

- Câu lệnh điều kiện if else cho phép ta thay đổi luồng của chương trình dựa trên một điều kiện nào đó. Nếu điều kiện là đúng (true) thì chương trình sẽ được thực hiện, ngược lại nếu điều kiện đưa ra là sai (false) thì nội dung công việc đó sẽ không được thực hiện.

```php
<?php
    $x = 4;
    if ($x % 2 == 0){
        echo 'Số '.$x.' Là Số Chẵn';
    }else {
        echo 'Số '.$x.' Là Số lẻ';
    }
?>
```

### else if statement

- Trong thực tế không phải lúc nào cũng chỉ có 2 điều kiện mà sẽ có hàng chục điều kiện khác nhau, lúc này ta phải kết hợp nhuần nhuyễn giữa 2 lệnh if và else để xử lý

```php
<?php
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
?>
```

### switch case 

- Câu lệnh switch trong php cho phép ta đưa ra quyết định có nhiều cách lựa chọn để giá trị của biểu thức truyền vào. Nếu giá trị biểu thức truyền vào trùng với các giá trị biểu thức điều kiện thì các câu lệnh bên trong biểu thức điều kiện sẽ được thực hiện.

```php
<?php
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
```

## PHP Loops (Vòng lặp)

* Trong PHP, hiện tại chúng ta có thể sử dụng 4 loại vòng lặp khác nhau đó là for(), while() và foreach(). Mỗi kiểu vòng lặp sẽ có cách làm việc khác nhau, cụ thể:

	* for – Lặp một hành động với số lần lặp nhất định. Ví dụ bạn muốn in từ số 1 đến 1000 thì sẽ dùng vòng lặp này vì chúng ta có thể đặt điều kiện cho nó dừng lại sau khi lặp 1000 lần.
	* while – Lặp một hành động dựa theo một điều kiện cụ thể mà nó trả về là true.
	* do while – Vòng lặp này tương tự giống như while, nhưng bạn có thể đặt một tập hợp các code vào hàm do() rồi nó sẽ lặp lại các code này dựa theo một điều kiện nhất định.
	* foreach – Sử dụng để lặp các khoá và giá trị trong một dữ liệu mảng. Cái này cũng được sử dụng rất nhiều khi làm việc với mảng.

### for

```php
<?php
    for ($i = 0; $i <= 10; $i++) {
        echo "$i <br>";
    }
?>
```

* **Trong đó:**

	* $i = 0 : Dữ liệu cần lặp, do nó chưa có giá trị nên mình gán nó là 0.
	* $i <= 10 : Điều kiện lặp, ví dụ này nghĩa là nó sẽ lặp đến khi nào $i nhỏ hơn hoặc bằng 10.
	* $i++ : Toán tử đếm khi vòng lặp thực hiện, $i++ nó giống như $i + 1, tức là tăng 1 giá trị mỗi chu kỳ lặp.

### while

- Lặp qua một khối mã miễn là điều kiện được chỉ định là đúng thì vẫn lặp.

```php
<?php
    $x = 1;
    while ($x <= 10) {
        $x++;
        echo "$x <br>";
    }
?>
```

### do while

- do while nó sẽ thực hiện các đoạn code trước rồi mới kiểm tra điều kiện sau.

```php
<?php
    $x = 0;
    do {
        $x++;
        echo "$x <br>";
    } while ( $x <= 10 );
?>
```

### foreach

- Vòng lặp này ta sẽ lặp các giá trị và khoá trong mảng, chúng ta không có gắn điều kiện hay số lần lặp gì cả mà nó sẽ lặp khi nào hết mảng thì thôi.

```php
<?php
    $arr = array("hello", "Cao Sơn", 6, 2022, "PHP");

    foreach( $arr as $value ) {
        echo "$value <br>";
    }
?>
```

## String Functions

- Các hàm xử lý chuỗi trong PHP hay gặp :

### explode( $delimiter , $string)

- Hàm chuyển 1 chuỗi $string thành 1 mảng phần tử với ký tự tách mảng $delimiter:

```php
<?php
    $str = "Xin chào lập trình viên, tôi là số 1";
    $explode = explode(' ', $str); // tách chuỗi str thành mảng sau mỗi khoảng trắng
    var_dump($explode);
    echo "<br>";
?>
```

### implode($delimiter, $piecesarray);

- Chuyển 1 mảng $piecearray thành chuỗi, mỗi phần tử cách nhau bởi chuỗi $delimiter:

```php
<?php
    echo implode(' ', array('PHP','xin','chào','các','bạn'));
?>
```

### strlen($str)

- Đếm số ký tự trong chuỗi

```php
<?php
    echo strlen('Cao Văn Sơn');
?>
```

### str_word_count($str)

- Đếm số từ trong chuỗi

```php
<?php
    echo str_word_count('Cao Văn Sơn');
?>
```

### str_repeat($str, $n)

- lặp chuỗi $str với $n lần

```php
<?php
    echo str_repeat('Hello', 5);
?>
```

### str_replace( $chuoi_tim, $chuoi_thay_the, $chuoi_nguon )

- Tìm kiếm, thay thế chuỗi:

```php
<?php
    echo str_replace( 'cao', 'sơn', $str );
?>
```

### md5($str)

- Mã hóa chuỗi thành dãy 32 ký tự

```php
<?php
    echo md5('hello');
?>
```

### sha1($str)

- Mã hóa chuỗi thành dãy 40 ký tự

```php
<?php
    echo sha1('hello');
?>
```

### htmlentities($str)

- Chuyển thẻ html trong chuỗi $str sang dạng thực thể của nó

```php
<?php
    echo htmlentities('<b>hello</b>');
    // Kết quả <b>hello</b>
?>
```

### html_entity_decode($str)

- Chuyển các ký tự từ dạng thực thể sang dạng html

```php
<?php
    echo html_entity_decode('<b>hello</b>');
    // Kết quả hello
?>
```

### strpos($str, $chuoi_tim )

- Xác định vị trí chuỗi $chuoi_tim trong $str:

```php
<?php
    echo strpos('caosonss.com chào các bạn', 'chào');
    // kết quả 13
?>
```

### strtolower($str) Chuyển các ký tự chuỗi $str sang dạng chữ thông thường.

### strtoupper($str) Chuyển các ký tự chuỗi $str sang dạng chữ hoa.

### ucfirst($str) Chuyển ký tự đầu của chuỗi $str sang dạng chữ hoa.

### ucwords($str) Chuyển từ đầu tiên của chuỗi $str sang dạng chữ hoa.

### strcmp($str) So sánh các chuỗi

### substr($str,start,length) Hiển thị 1 phần của chuỗi

### trim($str) Xóa ký tự ở đầu và cuối của chuỗi


## Array Functions 

### count($arr)

- Hàm này có tác dụng đếm xem trong mảng có bao nhiêu phần tử.

```php
<?php
    $arr = [1,2,6,3,2];
    echo count($arr);
?>
```

### array_values($array)

- Hàm này có tác dụng trả về một mảng tuần tự với phần tử là key của mảng ban đầu.

```php
<?php
    $array = [
        'domain' => 'caovanson.com',
        'description' => 'Website học lập trình'
    ];
    print_r(array_values($array));
?>
```

### array_pop($arr)

- Hàm này trả về phần tử cuối cùng của mảng.

```php
<?php
    $array = [1,2,6,3,2]
    print_r(array_pop($array));
?>
```

### array_push($arr,$var)

- Hàm này có tác dụng thêm một hoặc nhiều phần tử vào cuối mảng và trả về số lượng phần tử của mảng sau khi thêm.

```php
<?php
    $array = [1,2,6,3,2];
    print_r(array_push($array, 'Miễn phí nhé'));
?>
```

### array_shift($array)

- Hàm có tác dụng xóa phần tử đầu tiên của mảng và trả về phần tử vừa xóa.

```php
<?php
    $array = [1,2,6,3,2];
    print_r(array_shift($array));
?>
```

### array_unshift($array, $var)

- Hàm có tác dụng thêm một hoặc nhiều phần tử vào đầu mảng, và trả về số lượng phần tử của mảng sau khi thêm.

```php
<?php
    $array = [1,2,6,3,2];
    print_r(array_unshift($array, 9));
?>
```

### sort($array)

- Hàm có tác dụng thêm một hoặc nhiều phần tử vào đầu mảng, và trả về số lượng phần tử của mảng sau khi thêm.

```php
<?php
    $array = [5, 4, 3, 2, 1];
    sort($array); //TRUE
    print_r($array);
?>
```

### array_reverse($array)

- Hàm có tác dụng đảo ngược lại vị trí của các phần tử trong mảng.

```php
<?php
    $array = [5, 4, 3, 2, 1];
    print_r(array_reverse($array));
?>
```

### array_merger($array,$array1, ...)

- Hàm có tác dụng gộp hai hay nhiều mảng thành một mảng.

```php
<?php
    $array = [
        'a' => '123',
        'b' => 'Website học lập trình online'
    ];
    $array1 = [5, 4, 3, 2, 1];
    $array2 = [9, 0, 3, 2, 0];
    print_r(array_merge($array, $array1, $array2));
?>
```

### array_search($keyword,$array)

- Hàm có tác dụng tìm kiếm giá trị của mảng và trả về key của phần tử đó nếu có.

```php
<?php
    $arr = [9, 0, 3, 2, 0];
    print_r(array_search(3, $arr));
?>
```

### array_unique($arr)

- Hàm có tác dụng loại bỏ các phần tử trùng nhau trong mảng và trả về một mảng mới sau khi đã loại bỏ.

```php
<?php
    $arr = [9, 0, 3, 2, 0];
    print_r(array_unique($arr));
?>
```

### array_diff($array1,$array2)

- Hàm có tác dụng trả về mảng chứa các phần tử có trong mảng $array1 nhưng không có trong mảng $array2,..,$arrayn

```php
<?php
    $arr = [9, 0, 3, 2, 0];
    $arr1 = [1, 2, 3, 2, 0];
    print_r(array_diff($arr1, $arr));
?>
```

### is_array($array) - Kiểm tra xem có phải mảng hay không


## File handling (Xử lý tập tin)

* Các quyền truy cập vào file:
    * r: Chỉ được đọc (Read only)
    * r+: Được quyền đọc và ghi (Read + write)
    * w: Chỉ được viết (write only)
    * w+: Được quyền đọc và viết (write + read). Nếu file này tồn tại thì nội dung cũ sẽ bị xóa đi và ghi lại nội dung mới, còn nếu file chưa tồn tại thì nó tạo file mới
    * a: Được quyền viết và nếu file tồn tại nó sẽ ghi tiếp nội dung phía dưới, ngược lại nếu file không tồn tại nó tạo file mới
    * a+: Được quyền viết và đọc. Nếu file tồn tại nó sẽ ghi tiếp nội dung phía dưới, ngược lại nếu file không tồn tại nó tạo file mới
    * b: Mở dưới dạng chế độ binary
    * x: Tệp mới chỉ được tạo để ghi.
    * x+: Tạo một tệp mới để đọc/ghi.

### fopen()

* Hàm fopen() được dùng để mở 1 tệp với 2 tham số, tham số thứ nhất chứa tên tệp và tham số thứ 2 cho biết chế độ mà tệp cần được mở:

```php
<?php
    $file = fopen("hello.txt", "r");
?>
```

### fread()

* Hàm fread() được sử dụng để đọc 1 file đang mở, tham số thứ nhất là tên file cần đọc và tham số thứ 2 chỉ định số byte tối đa cần đọc.

```php
<?php
    $file = fopen("hello.txt", "r");
    if (!$file) {
        echo "không thể mở file";
    } else {
        // Đọc file và trả về nội dung
        $data = fread($file, filesize('hello.txt'));
        echo $data;
    }
?>
```

### fwrite()

* Hàm fwrite() có thể tạo mới hoặc nối văn bản vào tệp đang mở.

```php
<?php
    $file = fopen("hello.txt", "w");
  
    if (!$file) {
        echo "không thể mở file";
    } else {
        $data = 'cao văn sơn';
        // Ghi file
        fwrite($file, $data);
    }
?>
```

### fclose()

* Hàm fclose() dùng để đóng tệp. Đối số truyền vào là tên tệp.

```php
<?php
    $file = fopen("hello.txt", "r");
    fclose($file);
?>
```

### file_exists() kiểm tra 1 file có tồn tại không

### rename('ten_cu.txt', 'ten_moi.txt') đổi tên 1 file

### unlink() xóa file

### basename() Trả về tên file

### mkdir() Tạo thư mục

### pathinfo() Trả vê thông tin của đường dẫn file.

### move_upload_file() chuyển tệp đã tải lên đích mới. Nếu đích mới đã tồn tại sẽ bị ghi đè.


# Web Stack

- Là một tập hợp các ứng dụng phần mềm, thường cần thiết để phát triển web, đặc biệt là để phát triển ứng dụng web và triển khai trang web. Ngăn xếp web là một loại ngăn xếp giải pháp, là tập hợp phần mềm để thực hiện các tác vụ cụ thể. Ngăn xếp web là thành phần quan trọng cho các ứng dụng web cũng như các trang web.

# ngnix

- NGINX là một web server mạnh mẽ mã nguồn mở. Nginx sử dụng kiến trúc đơn luồng, hướng sự kiện vì thế nó hiệu quả hơn Apache server. Nó cũng có thể làm những thứ quan trọng khác, chẳng hạn như load balancing, HTTP caching, hay sử dụng như một reverse proxy.

* Các tính năng của ngnix

    * Có khả năng xử lý hơn 10.000 kết nối cùng lúc với bộ nhớ thấp.
    * Phục vụ tập tin tĩnh (static files) và lập chỉ mục tập tin.
    * Tăng tốc reverse proxy bằng bộ nhớ đệm (cache), cân bằng tải đơn giản và khả năng chịu lỗi.
    * Hỗ trợ tăng tốc với bộ nhớ đệm của FastCGI, uwsgi, SCGI, và các máy chủ memcached.
    * Kiến trúc modular, tăng tốc độ nạp trang bằng nén gzip tự động.
    * Hỗ trợ mã hoá SSL và TLS.
    * Cấu hình linh hoạt; lưu lại nhật ký truy vấn
    * Chuyển hướng lỗi 3XX-5XX
    * Rewrite URL (URL rewriting) dùng regular expressions
    * Hạn chế tỷ lệ đáp ứng truy vấn
    * Giới hạn số kết nối đồng thời hoặc truy vấn từ 1 địa chỉ
    * Khả năng nhúng mã PERL
    * Hỗ trợ và tương thích với IPv6
    * Hỗ trợ WebSockets
    * Hỗ trợ truyền tải file FLV và MP4


# PHP-FPM

* Là chương trình có chức năng phiên dịch PHP khi chạy trang web cho web server. **PHP-FPM** được hình thành dựa trên sự mở rộng của CGI và hiện đang được đông đảo người dùng lựa chọn. **PHP-FPM** có chức năng tối ưu quá trình xử lý thông tin của các máy chủ web, hỗ trợ việc xử lý thông tin từ nhiều trang web trong cùng một khoảng thời gian một cách nhanh nhất.

# nginx và php-fpm

* Nginx là một server web có hiệu suất cùng với tính sẵn sàng và khả năng mở rộng cao. Nginx được cấu tạo theo kiến trúc trước đơn luồng, không đồng bộ được điều khiển theo dạng modul, nó có quy mô cực kỳ tốt và ổn định trên các hệ thống đa xử lý và phần cứng máy chủ chung. Do đó sự kết hợp giữa PHP-FPM và Nginx có thể gọi là “Cặp đôi vàng” bởi sự kết hợp vô cùng hoàn hảo. Cặp đôi vàng này chứng minh sự đúng đắn khi kết hợp bằng cách thể hiện về hiệu suất tải một cách ấn tượng, mức tiêu thụ tài nguyên giảm đáng kể và sự ổn định của server.

* Khi Nginx kết hợp với PHP-FPM, bộ nhớ sẽ được tối ưu hóa hiệu suất, nhờ vào cấu trúc không đồng bộ của Nginx mà các sự kiện có thể lan rộng.

* Khi sử dụng PHP-FPM, PHP sẽ hoạt động độc lập như một dịch vụ riêng biệt qua cổng TCP/IP bằng cách thông dịch ngôn ngữ dựa vào phiên bản PHP. Lúc này Nginx chỉ tập trung xử lý các request HTTP là chủ yếu. Khi đưa sự độc lập và song song như vậy để làm phương pháp quản lý và vận hành sẽ giúp mang lại hiệu suất cao hơn đồng thời sẽ rút ngắn được thời gian thực thi hơn.


# ngnix vs apache

## Hiệu suất

* **web tĩnh:**

    * Nginx nhanh hơn 2,5 lần Apache dựa trên một thử nghiệm kiểm chuẩn chạy tới 1000 kết nối đồng thời.
    * Trong một thử nghiệm khác với 512 kết nối đồng thời, Nginx nhanh hơn khoảng 2 lần và và tiêu thụ ít bộ nhớ hơn (4%).

* **web động:**

    * Apache có khả năng xử lý các nội dung động bằng cách nhúng bộ xử lý của ngôn ngữ vào mỗi phiên bản Worker của nó. Trong đó, bộ xử lý hoạt động dựa trên các mô đun có thể tải động. Điều này cho phép Apache có thể thực thi các nội dung động trong Web Server trực tiếp mà không cần dựa vào các yếu tố bên ngoài.
    * NGINX không giống như Apache, để xử lý PHP và các yêu cầu khác của nội dung động thì nó phải sử dụng bộ xử lý bên ngoài hỗ trợ thực thi và gửi các nội dung đã được kết xuất. Bởi vì trình thông dịch không được nhúng trong Worker Process nên chi phí của nó sẽ chỉ hiển thị cho nội dung động.

## Hệ điều hành hỗ trợ

* Apache hoạt động trên tất cả các loại hệ thống Unix-like (Linux hoặc BSD) và hỗ trợ đầy đủ cho Microsoft Windows.

* Ngnix cũng chạy trên một vài hệ thống trong số chúng và cũng hỗ trợ Window tuy nhiên hiệu suất không được mạnh bằng.

## Bảo mật

* Nginx và Apache đều rất coi trọng tính bảo mật trên trang web của mình. Không có hệ thống mạnh mẽ nào mà lại không có những biện pháp đối phó với các cuộc tấn công DDoS, phần mềm độc hại và phishing. Cả hai máy chủ này định kỳ phát hành báo cáo bảo mật và những tư vấn, đảm bảo rằng khía cạnh bảo mật được tăng cường ở mọi cấp độ.

## Kết luận

* Apache xuất sắc hơn xét về tính linh hoạt, đặc biệt đối với shared hosting user. Tệp .htaccess của Apache và các mô-đun động chắc chắn sẽ phù hợp hơn, trong khi Nginx sẽ tốt hơn cho VPS và dedicated hosting.