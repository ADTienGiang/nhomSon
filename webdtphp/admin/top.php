<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Quản lý người dùng</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    
    <div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>NT SHOP</h3>
                </a>
                <!-- <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div> -->
                <div class="navbar-nav w-100">
                
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Quản lý chung</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="../qlmathang/index.php" class="dropdown-item">Quản lý mặt hàng</a>
                            <?php
                                if(isset($_SESSION["nguoidung"]) && $_SESSION["nguoidung"]["loai"]==1){
                                ?>
                                <a href="../qlnguoidung/index.php" class="dropdown-item">Quản lý người dùng</a>
                               
                            <?php } ?>
                            <a href="../qldanhmuc/index.php" class="dropdown-item">Quản lý danh mục</a>
                        </div>
                    </div>
                   
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <!-- <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form> -->
                <div class="navbar-nav align-items-center ms-auto">
                   
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                       
   
                        
                            <span class="d-none d-lg-inline-flex"><?php if(isset($_SESSION["nguoidung"])) echo $_SESSION["nguoidung"]["hoten"]; ?></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#" data-toggle="modal" data-target="#fcapnhatthongtin"><span class="glyphicon glyphicon-edit"></span> Hồ sơ cá nhân</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#fdoimatkhau"><span class="glyphicon glyphicon-wrench"></span> Đổi mật khẩu</a></li>
                            <li class="divider"></li>
                            <a href="../ktnguoidung/index.php?action=dangxuat">Thoát</a>
                        </ul>  
                    </div>
                </div>
                
            </nav>


            
<!-- Form cập nhật thông tin ng dùng-->
<div class="modal fade" id="fcapnhatthongtin" role="dialog" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Hồ sơ cá nhân</h3>
        </div>
        <div class="modal-body">
          <form method="post" enctype="multipart/form-data" action="../ktnguoidung/index.php">
            <div class="text-center">
              <img class="img-circle" src="../images/<?php if ($_SESSION["nguoidung"]["hinhanh"]==NULL) echo "user.png"; else echo $_SESSION["nguoidung"]["hinhanh"]; ?>" alt="<?php echo $_SESSION["nguoidung"]["hoten"]; ?>" width="100px">
            </div>
            <input type="hidden" name="txtid" value="<?php echo $_SESSION["nguoidung"]["id"]; ?>">
            <div class="form-group">    
            <label>Email</label>    
            <input class="form-control" type="email" name="txtemail" placeholder="Email" value="<?php echo $_SESSION["nguoidung"]["email"]; ?>" required>
            </div>
            <div class="form-group">    
            <label>Số điện thoại</label>    
            <input class="form-control" type="number" name="txtdienthoai" placeholder="Số điện thoại" value="<?php echo $_SESSION["nguoidung"]["sodienthoai"]; ?>" required>
            </div>            
            <div class="form-group">
            <label>Họ tên</label>
            <input class="form-control"  type="text" name="txthoten" placeholder="Họ tên" value="<?php echo $_SESSION["nguoidung"]["hoten"]; ?>" required></div>
            <div class="form-group">
              <label>Đổi hình đại diện</label>
              <input type="file" name="fhinh">
            </div>
            <div class="form-group">
            <input type="hidden" name="txtid" value="<?php echo $_SESSION["nguoidung"]["id"]; ?>" >
            <input type="hidden" name="action" value="capnhaths" >
            <input class="btn btn-primary"  type="submit" value="Lưu">
            <input class="btn btn-warning"  type="reset" value="Hủy"></div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        </div>
      </div>
    </div>
  </div>
<!-- Form đổi mật khẩu -->
  <div class="modal fade" id="fdoimatkhau" role="dialog">
    <div class="modal-dialog">
       <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Đổi mật khẩu</h3>
        </div>
        <div class="modal-body">

          <form method="post" name="f" action="../ktnguoidung/index.php">
            <input type="hidden" name="txtemail" value="<?php echo $_SESSION["nguoidung"]["email"]; ?>">
            <div class="form-group">  
            <label>Mật khẩu mới</label>      
            <input class="form-control" type="password" name="txtmatkhaumoi" placeholder="Mật khẩu mới" required>
            </div>
            
            <div class="form-group">
            <input type="hidden" name="action" value="doimatkhau" >
            <input class="btn btn-primary"  type="submit" value="Lưu">
            <input class="btn btn-warning"  type="reset" value="Hủy"></div>
          </form>          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        </div>
      </div>

    </div>
  </div>
  