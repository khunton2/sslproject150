<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSL logistic</title>

    <link rel="stylesheet" href="css/login.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="login-page">
        <div class="form">


            <form class="register-form" id="multiStepForm">

                <center>
                    <h1>Sign Up</h1>
                </center>
                <div id="step1">
                    <h2>Step 1</h2>
                    <input type="text" placeholder="Company" id="company" />
                    <input type="text" pattern="[0-9]+" placeholder="Tax No." onkeypress="onlyNumbers(event)"
                        oninput="limitLength(this)" id="TaxNo" />
                    <input type="email" placeholder="email" id="email" />
                    <input type="phone" placeholder="Phone"  oninput="limitLength2(this)" id="phone" />
                    <button class="button" onclick="nextStep(1)">Next</button>
                </div>
                <div id="step2" style="display: none;">
                    <!-- <button onclick="prevStep(2)" class="styled-button"><i class="fa-solid fa-arrow-left"></i></button> -->
                    <!-- <a onclick="prevStep(2)"><i class="fa-regular fa-circle-chevron-left"
                            style="color: #0477a4;"></i></a> -->

                    <a onclick="prevStep(2)" class="icon"><i class="fa-solid fa-circle-chevron-left"
                            style="color: #0477a4;font-size: 35px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);border-radius: 50%;"></i></a>

                    <h2>Step 2</h2>
                    <input type="text" placeholder="Job Postings" id="JobPostings" />
                    <input type="text" placeholder="First Name" id="firstName" />
                    <input type="text" placeholder="Last Name" id="lastName" />
                    <!-- <button onclick="prevStep(2)">Previous</button> -->
                    <button onclick="nextStep(2)">Next</button>
                </div>
                <div id="step3" style="display: none;">
                    <a onclick="prevStep(3)" class="icon"><i class="fa-solid fa-circle-chevron-left"
                            style="color: #0477a4;font-size: 35px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);border-radius: 50%;"></i></a>
                    <h2>Step 3</h2>
                    <input type="text" placeholder="Username" id="Username" />
                    <input type="password" placeholder="Password" id="password" />
                    <input type="password" placeholder="Repeat password" id="Repeat password" />
                    <!-- <button onclick="prevStep(3)">Previous</button> -->
                    <button type="submit">Submit</button>
                </div>
                <p class="message">Already registered? <a href="#">Sign In</a></p>




            </form>

            <form class="login-form" action="signin_db.php" method="post">
                <center>
                    <h1>Sign Up</h1>
                </center>
                <span>Username or email address</span>
                <input type="text" name="com_username" id="com_username" placeholder="username" />
                <span>Password</span>
                <input type="password" name="com_password" id="com_password" placeholder="password" />
                <button>login</button>
                <p class="message">Not registered? <a href="#">Create an account</a></p>
            </form>
        </div>
    </div>
    <script>
        
    function limitLength(element) {
        if (element.value.length > 13) {
            element.value = element.value.slice(0, 13);
        }
    }
    function limitLength2(element) {
        if (element.value.length > 13) {
            element.value = element.value.slice(0, 10);
        }
    }

    function onlyNumbers(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            evt.preventDefault();
        }
    }

    function nextStep(step) {
        document.getElementById('step' + step).style.display = 'none';
        document.getElementById('step' + (step + 1)).style.display = 'block';
    }

    function prevStep(step) {
        document.getElementById('step' + step).style.display = 'none';
        document.getElementById('step' + (step - 1)).style.display = 'block';
    }

    document.getElementById('multiStepForm').addEventListener('submit', function(e) {
        e.preventDefault();
        // You can handle form submission here, for example:
        const company = document.getElementById('company').value;
        const TaxNo = document.getElementById('TaxNo').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;


        const JobPostings = document.getElementById('JobPostings').value;
        const firstName = document.getElementById('firstName').value;
        const lastName = document.getElementById('lastName').value;

        const Username = document.getElementById('Username').value;
        const password = document.getElementById('password').value;



        // // Perform actions with form data (e.g., send it to server)
        // console.log(company,TaxNo,email,phone,JobPostings, firstName, lastName,Username,password );

        data = [company, TaxNo, email, phone, JobPostings, firstName, lastName, Username, password];
        console.log(data);
    });
    </script>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/login.js"></script>

</body>

</html>