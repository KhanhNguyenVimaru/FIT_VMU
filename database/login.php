<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);
header('Content-Type: application/json');
include 'connect_db.php';    // kết nối database ở đấy, địa chỉ nằm ở ngoài folder thêm ../                                 
//  // nếu 2 cấp thì ta sẽ viết là ../../ 
$data = json_decode(file_get_contents('php://input'), true);
if (isset($data['id'] , $data['password'] ) &&
    !empty($data['id']) &&
    !empty($data['password'])){
        $id = $data['id'];
        $password = $data['password'];
    
     $sql = "SELECT * FROM user WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
      $row = $result->fetch_assoc();
      
      if (password_verify($password, $row['password'])){
        echo json_encode([
                'success' => true,
                'message' => 'Đăng nhập thành công!'
            ]);
      } else {
            echo json_encode([
                'success' => false,
                'message' => 'Sai mật khẩu!'
            ]);
        }
    } else {
        echo json_encode([
            'success'=> false,
            'message'=> 'tài khoản mk không đúng'
        ]);
}
    
}else {
    echo json_encode([
        'success' => false,
        'message' => 'Thiếu thông tin đầu vào!'
    ]);
}
$conn->close();
?> 