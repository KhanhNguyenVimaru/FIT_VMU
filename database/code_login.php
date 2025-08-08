<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');
include 'connect_db.php';



$data = json_decode(file_get_contents('php://input'), true);

if(isset($data['code'] , $data['id'])
    && !empty($data['code'])
    && !empty($data['id'])){

        $id = $data['id'];
        $code = $data['code'];

        $sql = "SELECT * FROM user WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id); 
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        $codee = $row['code_id'];

        if($code === $codee){
            echo json_encode(['success' => true, 'message' => 'Nhập mã thành công!']);
        } else{
           echo json_encode(['success' => false, 'message' => 'Nhập mã thất bại!']);
        }
    }else {
        echo json_encode(['success' => false, 'message' => 'Nhập code đầy đủ']);
    }
?>