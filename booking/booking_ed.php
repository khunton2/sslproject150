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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    <?php require_once 'nav/nevbar.php'?>

                <div class="container-fluid">
                    <div class="card">
                    <div class="card-body">
                        <div class="offcanvas-header" >

                            <div class="offcanvas-title" id="offcanvasRightLabel">
                                <h6>จองรถ</h6>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">ในประเทศ</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">นอกประเทศ</label>
                              </div></div>

                            <!-- <button type="button" class="btn btn-info" href="booking_in.php">จองเส้นทางใหม่</button> -->
                            <a href="booking_in.php" class="btn btn-info" type="button" >จองเส้นทางใหม่</a>
                          </div><br><br>
    <table id="myTable" class="display" style="width: 100%;">
        <thead>
            <tr>
                <th></th>
                <th>เลขที่</th>
                <th>รหัสลูกค้า</th>
                <th>ชื่อลูกค้า</th>
                <th>สินค้า</th>
                <th>จุดรับสินค้า</th>
                <th>จุดส่งสินค้า</th>
                <th>ผู้รับสินค้า/เบอร์โทรศัพท์</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td><i class="fa-solid fa-star" style="color: #FFD80E;"></i></td>
                <td>01</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td>/0610000000 </td>
            </tr>
            <tr>
                <td><i class="fa-solid fa-star" style="color: #FFD80E;"></i></td>
                <td>02</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td><i class="fa-solid fa-star" style="color: #FFD80E;"></i></td>
                <td>03</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td><i class="fa-solid fa-star" style="color: #FFD80E;"></i></td>
                <td>03</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td><i class="fa-solid fa-star" style="color: #FFD80E;"></i></td>
                <td>04</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
                <td>$320,800</td>
            </tr>
        </tbody>
    </table>
</div>
                    </div>
                </div>
            </div>
    <script>
        $(document).ready(function () {
            $("#myTable").DataTable();
        });
    </script>
</body>

</html>