<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "book_db";

    $connection = mysqli_connect($servername,$username,$password,$dbname);{

    if(isset($_POST['send']))
    {
       $name     = $_POST['name'];
       $email    = $_POST['email'];
       $phone    = $_POST['phone'];
       $address  = $_POST['address'];
       $location = $_POST['location'];
       $guests   = $_POST['guests'];
       $arrivals = $_POST['arrivals'];
       $leaving  = $_POST['leaving'];

       $query = " insert into book_form values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";
        mysqli_query($connection,$query);

        header('location:book.php');

        
    }

    }
?>

