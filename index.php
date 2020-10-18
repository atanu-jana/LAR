<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginAndRegistration</title>
    <link rel="stylesheet" href="assets/b4/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"> -->
</head>

<body>
    <?php 
    if(isset($_SESSION['tag'])){

        if($_SESSION['tag'] == "danger"){
           echo '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>';  echo $_SESSION["msgType"]; echo'</strong>'; echo  $_SESSION["msg"];echo' </div>';  
        }else{
            echo '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>';  echo $_SESSION["msgType"]; echo'</strong>'; echo  $_SESSION["msg"];echo' </div>';  
        }
    }else{
        echo '
        
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Welcome! </strong>
      Thanks For Visit    </div>
    ';
    }


    ?>


    <main class="d-flex align-items-center my-auto">
        <section class="loginSection  col-md-12 col-sm-12 col-lg-12 col-12">
            <div class="container mainRow row mx-auto d-flex justify-content-center">
                <div class="loginimage my-4 col-lg-5 col-md-5">
                    <div class="d-flex justify-content-center flex-column align-items-center">
                        <h1 class="mt-5">One of us?</h1>
                        <p>If you already have an account, just sign in.</p>
                        <div class="frame">

                            <img src="assets/edit-user-male.png" class="mt-2" alt="Loading...">
                        </div>
                        <p class="swit_to_signUp px-3 py-2 mt-4">Sign Up</p>
                    </div>

                </div>
                <div class="col-lg-1 col-md-1"></div>

                <form action="assets/database/login.php" method="POST"
                    class="formLogin  my-4 col-lg-6 col-md-6 col-12 col-sm-10 pt-5">
                    <h1 class="form-group text-center">Sign In Here</h1>
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" required
                            autocomplete="off">
                        <i class="fa fa-user  fa-lg fa-fw" aria-hidden="true"></i>

                    </div>


                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required
                            autocomplete="off">
                        <div id="toggle" onclick="showHide();"></div>
                        <i class="fa fa-lock  fa-lg fa-fw" aria-hidden="true"></i>

                    </div>


                    <div class="row">
                        <div class="signUpButton form-group col-md-4 my-3  col-4 col-lg-3 mx-auto">
                            <p onclick="swapToSignUp();">Sign Up</p>
                        </div>
                        <div class="form-group col-md-4 py-3  col-4 col-lg-3 mx-auto">
                            <input type="submit" value="Sign In" class="" id="submit">
                        </div>
                    </div>
                </form>

            </div>
        </section>


        <section class="signUpSection col-md-12 col-sm-12 col-lg-12 col-12">
            <div class="container mainRow row mx-auto d-flex justify-content-center">

                <form action="assets/database/signup.php" method="POST"
                    class="formSignUp my-4 form col-lg-6 col-md-6 col-12 col-sm-10 pt-3">
                    <h1 class="text-center">Sign Up Here</h1>
                    <div class="form-group">
                        <label for="registerUsername">Username:</label>
                        <input type="text" class="form-control" id="registerUsername" name="registerUsername"
                            autocomplete="off" required>
                        <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>

                    </div>

                    <div class="form-group">

                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email" name="email" required autocomplete="off">
                        <i class="fa fa-envelope-open  fa-lg fa-fw" aria-hidden="true"></i>

                    </div>
                    <div class="form-group ">

                        <label for="phNumber">Phone Number:</label>
                       <div class="countryCode row mx-auto">
                       <input type="text" class="form-control col-lg-3 col-sm-3 col-3 col-md-3 " id="phNumber" name="phNumber" required
                            autocomplete="off" value="+91" style="pointer-events: none;">
                            <img src="assets/images/india-flag-waving-icon-64.png" class="ml-auto" style="width: 50px;" alt="">
                        <input type="number" class=" form-control ml-auto col-8 col-md-8 col-lg-8  col-sm-8" id="phNumber" name="phNumber" required
                            autocomplete="off">
                            <i class="fa fa-phone  fa-lg fa-fw" aria-hidden="true"></i>
                       </div>

                    </div>
                    <div class="form-group">
                        <label for="gender">Gender:</label>
                        <!-- <i class="fa fa-venus  fa-lg fa-fw" aria-hidden="true"></i> -->


                        <select class=" form-control" id="gender" name="gender" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="registerPassword">Password:</label>

                        <input type="password" class="form-control" id="registerPassword" name="registerPassword"
                            required autocomplete="off">
                        <div id="toggle2" onclick="showHide2();"></div>

                        <i class="fa fa-key  fa-lg fa-fw" aria-hidden="true"></i>

                    </div>
                    <div class="form-group">
                        <label for="registerCPassword">Conform Password:</label>
                        <input type="password" class="form-control" id="registerCPassword" name="registerCPassword"
                            required autocomplete="off">
                        <div id="toggle3" onclick="showHide3();"></div>

                        <i class="fa fa-lock  fa-lg fa-fw" aria-hidden="true"></i>

                        <!-- <span class="glyphicon glyphicon-ok form-control-feedback"></span> -->
                    </div>
                    <div class="row">
                        <div class="signInButton form-group col-md-4  col-4 col-lg-3 mx-auto">
                            <p onclick="swapToSignIn();">Sign In</p>
                        </div>
                        <div class="form-group col-md-4  col-4 col-lg-3 mx-auto">
                            <input type="submit" value="Submit" id="submit">
                        </div>
                    </div>
                </form>
                <div class="col-lg-1 col-md-1"></div>

                <div class=" signUpimage col-lg-5 col-md-5 my-4">
                    <div class="d-flex pt-5 justify-content-center flex-column align-items-center">
                        <h1 class="pt-5">New here?</h1>
                        <p class="pt-3">Sign up and discover :) ...</p>
                        <div class="frame">

                            <img class="pt-5" src="assets/icons-05.svg" alt="Loading...">
                        </div>
                        <p class="swit_to_login px-3 py-2 mt-5">Sign In</p>


                    </div>
                </div>
            </div>
        </section>


    </main>
    <script>

        const password = document.getElementById('password');
        const registerPassword = document.getElementById('registerPassword');
        const registerCPassword = document.getElementById('registerCPassword');
        const toggle = document.getElementById('toggle');
        const toggle2 = document.getElementById('toggle2');
        const toggle3 = document.getElementById('toggle3');

        function showHide() {
            if (password.type === 'password') {
                password.setAttribute('type', 'text');
                toggle.classList.add('hide');
            } else {
                password.setAttribute('type', 'password');
                toggle.classList.remove('hide');

            }
        }

        function showHide2() {
            if (registerPassword.type === 'password') {
                registerPassword.setAttribute('type', 'text');
                toggle2.classList.add('hide');
            } else {
                registerPassword.setAttribute('type', 'password');
                toggle2.classList.remove('hide');

            }
        }

        function showHide3() {
            if (registerCPassword.type === 'password') {
                registerCPassword.setAttribute('type', 'text');
                toggle3.classList.add('hide');
            } else {
                registerCPassword.setAttribute('type', 'password');
                toggle3.classList.remove('hide');

            }
        }
        function swapToSignUp() {
            document.querySelector('.signUpSection').classList.toggle('s_signup')
            document.querySelector('.loginSection').classList.toggle('s_login')
        }
        function swapToSignIn() {
            document.querySelector('.signUpSection').classList.remove('s_signup')
            document.querySelector('.loginSection').classList.remove('s_login')
        }
    </script>
    <script src="assets/js/script.js"></script>
    <script src="assets/jquery/jquery-3.5.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>