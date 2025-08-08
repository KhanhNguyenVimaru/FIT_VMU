<?php 
include '../database/connect_db.php';     // kết nối database ở đấy, địa chỉ nằm ở ngoài folder thêm ../
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
          <input type="text" class="code" id="code" required />
          <label for="code">code</label>
        </div>

        <div class="button">
          <button type="button" class ="button-btn">Nhập code</button>
        </div>
      </form>
    </div>
    <script>
  const btn  = document.querySelector(".button-btn");
  btn.addEventListener("click", ()=>{
  const code = document.querySelector(".code").value.trim();
  const urlParams = new URLSearchParams(window.location.search);
  const id = urlParams.get('id');
    const id_Student = {
        code : code,
        id:id
    };
    fetch("../database/code_login.php",{
        method : "POST",
        headers: {
      "Content-Type": "application/json",
    },
    body:JSON.stringify(id_Student),
    })
    .then((res) => res.json())
    .then((data) =>{
        alert(data.message);
        if(data.success){
            window.location.href = "new_pass.php?id=" + id;
        }
    })
    .catch((err) =>{
        alert("Lỗi khi gửi yêu cầu");
        console.error(err);
    });
  });
  
    </script>
  </body>
</html>
  