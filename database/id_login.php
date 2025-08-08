<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');
require '../vendor/autoload.php'; // Đảm bảo đường dẫn đúng
include 'connect_db.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

try {
    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($data['id']) && !empty($data['id'])) {
        $id = $data['id'];
        $sql = "SELECT * FROM user WHERE id = ?";
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            echo json_encode(['success' => false, 'message' => 'Lỗi chuẩn bị truy vấn']);
            exit;
        }
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $email = $row['mail'];

            $mail = new PHPMailer(true);

            $code = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, 6);
            $uppDate = "UPDATE user SET code_id = '$code' WHERE id = $id";
            $conn->query($uppDate);
            
            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'nghia102162@st.vimaru.edu.vn';
                $mail->Password = 'hkkw ijnf wkwz vait'; // Thay bằng mật khẩu ứng dụng
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                $mail->setFrom('nghia102162@st.vimaru.edu.vn', 'Hệ thống đăng ký học phần');
                $mail->addAddress($email);
                $mail->isHTML(true);
                $mail->Subject = 'Mã xác nhận đăng nhập';
            
               $mail->Body = "Xin chào, mã xác nhận của bạn là: <b>{$code}</b>"; // Sửa cú pháp
                $mail->AltBody = "Xin chào, mã xác nhận của bạn là: {$code}";

                $mail->send();
                echo json_encode(['success' => true, 'message' => 'Gửi email thành công!']);
            } catch (Exception $e) {
                echo json_encode(['success' => false, 'message' => "Gửi email thất bại: {$mail->ErrorInfo}"]);
            }
        } else {
            echo json_encode(['success' => false, 'message' => 'Không tìm thấy ID.']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Không nhận được ID từ client.']);
    }
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'Lỗi server: ' . $e->getMessage()]);
}
?>