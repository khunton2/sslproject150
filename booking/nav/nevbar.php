

 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <!-- <i class="fas fa-laugh-wink"></i> -->
    </div>
    <!-- <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div> -->
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="index.php">
        <i class="fa-solid fa-house"></i>
        <span>หน้าหลัก</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">


<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="booking_ed.php">
        <i class="fa-solid fa-truck-fast"></i>
        <span>จองรถ</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="#">
        <i class="fa-solid fa-money-check-dollar"></i>
        <span>ตรวจสอบราคา</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="check_status.php">
        <i class="fa-solid fa-magnifying-glass"></i>
        <span>ตรวจสอบสถานะ</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="history.php">
        <i class="fa-solid fa-clock-rotate-left"></i>
        <span>ประวัติการขนส่ง</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>



        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php $_SESSION['com_name']?></span><i
                        class="fa-solid fa-chevron-down"></i>
                    <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                    
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        โปรไฟล์
                    </a>
                    <a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                        aria-controls="offcanvasRight">
                        <i class="fas fa-bell fa-sm fa-fw mr-2 text-gray-400"></i>
                        แจ้งเตือน
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa-solid fa-headset fa-sm fa-fw mr-2 text-gray-400"></i>
                        ศูนย์ช่วยเหลือ
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        ออกจากระบบ
                    </a>
                </div>
            </li>

        </ul>

    </nav>
    <!-- End of Topbar -->