<?php
    $servername = "localhost";
    $database = "php";
    $username = "root";
    $password = "12345678";
    $conn = mysqli_connect($servername, $username, $password, $database);
    mysqli_set_charset($conn, 'UTF8');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    //mysqli_close($conn);mysqli_error($conn)
    function execute($sql,$conn) {
        mysqli_query($conn,$sql);
    }
    function executeResult($sql,$conn) {
        $result = mysqli_query($conn,$sql);
        $data   = [];
        if ($result != null) {
            while ($row = mysqli_fetch_array($result, 1)) {
                $data[] = $row;
            }
        }
        return $data;
    };
    function executeSingleResult($sql,$conn) {
        $result = mysqli_query($conn,$sql);
        $row    = null;
        if ($result != null) {
            $row = mysqli_fetch_array($result, 1);
        }
        return $row;
    };
?>