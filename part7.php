<?php 
	$file = fopen("hello.txt", "r");

	// Kiểm tra file mở thành công không
	if (!$file) {
	    echo "không thể mở file";
	} else {
	    // Lặp qua từng ký tự để đọc
	    while(!feof($file)) {
	        echo fgetc($file);
	    }
	}


	if (!$file) {
    	echo "không thể mở file";
	} else {
	    // Đọc file và trả về nội dung
	    $data = fread($file, filesize('hello.txt'));
	    echo $data;
	}


	$fp = fopen('hello.txt', "w");
  
	if (!$fp) {
	    echo "không thể mở file";
	} else {
	    $data = 'cao văn sơn';
	    // Ghi file
	    fwrite($fp, $data);
	}


	// Kiểm tra file có tồn tại không
	if (file_exists('hello.txt')) {
	    echo 'File exists';
	}

	// đổi tên file
	rename('PHP.txt', 'PHP_new.txt');

	// xóa file
	unlink('PHP.txt');
?>