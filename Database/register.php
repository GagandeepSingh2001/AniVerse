<?php

include 'connect.php';


if(isset($_POST['signUp'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];
    $password=md5($password);

    $checkEmail = "SELECT *FROM users where Email = '$email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows > 0){
        echo "User already exists !";
}
else{
    $insertQuery="INSERT INTO users(Username, Email, Password, Contact)
                    VALUES('$name', '$email', '$password', '$contact')";
        if($conn->query($insertQuery)==TRUE){
            header("location: ../Login_Form.html");
        }
        else{
            echo "Error: ".$conn->error;
        }
    }
}

if(isset($_POST["login"])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    $password=md5($password);

    $sql="SELECT *FROM users where Username='$name' and Password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows > 0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['Username']=$row['name'];
        header("location: ../Home.html");
        exit();
    }
    else{
        echo"Incorrect Email or Password";
    }
}


// Database connection

// $conn = new mysqli('localhost','root','','register');
// if($conn->connect_error){
//     die('Connection Failed: '.$conn->connect_error);
// }
// else{
// 	$spassword = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12)); // We can also encrypt the password using " $password=md5($password); "
//     $stmt = $conn->prepare("insert into users(Username, Email, Password, Contact)values(?, ?, ?, ?)");
//     $stmt->bind_param("sssi", $name, $email, $spassword, $contact);
//     $stmt->execute();
//     header("location: Login_Form.html");
//     $stmt->close();
//     $conn->close();
// }
// ?>