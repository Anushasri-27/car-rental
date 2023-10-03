<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="../styles/home.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* to override default bootstrap style */
    .card {
      background-color: rgba(240, 248, 255, 0.081);
      backdrop-filter: blur(5px);
    }

    .btn {
      border-width: 5px;
    }

    .btn:hover {
      font-weight: bolder;
    }
  </style>
</head>

<body class="d-flex justify-content-center align-items-center vh-100">
  <div class="card  text-center  ">
    <!--heading-->
    <img class="w-75 mt-2 mx-5  " height="150" src="./insurance.png" alt="img" />
    <p class="display-6 mt-4 fw-bold mx-5">Sign up</p>
    <small class="text-muted">to continue....</small>
    <form name="forms" action="../database/cust.php" onsubmit="return validation()" method="post" class="form p-5 ">

      <input class="form-control mb-4 d-none " id="user" type="text" name="user" value="cust" />
      <input class="form-control mb-4 " required placeholder="Enter your name" id="fname" type="text" name="fname" />


      <input class="form-control mb-4" required placeholder="Enter your lastname " id="Lname" type="text" name="Lname" />

      <input class=" form-control mb-4" required placeholder="Enter your e-mail" id="email" type="email" name="email" />

      <input class=" form-control mb-4" required placeholder="Enter password" id="password" type="password" name="password" />

      <input class=" form-control mb-4" required placeholder="confrim password" id="cpass" type="password"  name="cpass"/>

      <button class="btn btn-outline-warning w-100 btn-lg">SUBMIT</button>
    </form>
  </div>



  <!--bootstrap script-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function validation() {
      var pass1 = document.forms.password.value;
      var pass2 = document.forms.cpass.value;
      if (pass1 != pass2) {
        alert("password and confirm password have different values");
        return false;
      }

    }
  </script>
</body>

</html>