<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');
include 'connect_db.php';



$data = json_decode(file_get_contents('php://input'), true);

if(isset($data['password'] , $data['id'])
    && !empty($data['password'])
    && !empty($data['id'])){
        $password = $data['password'];
        $id = $data['id'];

        $password = password_hash($data['password'], PASSWORD_DEFAULT);
       $sql = "UPDATE user SET password = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $password, $id);
       
        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'message' => 'Đổi mật khẩu thành công!']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Thực thi truy vấn thất bại!']);
        }


    }else {
        echo json_encode(['success' => false, 'message' => 'Nhập code đầy đủ']);
    }
?>