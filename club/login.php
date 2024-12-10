<?php
include 'dp.php';
// if(isset($_SESSION['email'])){


?>


<!DOCTYPE php>
<php lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Form</title>

<link rel="stylesheet" type="text/css" href="css/login.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
<body>
<!--  Request me for a signup form or any type of help  -->

<div class="login-form">
    <form method="Post">

    	<center><h1>Login Form</h1></center>
        <section class="section-padding pb-0" >
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="name@gmail.com" required="required">
        </div>


        <div class="form-group">
            <input type="Password" pattern="(?=.*\d)(?=.*\W)(?=.*[a-z])(?=.*[A-Z]).{8,}"  class="form-control" name="password"  placeholder="Password" required="required">
        </div>
        <div class="form-group small clearfix">
        <a href="mem_login.php" class="checkbox-inline"><b>Login Member Dashboard</b></a>
            <a href="register.php" class="forgot-link"><b>Registered</b></a>
        </div>
        <?php
        if(isset($_POST['done'])){
        $e = $_POST['email'];
        $p = $_POST['password'];
        $q = "SELECT * FROM `register` WHERE `email`LIKE '$e' AND `password` LIKE '$p'";
        $admin1 = "SELECT * FROM `register` WHERE `email` ='admin@gmail.com' AND `password`='ADM123,a' ";
        mysqli_query($con,$q);
        mysqli_query($con,$admin1);
        $run = mysqli_query($con, $q);
        $count = mysqli_num_rows($run);
        $run1 = mysqli_query($con, $admin1);
        $count1 = mysqli_num_rows($run1);
        // $id = $count['id'];
        // echo $id;
        // if($data == 1){

        //     echo "<style>.account{display: none !important;} .member1{display: block !important;}</style>";


        //    }
        //    else{

        //    }

        if($count == 1){
            $_SESSION['email'] = $e;
            echo "<style>.account{display: none !important;} .member1{display: block !important;}</style>";
            echo "<script>window.open('index.php','_self')</script>";
        }
        elseif($count == 0){
            // $q="Insert into `login`(`email`,`password`)values('$e','$p')";
            // mysqli_query($con,$q);
            echo "<div class='alert alert-warning'><b>Error!</b>Get Registered.</div>";

        }
        elseif($count1 == 0){

             echo "<script>window.open('golf_club/dashboard/pages/example/index.php','_self')</script>";

        }
        else{

            echo "<div class='alert alert-warning'><b>Error!</b>Wrong Email or Password.</div>";

        }
        }
        ?>
        <input type="submit" name="done" class="btn btn-primary btn-block btn-lg" value="log in">
    </form>

</div>
</section>
</body>
