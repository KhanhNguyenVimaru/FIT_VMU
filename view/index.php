<?php
include '../database/connect_db.php'; // kết nối database
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Khoa Công nghệ thông tin - Trường Đại học Hàng hải Việt Nam</title>
  <link rel="icon" type="image/x-icon" href="component/favicon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="assets/carousel.css">
  <style>
    .slider-track {
      display: flex;
      transition: transform 0.5s ease-in-out;
      width: 300%; /* 3 ảnh */
    }

    .slider-track .img {
      width: 100%;
      flex-shrink: 0;
    }

    .turn {
      position: relative;
      overflow: hidden;
    }

    .left,
    .right {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      z-index: 2;
      background: rgba(0, 0, 0, 0.3);
      border: none;
      color: white;
      font-size: 1.5rem;
      padding: 0.5rem;
      cursor: pointer;
    }

    .left {
      left: 10px;
    }

    .right {
      right: 10px;
    }

    .dot-container {
      text-align: center;
      margin-top: 10px;
    }

    .dot {
      height: 10px;
      width: 10px;
      margin: 0 5px;
      display: inline-block;
      background-color: #bbb;
      border-radius: 50%;
      cursor: pointer;
    }

    .dot.active {
      background-color: #717171;
    }
  </style>
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
        <img src="component/img/carousel1.png" alt="anh 1" class="img active" />
        <img src="component/img/carousel2.jpg" alt="anh 2" class="img" />
        <img src="component/img/sheet3.png" data-gif="component/img/carousel3.gif" alt="anh 3" class="img" />
      </div>

      <div class="dot-container">
        <span class="dot active" id="0"></span>
        <span class="dot" id="1"></span>
        <span class="dot" id="2"></span>
      </div>

      <button class="right">
        <ion-icon name="chevron-forward-outline"></ion-icon>
      </button>
    </div>
  </div>

  <?php include 'component/footer.php'; ?>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
<script>
  const sliderTrack = document.querySelector(".slider-track");
  const images = document.querySelectorAll(".slider-track .img");
  const nextBtn = document.querySelector(".right");
  const prevBtn = document.querySelector(".left");
  const dots = document.querySelectorAll(".dot");

  let current = 0;

  function updateSlider() {
    sliderTrack.style.transform = `translateX(-${current * 100}%)`;
    dots.forEach(dot => dot.classList.remove("active"));
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

  dots.forEach(dot => {
    dot.addEventListener("click", () => {
      current = parseInt(dot.getAttribute("id"));
      updateSlider();
    });
  });

  // Hover đổi ảnh cho ảnh thứ 3 (index = 2)
  const thirdImg = images[2];
  const staticSrc = thirdImg.getAttribute('src');
  const gifSrc = thirdImg.getAttribute('data-gif');

  thirdImg.addEventListener('mouseenter', () => {
    thirdImg.src = gifSrc;
  });

  thirdImg.addEventListener('mouseleave', () => {
    thirdImg.src = staticSrc;
  });
</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>
