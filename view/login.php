<?php 
include '../database/connect_db.php'     // kết nối database ở đấy, địa chỉ nằm ở ngoài folder thêm ../
                                    // nếu 2 cấp thì ta sẽ viết là ../../ 
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/login.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="container-login">
      <form action="" class="from">
        <div class="img">
          <img src="component/logo/logo_vmu.png" alt="logo" />
        </div>

        <div class="text">
          <h2>TRƯỜNG ĐẠI HỌC HÀNG HẢI VIỆT NAM</h2>
          <h3>Hệ thống đăng kí học phần sinh viên</h3>
        </div>

        <div class="login login-top">
          <input type="text" class="id" id="id" required />
          <label for="id">id</label>
        </div>

        <div class="login">
          <input type="password" class="password" id="password" required />
          <label for="password">password</label>
        </div>
        <div class="button">
          <button type="button" class ="button-btn">Đăng nhập</button>
        </div>

        <h3 class="text-bottom">
          Quên mật khẩu, thực hiện <a href="id_login.php">tại đây</a>
        </h3>
      </form>
    </div>
    <script>
      const btn = document.querySelector(".button-btn");
btn.addEventListener("click", () => {
  const id = document.querySelector(".id").value.trim();
  const password = document.querySelector(".password").value.trim();

  const StudentData = {
    id: id,
    password: password,
  };

  fetch("../database/Login.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(StudentData),
  })
    .then((res) => res.json())
    .then((data) => {
      alert(data.message);
      if (data.success) {
        window.location.href = "index.php"; 
      }
    })
    .catch((err) => {
      alert("Lỗi khi gửi yêu cầu!");
      console.error(err);
    });
});
// ========================================
    </script>
  </body>
</html>
