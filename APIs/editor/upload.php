<?php
header('Content-Type: application/json');

$uploadDir = '../../view/assets/uploads/'; // Đặt ảnh vào assets UI
if (!file_exists($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

if (!isset($_FILES['image'])) {
    echo json_encode(['success' => 0, 'message' => 'Không có ảnh']);
    exit;
}

$image = $_FILES['image'];
$filename = uniqid() . "_" . basename($image['name']);
$targetPath = $uploadDir . $filename;

if (move_uploaded_file($image['tmp_name'], $targetPath)) {
    echo json_encode([
        'success' => 1,
        'file' => [
            'url' => '/FIT_VIMARU/view/assets/uploads/' . $filename
        ]
    ]);
} else {
    echo json_encode(['success' => 0, 'message' => 'Tải ảnh thất bại']);
}
