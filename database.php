<?php
    /* created a new var and assigned them from our log in.php */
    $email =$_POST['useremail'];
    $pass =$_POST['userpassword'];
    
    /*connection between our var and database */
    $mysql = new mysqli('localhost','root','','db_forlogin');
    $mysql ->query("INSERT INTO `users`(`email`, `password`)
    VALUES('$email','$pass')");
    $mysql ->close();
    
    /*going beack to our web page */
    header('Location:/forproject/Project_wsiz.php');
?>