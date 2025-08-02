<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Header Bootstrap</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .navbar-brand {
      font-weight: bold;
      color: rgb(41, 140, 215)  !important;
    }
    .container{
        margin-top: 35px;
        border-radius: 15px;
        min-height: 80vh;
        padding-top: 15px;
        background-color: #fff;
    }
    body{
        background-color: #e9f0f0;
    }
  </style>
</head>
<body>
 <header>
     <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom shadow-sm px-4">
    <a class="navbar-brand" href="#">HỒ SƠ ĐOÀN TRƯỜNG</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="#">Dashboard</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdownManage" role="button" data-bs-toggle="dropdown">
            Quản lý
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Quản lý 1</a></li>
            <li><a class="dropdown-item" href="#">Quản lý 2</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Hoạt động</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Thông báo</a>
        </li>
      </ul>
      <form class="d-flex me-3">
        <input class="form-control" type="search" placeholder="Search">
      </form>
      <a href="#" class="nav-link">Tài khoản</a>
    </div>
  </nav>
 </header>

 <div class="container position-relative" style="width: 100%;">
<div class="d-flex justify-content-between align-items-center mb-3">

  <h6 class="text-secondary m-0">DANH SÁCH TÀI KHOẢN</h6>


  <div class="d-flex gap-2">

    <button class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#themHocSinhModal">
      <i class="bi bi-person-plus me-2"></i>
      Thêm thành viên
    </button>

    <button class="btn btn-secondary">
      <i class="bi bi-arrow-clockwise me-1"></i>
      Reset
    </button>

    <button class="btn btn-secondary">
      <i class="bi bi-funnel me-1"></i>
      Filter
    </button>
  </div>
</div>

    <!-- ======================================= -->
    <table class="table">
  <thead>
    <tr>
      <th scope="col">MSV</th>
      <th scope="col">Họ tên</th>
      <th scope="col">Ngày Sinh</th>
      <th scope="col">Lớp</th>
      <th scope="col">Chi đoàn</th>
      <th scope="col">Điện thoại</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@fat</td>
      <td>@fat</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>John</td>
      <td>Doe</td>
      <td>@social</td>
      <td>@social</td>
      <td>@social</td>
      <td>@social</td>
    </tr>
  </tbody>
</table>
<!-- ============================== -->
<div class="position-absolute d-flex justify-content-center bottom-0 rounded-start"style ="width: 100%;">
     <div class="btn-group" role="group" aria-label="Nút điều hướng">
<button type="button" class="btn btn-outline-secondary border-end-0 p-2 " aria-label="Close" style="width: 50px; border-top-left-radius: 10px; border-bottom-left-radius: 10px;"><ion-icon name="chevron-back-outline"></ion-icon></button>
<button type="button" class="btn btn-outline-secondary border-start-0 border-end-0 p-2 " aria-label="Close" style="width: 50px">1</button>
<button type="button" class="btn btn-outline-secondary border-start-0 p-2" aria-label="Close" style="width: 50px; border-top-right-radius: 10px; border-bottom-right-radius: 10px;"><ion-icon name="chevron-forward-outline"></ion-icon></button>
</div>
</div>


 </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
<!-- Modal thêm học sinh -->
<div class="modal fade" id="themHocSinhModal" tabindex="-1" aria-labelledby="themHocSinhLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered mx-auto">
    <div class="modal-content" style ="width: 80vw; height: 80vh;">
    
      <!-- Header -->
      <div class="modal-header">
        <h5 class="modal-title" id="themHocSinhLabel">Thêm học sinh</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng"></button>
      </div>
      
      <!-- Body -->
      <div class="modal-body">
       <form>
  <div class="row">
    <!-- Cột trái -->
    <div class="col-md-4 text-start">
      <div class="mb-3">
        <label class="form-label">Mã sin viên</label>
        <input type="text" class="form-control" placeholder="Nhập tên">
      </div>
      <div class="mb-3">
        <label class="form-label">Họ tên</label>
        <input type="text" class="form-control" placeholder="Nhập lớp">
      </div>
      <div class="mb-3">
        <label class="form-label">Ngày sinh</label>
        <input type="date" class="form-control">
      </div>
      <div class="mb-3">
  <label for="gioitinh" class="form-label">Giới tính</label>
  <select class="form-select" id="gioitinh">
    <option selected>Chọn giới tính</option>
    <option value="nam">Nam</option>
    <option value="nu">Nữ</option>
    <option value="khac">Khác</option>
  </select>
</div>
    </div>

    <!-- Cột giữa -->
    <div class="col-md-4 text-start">
      
       <div class="mb-3">
  <label for="gioitinh" class="form-label">Viện/Viện</label>
  <select class="form-select" id="gioitinh">
    <option selected>Chọn khoa viện</option>
    <option value="nam">Nam</option>
    <option value="nu">Nữ</option>
    <option value="khac">Khác</option>
  </select>
</div>


  <div class="mb-3">
  <label for="gioitinh" class="form-label">Lớp</label>
  <select class="form-select" id="gioitinh">
    <option selected>Chọn Lớp</option>
    <option value="nam">Nam</option>
    <option value="nu">Nữ</option>
    <option value="khac">Khác</option>
  </select>
</div>

  <div class="mb-3">
  <label for="gioitinh" class="form-label">Liên Khóa</label>
  <select class="form-select" id="gioitinh">
    <option selected>Chọn Liên Khóa</option>
    <option value="nam">Nam</option>
    <option value="nu">Nữ</option>
    <option value="khac">Khác</option>
  </select>
</div>

  <div class="mb-3">
  <label for="gioitinh" class="form-label">Chức Vụ</label>
  <select class="form-select" id="gioitinh">
    <option selected>Chọn chức vụ</option>
    <option value="nam">Nam</option>
    <option value="nu">Nữ</option>
    <option value="khac">Khác</option>
  </select>
</div>
    </div>

    <!-- Cột phải -->
    <div class="col-md-4 text-start">
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" placeholder="Nhập email">
      </div>
      <div class="mb-3">
        <label class="form-label">Số điện thoại</label>
        <input type="text" class="form-control" placeholder="Nhập địa chỉ">
      </div>
      <div class="mb-3">
        <label class="form-label">mật khẩu</label>
        <input type="text" class="form-control" placeholder="Nhập mật khẩu">
      </div>
      <div class="mb-3">
        <label class="form-label">xác nhận mật khẩu</label>
        <input type="text" class="form-control" placeholder="xác nhận mật khẩu">
      </div>
    </div>
  </div>
</form>
      </div>
      
      <!-- Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
        <button type="button" class="btn btn-primary">Lưu</button>
      </div>
      
    </div>
  </div>
</div>
