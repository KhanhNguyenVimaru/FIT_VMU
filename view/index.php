<?php
    include '../database/connect_db.php'     // kết nối database ở đấy, địa chỉ nằm ở ngoài folder thêm ../
                                    // nếu 2 cấp thì ta sẽ viết là ../../ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khoa Công nghệ thông tin - Trường Đại học Hàng hải Việt Nam</title>
    <link rel="icon" type="image/x-icon" href="component/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <?php include 'component/header.php'; ?>
    <!-- giao diện cho container -->
     <div class="Container">
      <div class="turn">
        <button class="left">
          <ion-icon name="chevron-back-outline"></ion-icon>
        </button>
        <div class="slider-track">
          <img src="./haha/img/anh1.avif" alt="anh 1" class="img active" />
          <img src="./haha/img/anh2.avif" alt="anh 1" class="img" />
          <img src="./haha/img/anh3.avif" alt="anh 1" class="img" />
        </div>
        <div class="dot-container">
          <span class="dot active" id = "0"></span>
          <span class="dot" id="1"></span>
          <span class="dot" id = "2"></span>
        </div>

        <button class="right">
          <ion-icon name="chevron-forward-outline"></ion-icon>
        </button>
      </div>
      </div>

    <?php include 'component/footer.php'; ?>
    
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
<script >
    const sliderTrack = document.querySelector(".slider-track");
const images = document.querySelectorAll(".slider-track .img");
const nextBtn = document.querySelector(".right");
const prevBtn = document.querySelector(".left");
const dots = document.querySelectorAll(".dot");

let current = 0;

function updateSlider() {
  sliderTrack.style.transform = `translateX(-${current * 100}%)`;
      dots.forEach( i =>{
        i.classList.remove("active")
      })

      dots[current].classList.add("active");
}

nextBtn.addEventListener("click", () => {
  current = (current + 1) % images.length;
  updateSlider();

});

prevBtn.addEventListener("click", () => {
  current = (current - 1 + images.length) % images.length;
  updateSlider();
});

setInterval(() => {
  current = (current + 1) % images.length;
  updateSlider();
},10000);

dots.forEach(i=>{
  i.addEventListener("click",()=>{
    current = parseInt(i.getAttribute("id"));
    updateSlider()
  })
})
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>