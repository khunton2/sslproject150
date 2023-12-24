<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>test</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-8"> <br>
                <h4>PHP PDO :: ระบบสมัครสมาชิก</h4>
                <form action="signup_db.php" method="post">
                    <div class="mb-2">
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" required minlength="3"
                                placeholder="ชื่อ">
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="col-sm-9">
                            <input type="text" name="lname" class="form-control" required minlength="3"
                                placeholder="นามสกุล">
                        </div>
                    </div>
                    
                    <div class="mb-2">
                        <div class="col-sm-9">
                            <input type="text" name="phone" class="form-control" required minlength="3"
                                placeholder="เบอร์โทร">
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="col-sm-9">
                            <input type="text" name="mail" class="form-control" required minlength="3"
                                placeholder="mail">
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="col-sm-9">
                            <input type="text" name="tax" class="form-control" required minlength="3"
                                placeholder="tax">
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="col-sm-9">
                            <input type="text" name="factrory" class="form-control" required minlength="3"
                                placeholder="factrory">
                        </div>
                    </div>
                    
                    <div class="mb-2">
                        <div class="col-sm-9">
                            <input type="text" name="jobpostings" class="form-control" required minlength="3"
                                placeholder="jobpostings">
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="col-sm-9">
                            <input type="text" name="username" class="form-control" required minlength="3"
                                placeholder="username">
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="col-sm-9">
                            <input type="password" name="password" class="form-control" required minlength="3"
                                placeholder="password">
                        </div>
                    </div>
                    <div class="d-grid gap-2 col-sm-9 mb-3">
                        <button type="submit" class="btn btn-primary">สมัครสมาชิก</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>