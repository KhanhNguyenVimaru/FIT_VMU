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
</head>
<body>
    <?php include 'component/header.php'; ?>
    <div class="container" style="height: 90vh;"></div>
    <!-- giao diện cho container -->
    <?php include 'component/footer.php'; ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</html>