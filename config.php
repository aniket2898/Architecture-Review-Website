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
$sql = 'SELECT name,review FROM review where forname="'.$queries['action'].'"';
$result = mysqli_query($conn, $sql);
$reviews = [];

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        array_push($reviews,$row['name']);
        array_push($reviews,$row['review']);
    }
}

mysqli_close($conn);
?>