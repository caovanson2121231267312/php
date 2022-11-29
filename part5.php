<?php 
	$str = "Xin chào lập trình viên, tôi là số 1";


	$explode = explode(' ', $str); // tách chuỗi str thành mảng sau mỗi khoảng trắng
	var_dump($explode);
	echo "<br>";


	echo implode(' ', array('PHP','xin','chào','các','bạn')); // chuyển chuỗi thành mảng
	echo "<br>";


	echo strlen('Cao Văn Sơn'); // đếm số ký tự trong chuỗi
	echo "<br>";


	echo str_word_count('Cao Văn Sơn');  // đếm số từ trong chuỗi
	echo "<br>";


	echo str_repeat( $str, 5);  // lặp chuỗi $str 5 lần
	echo "<br>";


	echo str_replace( 'cao', 'sơn', $str ); // thay thế cao bằng sơn trong chuỗi $str
	echo "<br>";


	echo md5('hello'); // mã hóa chuỗi thành dãy 32 ký tự
	echo "<br>";


	echo sha1('hello'); // mã hóa chuỗi thành dãy 40 ký tự
	echo "<br>";



	echo htmlentities('<b>hello</b>'); // Chuyển thẻ html trong chuỗi $str sang dạng thực thể của nó
	echo "<br>";


	echo html_entity_decode('<b>hello</b>');  // Chuyển các ký tự từ dạng thực thể sang dạng html
	echo "<br>";


	echo strpos('caosonss.com chào các bạn', 'chào'); // Xác định vị trí chuỗi $chuoi_tim trong $str
	echo "<br>";



	echo strtolower($str); // Chuyển các ký tự chuỗi $str sang dạng chữ thông thường.
	echo "<br>";


	echo strtoupper($str); // Chuyển các ký tự chuỗi $str sang dạng chữ hoa.
	echo "<br>";


?>