<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSL logistic</title>

    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="login-page">
  <div class="form">
    <h1>welcom back.</h1>
    <form class="register-form"id="multiStepForm">
    
  <div id="step1">
    <h2>Step 1</h2>
    <input type="text" placeholder="Company" id="company"/>
    <input type="text" placeholder="Tax No." id="Tax No."/>
    <input type="text" placeholder="email" id="email"/>
    <input type="text" placeholder="Phone" id="Phone"/>
    <button onclick="nextStep(1)">Next</button>
  </div>
  <div id="step2" style="display: none;">
    <h2>Step 2</h2>
    <input type="text" placeholder="Job Postings" id="JobPostings"/>
    <input type="text" placeholder="First Name" id="firstName"/>
    <input type="text" placeholder="Last Name" id="lastName"/>
    <!-- <button onclick="prevStep(2)">Previous</button> -->
    <button onclick="nextStep(2)">Next</button>
  </div>
  <div id="step3" style="display: none;">
    <h2>Step 3</h2>
    <input type="text" placeholder="Username" id="Username"/>
    <input type="password" placeholder="Password" id="Password"/>
    <input type="password" placeholder="Repeat password" id="Repeat password"/>
    <!-- <button onclick="prevStep(3)">Previous</button> -->
    <button type="submit">Submit</button>
  </div>
  <p class="message">Already registered? <a href="#">Sign In</a></p>




    </form>

    <form class="login-form">
      <span >Username or email address</span>
      <input type="text" placeholder="username"/>
      <span>Password</span>
      <input type="password" placeholder="password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
<script >
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
  const firstName = document.getElementById('firstName').value;
  const lastName = document.getElementById('lastName').value;
  const phoneNumber = document.getElementById('phoneNumber').value;

  // Perform actions with form data (e.g., send it to server)
  console.log(company, firstName, lastName, phoneNumber);
});

</script>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/login.js"></script>

</body>
</html>