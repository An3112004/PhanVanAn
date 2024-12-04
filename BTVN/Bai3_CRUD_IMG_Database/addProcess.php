<?php
include 'dbConnect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $description = trim($_POST['description'] ?? '');

    // var_dump($file);

        $fileName = $_FILES['fileToUpload']['name'];
        $fileType = $_FILES['fileToUpload']['type'];
        $fileTmpName = $_FILES['fileToUpload']['tmp_name'];
        $fileError = $_FILES['fileToUpload']['error'];
        $fileSize = $_FILES['fileToUpload']['size'];

        // cắt đuôi file
        $fileExt = explode('.', $fileName);
        $fileActuaExt = strtolower(end($fileExt));

        //echo $fileActuaExt;

        $listImgExt = array('jpg', 'jpeg', 'png', 'pdf', 'gif');

        if (in_array($fileActuaExt, $listImgExt)) {
            if ($fileError === 0) {
                if ($fileSize < 5000000) {
                    $fileNameNew = uniqid('', true) . "." . $fileActuaExt;
                    $fileDestination = './assets/images/' . $fileNameNew;
                    if (move_uploaded_file($fileTmpName, $fileDestination)) {
                        echo "File đã được tải lên: $fileDestination";
                    } else {
                        echo "Lỗi khi lưu file.";
                    }
                } else {
                    echo "loi";
                }
            } else {
                echo "loi";
            }
        } else {
            echo "loi";
        }
        add($name , $description , $fileDestination);
    }

    // Hủy toàn bộ session
    //session_unset(); // Xóa tất cả các biến trong session
    //session_destroy(); // Hủy session
    header('Location: index.php');

    exit();
