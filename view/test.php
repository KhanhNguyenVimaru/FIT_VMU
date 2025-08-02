<?php
$input = "123456";
$hash = '$2y$10$TDPi0ppykWyUZk2sZkYZ5O7EuXINZ53ka1Ya1G/2DKIUIpRRI5M/y';

if (password_verify($input, $hash)) {
    echo "✅ Đúng mật khẩu";
} else {
    echo "❌ Sai mật khẩu";
}
?>