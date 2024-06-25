<?php
// Database connection
$host="localhost";
$user="root";
$pass="";
$db= "register";
$conn = new mysqli($host, $user, $pass, $db);
if($conn->connect_error){
    die('Connection Failed: '.$conn->connect_error);
}
// else{
// 	$spassword = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
//     $stmt = $conn->prepare("insert into users(Username,Password)values(?, ?)");
//     $stmt->bind_param("ss", $name, $spassword);
//     $stmt->execute();
//     header("location: Home.html");
//     $stmt->close();
//     $conn->close();
// }
// 