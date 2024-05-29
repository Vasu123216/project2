<?php
    include 'scriptandlinks.php';

$rowerror = false;
$alert = false;
$showerror = false;
if ($_SERVER['REQUEST_METHOD']=="POST")
{
    include 'db.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirm_password'];
    $userimage=$_FILES['userimage'];
    $filename = $userimage['name'];
    $fileerror = $userimage['error'];
    $filetmp = $userimage['tmp_name'];
    $fileexn = explode('.',$filename);
    $allowedexn = array('jpg','png','jpeg');
    $filecheck = strtolower(end($fileexn));
    $exist = "select * from users where email='$email'";
    $result = mysqli_query($con,$exist);
    $numofrow = mysqli_num_rows($result);
    

    if ($numofrow>0){
        $rowerror = true;
    }
    else
    {
        if (($email!='' || $email!=NULL) && $password == $confirmpassword && in_array($filecheck,$allowedexn))
        {
            $tmpfile = 'images/users/'.$filename;
            move_uploaded_file($filename, $tmpfile);
            $sql = "INSERT INTO `users`(`email`, `password`, `role`, `userimage`) VALUES ('$email','$password','user', '$tmpfile');";
            $result = mysqli_query($con,$sql);
            $alert = true;
        }
        else {
            $showerror = true;
        }
    }

}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--for font awesome icons-->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/jqajax.js"></script>
        <script src="js/popper.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>	   
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css">
        



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
        <script>
            const form = document.getElementById("form");
            const email = document.getElementById("email");
            const password = document.getElementsById("password");
            const confirm_password = document.getElementById("confirm_password");
            const userimage = document.getElementById("userimage")

            form.addEventListener('submit', e=>{
                e.preventDefault();
                validateInput();
            });

            const setSuccess = element => {
                const inputControl = element.parentElement;
                const errorDisplay =inputControl.querySelector('.error');
                errorDisplay.innerText='';
                inputControl.classList.add('success');
                inputControl.classList.remove('error');
            }

            const isValidEmail = email => {
                const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(string(email).toLowerCase());
            }

            const setError = (element, message) =>{
                const inputControl = element.parentElement;
                const errorDisplay =inputControl.querySelector('.error');
                errorDisplay.innerText=message;
                inputControl.classList.add('error');
                inputControl.classList.remove('success');
            }

            const validateInput = () => {
                const emailValue = email.value.trim();
                const passwordValue = password.value.trim();
                const confirm_passwordValue =confirm_password.value.trim();
            }

            if(emailValue === ""){
                setError(email,"Email is required");
            } else if(!isValidEmail){
                setError(email,'Enter a valid Email.');
            }else {
                setSuccess(email);
            }

            if(passwordValue === ""){
                setError(password,"Enter Password.");
            } else if(passwordValue.length<8){
                setError(password,'Enter password of atleast 8 characters.');
            }else {
                setSuccess(password);
            }

            if(confirm_passwordValue === ""){
                setError(confirm_password,"Please confirm your password");
            } else if(confirm_passwordValue != passwordValue){
                setError(confirm_password,"Passwords doesn't match");
            }else {
                setSuccess(confirm_password);
            }

        </script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

        <?php
            require "navbar.php";
            if($alert){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong>You are successfully registered.
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
            </div>';
            }
            if($rowerror){
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong>User with this email already exist.
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="close"></button>
            </div>';
            }
            if($showerror){
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong>Password do not match.
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
    
            </div>';
            }
        ?>
        <h1 class="text-center">Register as a New user</h1>
        <form action="register.php" method="post" id="form" class="container" enctype="/Applications/XAMPP/xamppfiles/ ">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email"required name="email" id="email" class="form-control mt-2">
                <small class="fw-light">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password"required name="password" id="password" class="form-control mt-2">
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password"required name="confirm_password" id="confirm_password" class="form-control mt-2">
                <small class="fw-light">Make sure you entered same password.</small>
            </div>
            <div class="form-group">
                <label for="userimage">User Image</label>
                <input class="form-control" type="file" name="userimage" id="userimage">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary mt-3" value="Register">
            </div>
        </form>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        

    </body>
</html>