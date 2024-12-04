<?php

function getConn(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "crud_img";

    $conn = new mysqli($servername, $username, $password, $database);

    return $conn;
}


function getAll()
{

    $sql = "select * from img";

    $result = mysqli_query(getConn(), $sql);

    $news = [];

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $news[] = $row;
        }
    }
    return $news;
}

function add($name , $desc , $img){
    $sql = "INSERT INTO img(name , description , img) values('$name' , '$desc' , '$img')";
    $result = mysqli_query(getConn(), $sql);
    if($result){
        echo "ok";
    }
    else {
        echo "no";
    }
}

function edit($id , $name , $desc , $img) {
    $sql = "UPDATE img SET name = '$name', description = '$desc', img = '$img' WHERE id = $id";

    $result = mysqli_query(getConn() , $sql);
    if($result){
        echo "ok";
    }
    else {
        echo "no";
    }
}


function delete($id) {
    $conn = getConn();

    $stmtSelect = $conn->prepare("SELECT img FROM img WHERE id = ?");
    $stmtSelect->bind_param("i", $id);
    $stmtSelect->execute();
    $result = $stmtSelect->get_result();

    if ($row = $result->fetch_assoc()) {
        $imagePath = $row['img'];

        // Xóa file ảnh nếu tồn tại
        if (file_exists($imagePath)) {
            if (!unlink($imagePath)) {
                echo "Lỗi: Không thể xóa file ảnh!";
            }
        }
    }
    $stmtSelect->close();

    // Xóa bản ghi khỏi cơ sở dữ liệu
    $stmtDelete = $conn->prepare("DELETE FROM img WHERE id = ?");
    $stmtDelete->bind_param("i", $id);

    if ($stmtDelete->execute()) {
        echo "Xóa thành công!";
    } else {
        echo "Lỗi khi xóa: " . $stmtDelete->error;
    }

    $stmtDelete->close();
}





