<header class="d-flex flex-column justify-content-center align-items-center py-0" id="nav-header">
    <div class="d-flex justify-content-center" style="width:100%; height:100px; background-color:white;">
        <div class="d-flex align-items-center justify-content-between" style="width:900px; height:100%">
            <div style="height: 100%" class="d-flex align-items-center">
                <img src="component/logo_vmu.png" alt="Logo Đại học Hàng Hải Việt Nam" style="width:70px; height:70px">
                <div class="d-flex justify-content-center align-items-center" style="height: 70px; margin-left:12px">
                    <div class="d-flex flex-column">
                        <span style="font-size:18px; font-family:bahnschrift; font-weight:bold; letter-spacing: 0.7px; line-height: 1.1">TRƯỜNG ĐẠI HỌC HÀNG HẢI VIỆT NAM</span>
                        <span style="font-size:18px; font-family:bahnschrift; font-weight:bold; letter-spacing: 0.7px;">KHOA CÔNG CÔNG NGHỆ THÔNG TIN</span>
                    </div>
                </div>
            </div>
            <div style="height: 100%" class="d-flex align-items-center justify-content-center">
                <div class="d-flex flex-column align-items-end gap-2">
                    <!-- 2 flag trên 1 hàng -->
                    <div class="d-flex justify-content-center gap-3">
                        <a href="#" title="Tiếng Việt">
                            <img src="https://flagcdn.com/w40/vn.png" alt="VN Flag" style="width: 28px; height: 18px;">
                        </a>
                        <a href="#" title="English" style="margin-right:12px">
                            <img src="https://flagcdn.com/w40/gb.png" alt="UK Flag" style="width: 28px; height: 18px;">
                        </a>
                    </div>

                    <!-- Ô input bên dưới -->
                    <div class="position-relative" style="width: 160px;">
                        <input type="text" class="form-control form-control-sm" placeholder="Search..." style="padding-right: 0px;">
                        <i class="bi bi-search position-absolute" style="top: 50%; right: 8px; transform: translateY(-50%);"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <ul class="nav">
        <li class="nav-item dropdown">
            <a href="#" class="nav-link">Giới thiệu <i style="font-size: 10px; color:lightgray" class="bi bi-chevron-down"></i></a>
            <ul class="dropdown-menu">
                <li><a href="#">Lịch sử</a></li>
                <li><a href="#">Cơ cấu tổ chức</a></li>
                <li><a href="#">Đội ngũ cán bộ</a></li>
                <li><a href="#">Địa chỉ</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link">Đào tạo <i style="font-size: 10px; color:lightgray" class="bi bi-chevron-down"></i></a>
            <ul class="dropdown-menu">
                <li><a href="#">Đào tạo đại học</a></li>
                <li><a href="#">Đào tạo sau đại học</a></li>
                <li><a href="#">Các bộ môn</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link">Tin tức - sự kiện <i style="font-size: 10px; color:lightgray" class="bi bi-chevron-down"></i></a>
            <ul class="dropdown-menu">
                <li><a href="#">Thông báo</a></li>
                <li><a href="#">Tin bài</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link">Sinh viên <i style="font-size: 10px; color:lightgray" class="bi bi-chevron-down"></i></a>
            <ul class="dropdown-menu">
                <li><a href="#">Học bổng</a></li>
                <li><a href="#">Thông tin tuyển dụng</a></li>
                <li><a href="#">Đoàn thanh niên</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link">Tuyển sinh <i style="font-size: 10px; color:lightgray" class="bi bi-chevron-down"></i></a>
            <ul class="dropdown-menu">
                <li><a href="#">Các ngành</a></li>
                <li><a href="#">Điểm chuẩn tham khảo</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link">Tuyển dụng <i style="font-size: 10px; color:lightgray" class="bi bi-chevron-down"></i></a>
            <ul class="dropdown-menu">
                <li><a href="#">Tuyển dụng giảng viên</a></li>
                <li><a href="#">Tuyển dụng công việc</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link">Tài liệu <i style="font-size: 10px; color:lightgray" class="bi bi-chevron-down"></i></a>
            <ul class="dropdown-menu">
                <li><a href="#">Tài liệu học tập</a></li>
                <li><a href="#">Các bài xuất sắc</a></li>
                <li><a href="#">Nghiên cứu khoa học</a></li>
            </ul>
        </li>
        <!-- <li class="nav-item dropdown">
            <a href="#" class="nav-link">Admin</a>
            <ul class="dropdown-menu">
                <li><a href="#">Đăng bài</a></li>
                <li><a href="#">Duyệt bài</a></li>
                <li><a href="#">Cập nhật cơ cấu</a></li>
                <li><a href="#">Cập nhật đội ngũ</a></li>
                <li><a href="#">Cập nhật đào tạo</a></li>
            </ul>
        </li> -->
    </ul>
</header>

<style>
    :root {
        --mainBlue: #2832c2;
        --fontGray: #6a6a6a;
        --whiteGray: #f2f3f5;
        --blackBlue: #27304D;
        --font-size: 14px;
    }

    .nav-link:hover,
    .nav-link:focus,
    .nav-link:active {
        color: white !important;
    }

    #nav-header {
        background-color: var(--blackBlue);
    }

    .nav {
        position: relative;
        list-style: none;
        padding-left: 0;
        margin: 0;
    }

    .nav li {
        padding: 0 12px;
    }

    .nav-item {
        position: relative;
    }

    .nav-link {
        color: white;
        font-family: "Times New Roman", serif;
        font-size: var(--font-size);
        padding: 8px 18px;
        display: block;
        text-decoration: none;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .nav-item:hover,
    .dropdown-menu li:hover {
        background-color: rgba(255, 255, 255, 0.1);
    }

    .nav-item:hover .nav-link,
    .dropdown-menu li:hover a {
        color: white;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        min-width: 160px;
        background-color: var(--blackBlue);
        padding: 1px 0;
        margin: 0;
        list-style: none;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        z-index: 1000;
        font-family: 'Times New Roman', Times, serif;
        font-size: 14px;
        border-radius: 4px;
        opacity: 0;
        transform: translateY(-10px);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .nav-item:hover>.dropdown-menu {
        display: block;
        opacity: 1;
        transform: translateY(0);
    }

    .dropdown-menu li a {
        color: white;
        text-decoration: none;
        padding: 8px 12px;
        display: block;
        white-space: nowrap;
        transition: background-color 0.2s ease, color 0.2s ease;
    }
</style>