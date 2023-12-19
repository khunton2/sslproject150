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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php require_once 'nav/nevbar.php' ?>
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <span>เลขที่ :</span>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="collabphone"
                                    placeholder="เบอร์โทรผู้ประสานงาน">
                            </div>

                            <span>อัพโหลดไฟล์</span>
                             <div class="col-sm-4">
                             <input class="form-control" type="file" id="formFile">

                            </div> 
                            
                        </div>
                        <div class="offcanvas-header">


                        <div class="offcanvas-title" id="offcanvasRightLabel">
                            <h6>จองรถ</h6>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                    value="option1">
                                <label class="form-check-label" for="inlineRadio1">ในประเทศ</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="option2">
                                <label class="form-check-label" for="inlineRadio2">นอกประเทศ</label>
                            </div>
                        </div>

                        <!-- <button type="button" class="btn btn-info" href="booking_in.php">จองเส้นทางใหม่</button> -->
                       
                    </div><br>
                    </div>
                    

                    <div class="container-fluid">
                        <div class="row">
                            <!-- Left Column -->
                            <div class="col-md-6">
                                <div class="card">

                                    <div class="card-body">
                                        <label class="col-sm col-form-label text-primary">
                                            <h5>ข้อมูลจุดรับ-ส่งสินค้า &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                <button type="button" class="btn btn-outline-primary btn-lg pull-left">+
                                                    เพิ่มที่อยู่
                                                </button>
                                            </h5>
                                        </label>
                                    </div>
                                    <!-- Columns are always 50% wide, on mobile and desktop -->
                                    <div class="row">
                                        <div class="col-4 w-75 p-4">
                                            <i class="fa-solid fa-location-dot" style="font-size: 24px; color: #0477A4;"
                                                margin-right: 10px;></i> <span
                                                class="badge text-bg-info">จุดรับจุดที่1</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 w-75 p-4">
                                            <label for="collabname" class="form-label">
                                                <span>ชื่อผู้ประสานงาน :</span>
                                            </label>
                                            <input type="text" class="form-control" id="collabname"
                                                placeholder="ชื่อผู้ประสานงาน">
                                        </div>
                                        <div class="col-4 w-75 p-4">
                                            <label for="collabphone" class="form-label">
                                                <span>เบอร์ผู้ประสานงาน :</span>
                                            </label>
                                            <input type="text" class="form-control" id="collabphone"
                                                placeholder="เบอร์โทรผู้ประสานงาน">
                                        </div>
                                    </div>

                                    <div class="w-100 p-3">
                                        <label for="goodsaddress" class="form-label">
                                            <span>ที่อยู่สินค้า :</span>
                                        </label>
                                        <input type="email" class="form-control" id="goodsaddress"
                                            placeholder="ที่อยู่สินค้า">
                                    </div>

                                    <div class="w-100 p-3">
                                        <label for="startDate1">
                                            <span>วันที่เริ่มรับของ : </span>
                                        </label>
                                        <input type="datetime-local" id="startDate1" class="form-control"
                                            placeholder="Start Date and Time">
                                    </div>

                                    <div class="w-100 p-3">
                                        <label for="endDate1">
                                            <span>เวลลาสิ้นสุดรับของ : </span>
                                        </label>
                                        <input type="datetime-local" id="endDate1" class="form-control"
                                            placeholder="End Date and Time">
                                    </div>

                                    <div class="row">
                                        <div class="col-4 w-75 p-4">
                                            <i class="fa-solid fa-location-dot" style="font-size: 24px; color: #0477A4;"
                                                margin-right: 10px;></i> <span
                                                class="badge text-bg-info">จุดรับจุดที่1</span>
                                        </div>
                                    </div>
                                    <!-- Columns are always 50% wide, on mobile and desktop -->
                                    <div class="row">
                                        <div class="col-4 w-75 p-4">
                                            <label for="collabname" class="form-label">
                                                <h6>ชื่อผู้ประสานงาน :</h6>
                                            </label>
                                            <input type="text" class="form-control" id="collabname"
                                                placeholder="ชื่อผู้ประสานงาน">
                                        </div>
                                        <div class="col-4 w-75 p-4">
                                            <label for="collabphone" class="form-label">
                                                <h6>เบอร์ผู้ประสานงาน :</h6>
                                            </label>
                                            <input type="text" class="form-control" id="collabphone"
                                                placeholder="เบอร์โทรผู้ประสานงาน">

                                        </div>


                                    </div>

                                    <div class="w-100 p-3">
                                        <label for="goodsaddress" class="form-label">
                                            <h6>รหัสลูกค้าปลายทาง :</h6>
                                        </label>
                                        <input type="email" class="form-control" id="goodsaddress"
                                            placeholder="รหัสลูกค้าปลายทาง ">
                                    </div>

                                    <div class="w-100 p-3">
                                        <label for="goodsaddress" class="form-label">
                                            <h6>ที่อยู่สินค้า :</h6>
                                        </label>
                                        <input type="email" class="form-control" id="goodsaddress"
                                            placeholder="ที่อยู่สินค้า">
                                    </div>

                                    <div class="w-100 p-3">
                                        <label for="startDate1">
                                            <h6>วันที่เริ่มรับของ : </h6>
                                        </label>
                                        <input type="datetime-local" id="startDate1" class="form-control"
                                            placeholder="Start Date and Time">
                                    </div>

                                    <div class="w-100 p-3">
                                        <label for="endDate1">
                                            <h6>เวลลาสิ้นสุดรับของ : </h6>
                                        </label>
                                        <input type="datetime-local" id="endDate1" class="form-control"
                                            placeholder="End Date and Time">
                                    </div>

                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-body">
                                            <label class="col-sm col-form-label text-primary">
                                                <h5>ข้อมูลของสินค้า &nbsp;&nbsp;&nbsp;&nbsp;
                                                    
                                                </h5>
                                            </label><button type="button"
                                                        class="btn btn-outline-primary btn-lg pull-left">+
                                                        เพิ่มที่อยู่
                                                    </button>
                                        </div>
                                        <!-- Columns are always 50% wide, on mobile and desktop -->


                                        <div class="w-100 p-3">
                                            <label for="goodsaddress" class="form-label">
                                                <h6>รหัสสินค้า :</h6>
                                            </label>
                                            <input type="email" class="form-control" id="goodsaddress"
                                                placeholder="รหัสสินค้า">
                                        </div>

                                        <div class="w-100 p-3">
                                            <label for="startDate1">
                                                <h6>ประเภทสินค้า : </h6>
                                            </label>
                                            <input type="email" class="form-control" id="goodsaddress"
                                                placeholder="ประเภทสินค้า">
                                        </div>

                                        <div class="w-100 p-3">
                                            <label for="endDate1">
                                                <h6>แบรนด์สินค้า : </h6>
                                            </label>
                                            <input type="email" class="form-control" id="goodsaddress"
                                                placeholder="แบรนด์สินค้า">
                                        </div>

                                        <div class="w-100 p-3">
                                            <label for="endDate1">
                                                <h6>ชื่อสินค้า : </h6>
                                            </label>
                                            <input type="email" class="form-control" id="goodsaddress"
                                                placeholder="ชื่อสินค้า">
                                        </div>

                                    </div>
                                </div> &nbsp;

       
                                            

                                            <div class="card">
    <div class="card-body">
        <label class="col-sm col-form-label text-primary">
            <h5>ข้อมูลการขนส่ง</h5>
        </label>

        <div class="container p-4">
            <div class="row">
                <div class="col-md-12">
                    <label class="mr-2"><h6>ประเภทรถ :</h6></label>
                    <select class="form-control select2">
                        <option>รถ 4 ล้อ</option>
                        <option>รถ 6 ล้อ</option>
                        <option>รถ 10 ล้อ</option>
                        <option>รถ 18 ล้อ</option>
                        <option>คอนเทนเนอร์ขนาด 20</option>
                        <option>คอนเทนเนอร์ขนาด 40</option>
                    </select>
                </div>
            </div> <br>

            <div class="row">
                <div class="col-md-12">
                    <label for="typeNumber"><h6>จำนวนคัน :</h6></label>
                    <div class="form-outline">
                        <input min="1" max="" type="number" id="typeNumber" class="form-control" />
                        <small id="emailHelp" class="form-text text-muted">โปรดกรอกจำนวนรถที่ต้องการ</small>
                    </div>
                </div>
            </div> <br>

            <div class="row">
                <div class="col-md-12">
                    <label class="mr-2"><h6>บริษัทขนส่ง :</h6></label>
                    <select class="form-control select2">
                        <option>บริษัท สหพันธ์ เทรดดิ้ง กรุ๊ป จำกัด</option>
                        <option>บริษัท เอส เอส แอล โลจิสติกส์ จำกัด</option>
                        <!-- Add other options as needed -->
                    </select>
                </div>
            </div> <br>

            <div class="row">
                <div class="col-md-12">
                    <label for="goodsaddress" class="form-label"><h6>น้ำหนัก (ตัน) :</h6></label>
                    <input type="text" class="form-control" id="goodsaddress" placeholder="น้ำหนัก (ตัน)">
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
    </div>



  






</body>

</html>