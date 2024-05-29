<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>	   
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css">


<nav class="navbar navbar-expand bg-dark navbar-dark" id="nav1">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item" id="brand">
                <a class="navbar-brand" href="login.php" >Student CRUD System</a>
            </li>
            <li class="nav-item" id="hm">
                <a class="nav-link ms-3 active" href="admin.php">Home</a>
            </li>
            <li class="nav-item" id="hmt">
                <a class="nav-link ms-3 active" href="teacher.php">Home</a>
            </li>
            <li class="nav-item" id="hma">
                <a class="nav-link ms-3 active" href="admission.php">Home</a>
            </li>
            <li class="nav-item" id="lgin">
                <a class="nav-link ms-3" href="login.php" >Login</a>
            </li>
            <li class="nav-item" id="reg">
                <a class="nav-link ms-3" href="register.php">Register</a>
            </li>
            <li class="nav-item" id="mu">
                <a class="nav-link ms-3" href="manage_user.php">Manage User</a>
            </li>
            <li class="nav-item" id="adm">
                <a class="nav-link ms-3" href="manage_admission.php">Manage Admission </a>
            </li>
            <li class="nav-item" id="tec">
                <a class="nav-link ms-3" href="manage_teacher.php" >Manage Teacher</a>
            </li>
            <li class="nav-item" id="mua">
                <a class="nav-link ms-3" href="manage_user_adm.php">Manage User</a>
            </li>
            <li class="nav-item" id="std">
                <a class="nav-link ms-3" href="manage_student.php">Manage Student</a>
            </li>
            <li class="nav-item" id="msa">
                <a class="nav-link ms-3" href="manage_student_admission.php">Manage Student</a>
            </li>
            <li class="nav-item" id="msm">
                <a class="nav-link ms-3" href="manage_student_marks.php">Manage Student Marks</a>
            </li>
        </ul>

        <ul class="navbar-nav justify-content-end">    
            <li calss="nav-item" id="prf">
                <a class="nav-link ms-3" href="useraccount.php"><i class="fa fa-user"></i> Profile</a>
            </li>
            <li calss="nav-item" id="prfa">
                <a class="nav-link ms-3" href="useraccount_admission.php"><i class="fa fa-user"></i> Profile</a>
            </li>
            <li calss="nav-item" id="prfs">
                <a class="nav-link ms-3" href="useraccount_student.php"><i class="fa fa-user"></i> Profile</a>
            </li>
            <li calss="nav-item" id="prft">
                <a class="nav-link ms-3" href="useraccount_teacher.php"><i class="fa fa-user"></i> Profile</a>
            </li>
            <li class="nav-item" id="lgout">
                <a class="nav-link ms-3" href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>

<nav class="navbar navbar-inverse bg-dark navbar-dark" id="nav2">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <a class="navbar-brand" href="" >Student CRUD System</a>
        </ul>
        <ul class="navbar-nav justify-content-end">
            <li>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <i class="fa fa-bars"></i>                       
                </button>
            </div>
            </li>
        </ul>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav justify-content-end">
            <li class="nav-item" id="hm">
                <a class="nav-link active ms-3" href="admin.php">Home</a>
            </li>
            <li class="nav-item" id="hmt">
                <a class="nav-link ms-3 active" href="teacher.php">Home</a>
            </li>
            <li class="nav-item" id="hma">
                <a class="nav-link ms-3 active" href="admission.php">Home</a>
            </li>
            <li class="nav-item" id="lgin">
                <a class="nav-link ms-3" href="login.php" >Login</a>
            </li>
            <li class="nav-item" id="reg">
                <a class="nav-link ms-3" href="register.php">Register</a>
            </li>
            <li class="nav-item" id="mu">
                <a class="nav-link ms-3" href="manage_user.php">Manage User</a>
            </li>
            <li class="nav-item" id="adm">
                <a class="nav-link ms-3" href="manage_admission.php">Manage Admission </a>
            </li>
            <li class="nav-item" id="tec">
                <a class="nav-link ms-3" href="manage_teacher.php" >Manage Teacher</a>
            </li>
            <li class="nav-item" id="mua">
                <a class="nav-link ms-3" href="manage_user_adm.php">Manage User</a>
            </li>
            <li class="nav-item" id="std">
                <a class="nav-link ms-3" href="manage_student.php">Manage Student</a>
            </li>
            <li class="nav-item" id="msa">
                <a class="nav-link ms-3" href="manage_student_admission.php">Manage Student</a>
            </li>
            <li class="nav-item" id="msm">
                <a class="nav-link ms-3" href="manage_student_marks.php">Manage Student Marks</a>
            </li>
            <li class="nav-item" id="lgout">
                <a class="nav-link ms-3" href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>
            </li>
            <li calss="nav-item" id="prfa">
                <a class="nav-link ms-3" href="useraccount_admission.php"><i class="fa fa-user"></i> Profile</a>
            </li>
            <li calss="nav-item" id="prfs">
                <a class="nav-link ms-3" href="useraccount_student.php"><i class="fa fa-user"></i> Profile</a>
            </li>
            <li calss="nav-item" id="prft">
                <a class="nav-link ms-3" href="useraccount_teacher.php"><i class="fa fa-user"></i> Profile</a>
            </li>
            <li calss="nav-item" id="prf">
                <a class="nav-link ms-3" href="useraccount.php"><i class="fa fa-user"></i>Profile</a>
            </li>
          </ul>
        </div>
    </div>
</nav>