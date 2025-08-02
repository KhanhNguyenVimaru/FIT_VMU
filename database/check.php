<?php 

include 'connect_db.php';    // kết nối database ở đấy, địa chỉ nằm ở ngoài folder thêm ../                                 
//  // nếu 2 cấp thì ta sẽ viết là ../../ 

$id = 9;
$name = "Test User";
$email = "test@vmu.edu.vn";
$role = "student";
$admin_role = 0;
$password_plain = "1"; // mật khẩu đơn giản
$password_hash = password_hash($password_plain, PASSWORD_DEFAULT);

// SQL thêm user mới
$sql = "INSERT INTO user (id, name, mail, role, admin_role, password)
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("isssis", $id, $name, $email, $role, $admin_role, $password_hash);

if ($stmt->execute()) {
    echo "✅ Tạo tài khoản thành công với mật khẩu: $password_plain";
} else {
    echo "❌ Lỗi khi tạo tài khoản: " . $stmt->error;
}

$conn->close();

?> 