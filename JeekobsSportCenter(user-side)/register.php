<?php
include 'connect.php';
if (isset($_POST['signUp'])) {
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['mail'];
    $password = $_POST['password'];
    $password = md5($password);
    $checkEmail = "SELECT *FROM users WHERE email ='$email'";
    if ($rs->num_rows > 0) {
        echo "Email address has already Exist!";
    } else {
        $insertQuery = "INSERT INTO users(firstname, lastname,email,password)
    VALUES ('$firstname','$lastname','$email','$password')";

        if ($conn->query($insertQuery) == true) {
            header("location: loginPage.php");
        } else {
            echo "ERROR:".$conn->error;


        }
    }
}
if(isset($_POST['signIn'])){
$email= $_POST['mail'];
$password = $_POST['password'];
$password = md5($password);
$sql ="SELECT* FROM users WHERE email='$email' AND password='$password'";
$rs = $conn->query($sql);
if($rs->num_rows > 0) {
    session_start();
  $row= $rs->fetch_assoc();
  $_SESSION['mail'] = $row['mail'];
  header("Location: jeekobsportCenter.php");
  exit();


}else{
    $message = "No Record Found, Invalid/Incorrect Email or Password";;
    echo "<script type='text/javascript'>alert('$message');</script>"; 
}
}
?>
 
