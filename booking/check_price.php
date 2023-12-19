<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Booking SSL</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <!-- Include Bootstrap JS and dependencies -->

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php require_once 'nav/nevbar.php' ?>

        <div class="container-fluid">
            <div class="card">
                <div class="card-body">

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="check-tab" data-bs-toggle="tab"
                                data-bs-target="#check-tab-pane" type="button" role="tab" aria-controls="check-tab-pane"
                                aria-selected="true">เช็คราคา</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile-tab-pane" type="button" role="tab"
                                aria-controls="profile-tab-pane" aria-selected="false">สอบถามราคาบริษัท</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#contact-tab-pane" type="button" role="tab"
                                aria-controls="contact-tab-pane" aria-selected="false">ตรวจสอบราคา</button>
                        </li>

                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <br>
                        <div class="tab-pane fade show active" id="check-tab-pane" role="tabpanel"
                            aria-labelledby="check-tab" tabindex="0"><h5>คำนวนราคาขนส่ง</h5>
                            <br>

                            <div class="container d-flex justify-content-center align-items-center">
                                
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row g-3 align-items-center">

                                            <div class="col-auto">
                                                <span>เลือกต้นทาง</span>
                                                <input type="text" id="inputPassword6" class="form-control"
                                                    aria-describedby="passwordHelpInline">
                                            </div>
                                            <div class="col-auto"> <i class="fa-solid fa-arrow-right"></i></div>
                                           
                                            <div class="col-auto">
                                                <span>เลือกปลายทาง</span>
                                                <input type="text" id="inputPassword6" class="form-control"
                                                    aria-describedby="passwordHelpInline">
                                            </div>
                                        </div>
                                        <div class="row g-3 align-items-center">
                                            <div class="col-auto">
                                                <span>ระยะทาง</span>
                                                <input type="text" id="inputPassword6" class="form-control"
                                                    aria-describedby="passwordHelpInline">
                                            </div>        
                                        </div> 
                                        <div class="row g-2 align-items-center">
                                            <div class="col-auto">
                                                <span>ประเภทรถ</span>
                                                <input type="text" id="inputPassword6" class="form-control"
                                                    aria-describedby="passwordHelpInline">
                                            </div>  
                                            <div class="col-auto">
                                            <img src="img/SSLCar.png" alt="" class="img-fluid">
                                            </div>      
                                        </div> 
                                        <div class="row g-3 align-items-center">
                                            <div class="col-auto">
                                                <span>น้ำหนักรวม</span>
                                                <input type="text" id="inputPassword6" class="form-control"
                                                    aria-describedby="passwordHelpInline">
                                            </div>        
                                        </div>  
                                    </div>
                                </div>
                            </div>

                        </div>
                        <br><br>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                            tabindex="0">..</div>
                        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                            tabindex="0">



                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true">เส้นทางในประเทศ</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">เส้นทางนอกประเทศ</button>

                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab" tabindex="0">
                                    <br>
                                    <div class="card">
                                        <div class="card-body">


                                            <table id="myTable" class="table table-striped" style="width: 100%;">
                                                <thead>
                                                    <tr>

                                                        <th></th>
                                                        <th>จุดรับสินค้า</th>
                                                        <th>จุดส่งสินค้า</th>
                                                        <th>สินค้า</th>
                                                        <th>ประเภทรถ</th>
                                                        <th>น้ำหนัก(ตัน)</th>
                                                        <th>ระยะทาง</th>
                                                        <th>ราคาน้ำมัน</th>
                                                        <th>ผู้ช่วยคนขับ</th>
                                                        <th>สรุปราคา</th>
                                                        <th></th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                        <td>ใหม่</td>
                                                        <td>จุดรับสินค้า</td>
                                                        <td>จุดส่งสินค้า</td>
                                                        <td>สินค้า</td>
                                                        <td>4ล้อ</td>
                                                        <td>น้ำหนัก(ตัน)</td>
                                                        <td>200 km</td>
                                                        <td>D 36.00</td>
                                                        <td>ไม่ต้องการ</td>
                                                        <td>10,000 </td>
                                                        <td><button class="btn btn-info">จอง</button></td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                                    aria-controls="panelsStayOpen-collapseOne">
                                                    SSL Logistics
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseOne"
                                                class="accordion-collapse collapse show">
                                                <div class="accordion-body">
                                                    <table id="myTable" class="table table-striped"
                                                        style="width: 100%;">
                                                        <thead>
                                                            <tr>

                                                                <th></th>
                                                                <th>จุดรับสินค้า</th>
                                                                <th>จุดส่งสินค้า</th>
                                                                <th>สินค้า</th>
                                                                <th>ประเภทรถ</th>
                                                                <th>น้ำหนัก(ตัน)</th>
                                                                <th>ระยะทาง</th>
                                                                <th>ราคาน้ำมัน</th>
                                                                <th>ผู้ช่วยคนขับ</th>
                                                                <th>สรุปราคา</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>

                                                                <td>ใหม่</td>
                                                                <td>จุดรับสินค้า</td>
                                                                <td>จุดส่งสินค้า</td>
                                                                <td>สินค้า</td>
                                                                <td>4ล้อ</td>
                                                                <td>น้ำหนัก(ตัน)</td>
                                                                <td>200 km</td>
                                                                <td>D 36.00</td>
                                                                <td>ไม่ต้องการ</td>
                                                                <td>10,000 </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                                    aria-controls="panelsStayOpen-collapseTwo">
                                                    2
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    ..
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                                    aria-controls="panelsStayOpen-collapseThree">
                                                    3
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    ..
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!----นอกประเทศ---->
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab" tabindex="0">

                                    <br>
                                    <div class="card">
                                        <div class="card-body">

                                            <table id="myTable" class="table table-striped" style="width: 100%;">
                                                <thead>
                                                    <tr>

                                                        <th></th>
                                                        <th>ประเภทขนส่ง</th>
                                                        <th>จุดรับตู้สินค้า/ตู้เปล่า</th>
                                                        <th>จุดส่งสินค้า/ขึ้นสินค้า</th>
                                                        <th>จุดส่งตู้เปล่า/ตู้สินค้า</th>
                                                        <th>ความจุ</th>
                                                        <th>ขนาดตู้</th>
                                                        <th>จำนวนตู้</th>
                                                        <th>ราคาน้ำมัน</th>
                                                        <th>สรุปราคา</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                        <td>ใหม่</td>
                                                        <td>IMPORT</td>
                                                        <td>จุดรับสินค้า</td>
                                                        <td>จุดส่งสินค้า</td>
                                                        <td>จุดส่งสินค้า</td>
                                                        <td>FCL</td>
                                                        <td>20</td>
                                                        <td>1</td>
                                                        <td>D-0.00</td>
                                                        <td>0.000 </td>
                                                    </tr>
                                                </tbody>

                                                <tbody>
                                                    <tr>

                                                        <td></td>
                                                        <td>EXPORT</td>
                                                        <td>จุดรับสินค้า</td>
                                                        <td>จุดส่งสินค้า</td>
                                                        <td>จุดส่งสินค้า</td>
                                                        <td>FCL</td>
                                                        <td>20</td>
                                                        <td>1</td>
                                                        <td>D-0.00</td>
                                                        <td>0.000 </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                    <br>
                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                                    aria-controls="panelsStayOpen-collapseOne">
                                                    SSL Logistics
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseOne"
                                                class="accordion-collapse collapse show">
                                                <div class="accordion-body">
                                                    <table id="myTable" class="table table-striped"
                                                        style="width: 100%;">
                                                        <thead>
                                                            <tr>

                                                                <th></th>
                                                                <th>ประเภทขนส่ง</th>
                                                                <th>จุดรับตู้สินค้า/ตู้เปล่า</th>
                                                                <th>จุดส่งสินค้า/ขึ้นสินค้า</th>
                                                                <th>จุดส่งตู้เปล่า/ตู้สินค้า</th>
                                                                <th>ความจุ</th>
                                                                <th>ขนาดตู้</th>
                                                                <th>จำนวนตู้</th>
                                                                <th>ราคาน้ำมัน</th>
                                                                <th>สรุปราคา</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>

                                                                <td>ใหม่</td>
                                                                <td>IMPORT</td>
                                                                <td>จุดรับสินค้า</td>
                                                                <td>จุดส่งสินค้า</td>
                                                                <td>จุดส่งสินค้า</td>
                                                                <td>FCL</td>
                                                                <td>20</td>
                                                                <td>1</td>
                                                                <td>D-0.00</td>
                                                                <td>0.000 </td>
                                                            </tr>
                                                        </tbody>

                                                        <tbody>
                                                            <tr>

                                                                <td></td>
                                                                <td>EXPORT</td>
                                                                <td>จุดรับสินค้า</td>
                                                                <td>จุดส่งสินค้า</td>
                                                                <td>จุดส่งสินค้า</td>
                                                                <td>FCL</td>
                                                                <td>20</td>
                                                                <td>1</td>
                                                                <td>D-0.00</td>
                                                                <td>0.000 </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                                    aria-controls="panelsStayOpen-collapseTwo">
                                                    2
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    ..
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                                    aria-controls="panelsStayOpen-collapseThree">
                                                    3
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    ..
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


            </div>
        </div>
    </div>



    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>

</html>