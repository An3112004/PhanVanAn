<?php
include 'dbConnect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $editIndex = $_POST['edit_index'] ?? null; // Lấy chỉ số cần sửa nếu có
    $name = trim($_POST['name'] ?? '');
    $description = trim($_POST['description'] ?? '');

    if ($editIndex !== null) {
        $editIndex = (int) $editIndex;
        $old_image = $_POST['old_image']; // Đường dẫn ảnh cũ

        $image = $old_image; // Mặc định giữ lại ảnh cũ nếu không tải ảnh mới

        if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] === 0) {
            $fileName = $_FILES['fileToUpload']['name'];
            $fileTmpName = $_FILES['fileToUpload']['tmp_name'];
            $fileSize = $_FILES['fileToUpload']['size'];

            // Lấy phần mở rộng của file
            $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
            $listImgExt = array('jpg', 'jpeg', 'png', 'gif');

            if (in_array($fileExt, $listImgExt)) {
                if ($fileSize < 5000000) { // Giới hạn 5MB
                    $fileNameNew = uniqid('', true) . "." . $fileExt;
                    $fileDestination = __DIR__ . '/assets/images/' . $fileNameNew;

                    // Di chuyển file tải lên
                    if (move_uploaded_file($fileTmpName, $fileDestination)) {
                        $image = './assets/images/' . $fileNameNew;

                        // Xóa ảnh cũ nếu ảnh mới tải lên thành công
                        if (file_exists($old_image)) {
                            unlink($old_image);
                        }
                    } else {
                        echo "Lỗi khi di chuyển file!";
                    }
                } else {
                    echo "File quá lớn (giới hạn 5MB)";
                }
            } else {
                echo "Định dạng file không hợp lệ";
            }
        }

        // Cập nhật dữ liệu trong cơ sở dữ liệu
        edit($editIndex, $name, $description, $image);
    }

    header('Location: index.php');
    exit();
}