<?php
    /* created a new var and assigned them from our log in.php */
    $name =$_POST['fname'];
    $email =$_POST['email'];
    $address =$_POST['address'];
    $city =$_POST['city'];
    $state =$_POST['state'];
    $zip =$_POST['zip'];
    $cardname =$_POST['cardname'];
    $cardnumber =$_POST['cardnumber'];
    $expmonth =$_POST['expmonth'];
    $expyear =$_POST['expyear'];
    $cvv =$_POST['cvv'];

    /*connection between our var and database */
    $mysql = new mysqli('localhost','root','','db_forlogin');
    $mysql ->query("INSERT INTO `checkout`(`name`, `email`,`address`,`city`,`state`,`zip`,`cardname`,`cardnumber`,`expmonth`,`expyear`,`cvv`)
                                    VALUES('$name','$email','$address','$city','$state','$zip','$cardname','$cardnumber','$expmonth','$expyear','$cvv')");
    $mysql ->close();
    
    /*going beack to our web page */
    header('Location:/forproject/Project_wsiz.php');
?>