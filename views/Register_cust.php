<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background-image: url("../public/shoeBg.jpg");
            background-attachment: fixed;
            background-size:cover;
            background-repeat: no-repeat;

        }

        .card{
            background-color: rgba(240, 248, 255, 0.081);
            backdrop-filter: blur(5px);
        }

        .btn{
            border-width: 5px;
        }
        .btn:hover{
          font-weight: bolder;
        }
    </style>
  </head>
  <body  class="d-flex justify-content-center align-items-center vh-100">
 <div  class="card  text-center  ">
    <!--heading-->
    <img class="w-75 mt-2 mx-5  "height="150"  src="https://www.transparentpng.com/thumb/nike-logo/MoOjzC-black-logo-nike-background.png" alt="img"/>
    <p class="display-6 mt-4 fw-bold mx-5" >Sign up</p>
    <small class="text-muted">to continue....</small>
    <form class="form p-5 ">
   
       
        <input  class="form-control mb-4 " placeholder="Enter your name"  id="fname" type="text" name="fname" />
  
        
        <input  class="form-control mb-4"   placeholder="Enter your lastname "  id="lname" typet="text" name="Lname" />
  
        <input class=" form-control mb-4"   placeholder="Enter your e-mail"   id="email" typet="email" name="email" />
  
        <input  class=" form-control mb-4"   placeholder="Enter password"  id="password" type="password" name="password" />

        <input  class=" form-control mb-4"  placeholder="confrim password"   id="email" type="password" />
  
        <button class="btn btn-outline-warning w-100 btn-lg">SUBMIT</button>
    </form>    
</div>
   


     <!--bootstrap script-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
