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
          <input type="text" class="mk" id="mk" required />
          <label for="mk">Nhập mật khẩu mới</label>
        </div>

        <div class="login">
          <input type="password" class="password" id="password" required />
          <label for="password">Nhập Lại mật khẩu</label>
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
  const mk = document.querySelector(".mk").value.trim();
  const password = document.querySelector(".password").value.trim();
  const urlParams = new URLSearchParams(window.location.search);
  const id = urlParams.get('id');

  if(mk !== password || mk.length < 6){
    alert("mật khẩu phải có ít nhất 6 kí tự và khớp nhău")
    document.querySelector(".mk").value = "";
    document.querySelector(".password").value = "";
    return;

  }
  
  const StudentData = {
    id: id,
    password: password
  };

  fetch("../database/new_mk.php", {
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
        window.location.href = "login.php"; 
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
