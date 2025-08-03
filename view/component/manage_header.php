<header class="p-3 mb-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/FIT_VIMARU/view/manage_user.php" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <img src="component/logo/logo_vmu.png" alt="logo đại học Hàng hải" style="height: 40; width:40px">
                <span style="font-family: bahnschrift; font-weight:bold; margin-left:20px; margin-right:50px">QUẢN THÔNG TIN KHOA</span>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0" id="nav-selection">
                <li><a href="#" class="nav-link px-2 link-dark">Bài viết</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Sinh viên</a></li> 
                <li><a href="#" class="nav-link px-2 link-dark">Giảng viên</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Ngành</a></li>
            </ul>

            <div class="dropdown text-end">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    Tài khoản
                </a>
                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="font-family: 'Roboto', sans-serif; font-size: 14px;">
                    <li><a class="dropdown-item" href="#">Cài đặt</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<style>
    #nav-selection li {
        margin: 0 10px;
    }

    #nav-selection li a {
        transition: color 0.3s ease, text-decoration 0.3s ease;
    }

    #nav-selection li a:hover {
        color: #0d6efd;
        text-decoration: underline;
    }
</style>
