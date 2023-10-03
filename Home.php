<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="./styles//home.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <?php require_once "Menu.php" ?>

    </header>
    <div class="register-wrap">
        <div class="register-agent">
            <h1>Register Your Vehicles on Our Website</h1>
            <p class="sub-heading"> As a valued vehicle agent, we invite you to register your vehicles on our platform and take advantage of this exciting opportunity.</p>
            <div>
                Your vehicles will be showcased to a vast online audience, increasing your chances of finding potential buyers quickly.

                Ourplatform allows you to easily upload and update vehicle listings, pricing information.


            </div>
            <a href="views/Register_agent.php"> <button class="btn btn-warning mt-3">REGISTER AS AGENT </button></a>
        </div>
        <div class="register-cust">
            <h1>Register to rent on Our Website </h1>
            <p class="sub-heading"> By registering with our platform, you'll gain access to a user-friendly interface that simplifies the booking process. </p>
            <div>
                We are thrilled to introduce our top-notch car rental services, and we invite you to experience the convenience and flexibility we offer. Registering with us opens up a world of possibilities.
            </div>
            <a href="views/Register_cust.php"> <button class="btn btn-outline-warning mt-3">REGISTER AS RENTER</button></a>

        </div>

    </div>
    <div class="login-btn-wrap">
        <a href="login.php"><button class="btn btn-outline-light login-btn">click to login</button></a>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>