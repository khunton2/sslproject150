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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

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
                    <div class="offcanvas-header">

                        <div class="offcanvas-title" id="offcanvasRightLabel">
                            <h4>ตรวจสอบสถานะ</h4>
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
                    </div><br><br>
                    <div class="alert alert-primary" role="alert" data-bs-toggle="collapse" href="#collapseExample"
                        aria-expanded="false" aria-controls="collapseExample">
                       SSL Logistic
                    </div>
                    

                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <table id="myTable" class="display" style="width: 100%;">
                                <thead>
                                    <tr>

                                        <th>เลขที่</th>
                                        <th>วันที่/เวลาส่ง</th>
                                        <th>สินค้า</th>
                                        <th>จุดส่งสินค้า</th>
                                        <th>จุดรับสินค้า</th>
                                        <th>บริษัทขนส่ง</th>
                                        <th>ประเภทรถ</th>
                                        <th>สถานะ</th>
                                        <th>ทะเบียน</th>
                                        <th>หมายเหตุ</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td>01</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                        <td>1</td>
                                        <td>
                                            <div class="alert alert-danger" role="alert" style="padding: 0px;">
                                                <center>ยกเลิก</center>
                                            </div>
                                        </td>
                                        <td>1</td>
                                        <td><a href="img/Booking_doc/BSE23110114.pdf" target="_blank">ไฟล์ใบเสนอราคา</a>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>02</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                        <td>$320,800</td>
                                        <td>
                                            <div class="alert alert-danger" role="alert" style="padding: 0px;">
                                                <center>ยกเลิก</center>
                                            </div>
                                        </td>
                                        <td>1</td>
                                        <td><a href="#">ไฟล์ใบเสนอราคา</a></td>
                                    </tr>
                                    <tr>

                                        <td>03</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                        <td>$320,800</td>
                                        <td>
                                            <div class="alert alert-success" role="alert" style="padding: 0px;">
                                                <center>สำเร็จ</center>
                                            </div>
                                        </td>
                                        <td>1</td>
                                        <td><a href="#">ไฟล์ใบเสนอราคา</a></td>

                                    </tr>
                                    <tr>

                                        <td>03</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                        <td>$320,800</td>
                                        <td>
                                            <div class="alert alert-warning" role="alert" style="padding: 0px;">
                                                <center>รอผล</center>
                                            </div>
                                        </td>
                                        <td>1</td>
                                        <td><a href="#">ไฟล์ใบเสนอราคา</a></td>
                                    </tr>
                                    <tr>

                                        <td>04</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                        <td>$320,800</td>
                                        <td>
                                            <div class="alert alert-info" role="alert" style="padding: 0px;">
                                                <center>ขนส่ง</center>
                                            </div>
                                        </td>
                                        <td>1</td>
                                        <td><a href="#">ไฟล์ใบเสนอราคา</a></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <script>
        $(document).ready(function() {
            $("#myTable").DataTable();
        });
        </script>
</body>

</html>