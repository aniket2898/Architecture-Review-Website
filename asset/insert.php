<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "alpha_review";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = 'INSERT INTO review (name,review,forname) values ("'.$_POST['name'].'","'.$_POST['review'].'","'.$_POST['forname'].'")';
    if(mysqli_query($conn,$sql)){
        echo 'INSERTED';
        sleep(2);
        header('location:../review.php');
    }
?>