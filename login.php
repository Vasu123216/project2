
<?php
    include 'scriptandlinks.php';
    $login = false;
    $showerror = false;
    $usererror = false;
    $_SESSION['loggedin'] = false;
    if($_SERVER['REQUEST_METHOD']=="POST"){
        include 'db.php';
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "select * from users where email='$email' && password='$password'";
        $res = mysqli_query($con,$sql);
        $num = mysqli_num_rows($res);
        $arr = mysqli_fetch_array($res);
        if($num==1){
            
            if($arr['role']=='admin'){
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;
                header('location: admin.php');
            }
            if($arr['role']=='admission'){
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;
                header('location: admission.php');
            }
            if($arr['role']=='teacher'){
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;
                header('location: teacher.php');
            }
            if($arr['role']=='student'){
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;
                header('location: student.php');
            }
            else{
                $usererror = true;
                $login = false;
            }
            
        }
        else{
            $showerror = true;
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LogIn</title>
        <meta charset="UTF-8">
        <!--meta http-equiv="X-UA-Compatible" content="IE=edge"-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <style>
            #lgout{
                display:none;
            }
            #prf{
                display:none;
            }
            #hm{
                display:none;
            }
            #hmt{
                display:none;
            }
            #hma{
                display:none;
            }
            #hms{
                display:none;
            }
            #adm{
                display: none;
            }
            #tec{
                display: none;
            }
            #std{
                display: none;
            }
            #mua{
                display:none;
            }
            #mu{
                display:none;
            }
            #msa{
                display:none;
            }
            #msm{
                display:none;
            }
            #prft{
                display:none;
            }
            #prfa{
                display:none;
            }
            #prfs{
                display:none;
            }
            @media screen and (max-width: 767px){
                #nav1{
                    display: none;
                }
            }
            @media screen and (min-width:768px) {
                #nav2{
                    display: none;
                }  
            }
        </style>
    </head>
    <body>
        <?php 
            require "navbar.php";
            if($login){
                echo '<div class="alert alert-success alert-dismissible">
                <strong>Success!</strong>You are logged in.
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
            </div>';
            }
            if($showerror){
                echo '<div class="alert alert-danger alert-dismissible">
            <strong>Error!</strong>Credentials are entered wrong.
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>

        </div>';
            }
            if($usererror){
                echo '<div class="alert alert-danger alert-dismissible">
            <strong>Error!</strong>Role is not asssigned to user yet.
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>

        </div>';
            }
        ?>
        <div class="container">
            <h1 class="text-center">Login into your account</h1>
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label class="mt-2" for="email">Email address</label>
                    <input type="email" name="email" id="email" required class="form-control mt-2">
                </div>
                <div class="form-group">
                    <label class="mt-2" for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control mt-2">
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">LogIn</button>
                </div>
            </form>

        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>
