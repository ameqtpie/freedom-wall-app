<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body id="grad">
    

<div id="login">
        <div class="text-center mb-2 mt-3">
        <img src="img/logo.gif" style="width: 50px"  alt="logo">
        </div>
        <h3 class="text-center text-white  fs-6 fw-bold">TECHNOLOGICAL UNIVERSITY OF THE PHILIPPINES VISAYAS</h3>
        <h3 class="text-center text-white fs-6 fw-bold">SUPPLY OFFICE DEPARTMENT</h3>
       
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-8 mx-auto">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center fs-5 fw-bold">SIGN IN</h3>
                            <div class="form-group">
                             
                                <input type="text" name="username" id="username" class="form-control fs-6 mt-3 shadow-none" placeholder="USERNAME">
                            </div>
                            <div class="form-group">
                             
                                <input type="Password" name="password" id="password" class="form-control fs-6 mt-3 shadow-none" placeholder="PASSWORD">
                            </div>
                            <a type="button" href = "mainNav.php" class="btn bts mt-4 mx-auto col-12 shadow-none">Submit</a>
                         
                           
                            <div id="register-link" class=" linkss col-12 text-center mt-4">
                                <a href="#" >Forgot Password?</a>
                            </div>

                            <div id="register-link" class=" linkss col-12 text-center mt-1">
                              <a href="#" >Dont Have Account? Click Here</a>
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="JS/script.js"></script>

<script src="JS/bootstrap.min.js"></script>
</body>
</html>