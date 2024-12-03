<?php
include 'dbConnect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $deleteIndex = $_POST['delete_index'] ?? null; // Lấy chỉ số cần xóa nếu có

    if ($deleteIndex !== null && is_numeric($deleteIndex)) {
        // Xóa phần tử khỏi danh sách
        delete($deleteIndex);
        }
    header('Location: index.php');

    exit();
}
?>