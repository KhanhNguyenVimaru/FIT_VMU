<?php
include '../database/connect_db.php'     // kết nối database ở đấy, địa chỉ nằm ở ngoài folder thêm ../
// nếu 2 cấp thì ta sẽ viết là ../../ 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khoa Công nghệ thông tin - Trường Đại học Hàng hải Việt Nam</title>
    <link rel="icon" type="image/x-icon" href="component/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">


</head>
<style>
    #call-modal-signin,
    #reset-list-btn,
    #filter-list-btn {
        font-size: 14px;
        height: 30px;
        font-family: 'Roboto', sans-serif;
    }

    .action-btn {
        font-size: 14px;
        margin-left: 10px;
        transition: all 0.3s ease;
    }

    .action-btn:hover {
        opacity: 0.8;
        transform: scale(1.05);
    }

    /* Optional: hover icon color change */
    .action-btn i {
        transition: color 0.3s ease;
    }

    .btn-danger:hover i {
        color: #fff5f5;
    }

    .btn-info:hover i {
        color: #e0f7ff;
    }
    td {
        padding-top: 4px !important;
        padding-bottom: 4px !important;
        vertical-align: middle !important;
    }
</style>

</style>

<body style="font-family: 'Roboto', sans-serif; font-size: 14px;">
    <?php include 'component/manage_header.php'; ?>
    <!-- DIV QUẢN LÝ -->
    <div class="container" style="min-height: 90vh;">
        <div id="database-handle" style="display: flex;">
            <span style="font-weight: bold; color:rgb(106, 106, 106)">DANH SÁCH TÀI KHOẢN</span>
            <div style="margin-left: auto;">
                <button type="button" class="btn btn-outline-secondary" id="call-modal-signin" style="font-size: 14px;margin-left: 10px;">
                    <i class="bi bi-person-plus"></i>
                </button>
                <button type="button" class="btn btn-outline-secondary" id="reset-list-btn" style="font-size: 14px;margin-left: 10px;">
                    <i class="bi bi-arrow-clockwise"></i>
                </button>
                <button type="button" class="btn btn-outline-secondary" id="filter-list-btn" style="font-size: 14px;margin-left: 10px;">
                    <i class="bi bi-filter"></i>
                </button>
            </div>
        </div>
        <table class="table table-hover" style="margin-top: 12px;">
            <thead>
                <tr>
                    <th style="width: 15%;">Mã sinh viên</th>
                    <th style="width: 20%;">Họ tên</th>
                    <th style="width: 15%;">Vai trò</th>
                    <th style="width: 30%;">Email</th>
                    <th style="width: 15%;" class="text-end">Chi tiết</th>
                    <th style="width: 5%;" class="text-end">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Nguyễn Văn A</td>
                    <td>Sinh viên</td>
                    <td>vana@example.com</td>
                    <td class="text-end">
                        <button class="btn btn-outline-primary btn-sm action-btn" title="Xem chi tiết">
                            <i class="bi bi-eye"></i>
                        </button>
                    </td>
                    <td class="text-end">
                        <button class="btn btn-outline-danger btn-sm action-btn" title="Xóa">
                            <i class="bi bi-trash"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>


        <div>
            <table class="table table-hover">

            </table>
        </div>
    </div>
    <?php include 'component/footer.php'; ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</html>