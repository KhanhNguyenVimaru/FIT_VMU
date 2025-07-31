<!-- Google Fonts: Roboto -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

<div class="footer" style="width:100%; background-color: var(--blackBlue); color: var(--whiteGray); padding: 4rem 0; font-size: var(--font-size); font-family:'Roboto', sans-serif;">
    <div class="container">
        <div class="row gy-4">
            <div class="col-sm-3">
                <span style="font-size: 14px; font-weight: bold; color: white; display: block; margin-bottom: 1rem; text-transform: uppercase; letter-spacing: 1px; font-family:'Roboto', sans-serif;">
                    Các đơn vị
                </span>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-decoration-none text-light hover-link">Bộ môn Truyền thông & MMT</a></li>
                    <li><a href="#" class="text-decoration-none text-light hover-link">Bộ môn khoa học máy tính</a></li>
                    <li><a href="#" class="text-decoration-none text-light hover-link">Bộ môn Hệ thống thông tin</a></li>
                    <li><a href="#" class="text-decoration-none text-light hover-link">Bộ môn Kỹ thuật máy tính</a></li>
                    <li><a href="#" class="text-decoration-none text-light hover-link">Bộ môn Tin học đại cương</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <span style="font-size: 14px; font-weight: bold; color: white; display: block; margin-bottom: 1rem; text-transform: uppercase; letter-spacing: 1px; font-family:'Roboto', sans-serif;">
                    Chương trình đào tạo
                </span>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-decoration-none text-light hover-link">Đào tạo đại học</a></li>
                    <li><a href="#" class="text-decoration-none text-light hover-link">Đào tạo sau đại học</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <span style="font-size: 14px; font-weight: bold; color: white; display: block; margin-bottom: 1rem; text-transform: uppercase; letter-spacing: 1px; font-family:'Roboto', sans-serif;">
                    Tin tức - Sự kiện
                </span>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-decoration-none text-light hover-link">Giới thiệu</a></li>
                    <li><a href="#" class="text-decoration-none text-light hover-link">Tin tức</a></li>
                    <li><a href="#" class="text-decoration-none text-light hover-link">Thông báo</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <ul class="list-unstyled">
                    <span style="font-size: 14px; font-weight: bold; color: white; display: block; margin-bottom: 1rem; text-transform: uppercase; letter-spacing: 1px; font-family:'Roboto', sans-serif;">
                        KHOA CÔNG NGHỆ THÔNG TIN
                    </span>
                    <li><a href="#" class="text-decoration-none text-light hover-link">Ngành công nghệ thông tin</a></li>
                    <li><a href="#" class="text-decoration-none text-light hover-link">Ngành công nghệ phần mềm</a></li>
                    <li><a href="#" class="text-decoration-none text-light hover-link">Ngành kỹ thuật truyền thông & MMT</a></li>
                </ul>
            </div>
        </div>
        <hr style="width:100%; color:#f2f3f5">
        <div style="width: 100%; display:flex; justify-content:space-between; padding-right:30px">
            <div class="col-12 text-start">
                <div>
                    <p class="mb-2" style="font-family:'Roboto', sans-serif;">© 2025 Khoa Công nghệ Thông tin, Trường Đại học Hàng hải Việt Nam</p>
                    <p class="mb-2" style="font-family:'Roboto', sans-serif;">Địa chỉ: Tầng 2 4 nhà A4, Số 484 Lạch Tray, Lê Chân, Hải Phòng</p>
                </div>
            </div>
            <a href="">
                <i style="font-size: 28px; color:white" class="bi bi-facebook"></i>
            </a>
        </div>
    </div>
</div>

<style>
    :root {
        --mainBlue: #2832c2;
        --mainBlueLight: #1976d2;
        --fontGray: #6a6a6a;
        --whiteGray: #f2f3f5;
        --blackBlue: #27304D;
        --font-size: 14px;
    }
    .footer {
        background-color: var(--blackBlue);
        color: var(--whiteGray);
        box-shadow: 0 -2px 12px rgba(40,50,194,0.08);
        line-height: 1.6;
        font-family: 'Roboto', sans-serif;
    }
    .footer span {
        color: var(--mainBlueLight);
        font-weight: bold;
        letter-spacing: 1px;
        border-bottom: 2px solid #fff;
        padding-bottom: 4px;
        margin-bottom: 1rem;
        display: inline-block;
        background: none;
    }
    .footer ul li {
        margin-bottom: 0.5rem;
    }
    .footer a.hover-link {
        color: var(--whiteGray);
        transition: color 0.3s, background 0.3s, padding-left 0.3s;
        font-family: 'Roboto', sans-serif;
        border-radius: 4px;
        padding: 2px 8px 2px 0;
        display: inline-block;
    }
    .footer a.hover-link:hover {
        color: #fff;
        background: var(--mainBlueLight);
        padding-left: 12px;
    }
    .footer .bi-facebook {
        transition: color 0.3s;
    }
    .footer .bi-facebook:hover {
        color: var(--mainBlueLight);
    }
    @media (max-width: 576px) {
        .footer {
            padding: 2rem 0;
            font-size: calc(var(--font-size) - 2px);
        }
        .footer .col-sm-3 {
            text-align: center;
        }
        .footer .col-12 {
            text-align: center;
        }
    }
</style>