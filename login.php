<?php
session_start();

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['mail'];
    $password = $_POST['pass'];

    if (!empty($email) && !empty($password) && !is_numeric($email)) {
        $query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
        $result = mysqli_query($con, $query);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['pass'] == $password) {
                    header("location: http://localhost/from/introstudent.php");
                    die;
                } else {
                    echo "<script type='text/javascript'> alert('Incorrect Password') </script>";
                }
            } else {
                echo "<script type='text/javascript'> alert('User not found') </script>";
            }
        } else {
            echo "<script type='text/javascript'> alert('Database Error: " . mysqli_error($con) . "') </script>";
        }
    } else {
        echo "<script type='text/javascript'> alert('Invalid Input') </script>";
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form login and register</title>
   <style>
body{
  margin:0;
  padding:0;
  font-family:sans-serif;
  background-image: url("https://blogs.staffs.ac.uk/student-blogs/files/2016/08/iStock_28423686_MEDIUM.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  min-height: 100vh;
  align-items: center;
}
.center{
    position: absolute;
    align-items: center;
    margin-left: 40%;
    margin-top: 20%;
}
button{
  
  margin-top: 10px;
  padding: 12px;
  background: #dde1e7;
  border: none;
  font-size: 17px;
  font-weight: 600;
  margin-bottom: 10px;
  box-shadow: -4px -4px 7px #656464b7,
                3px 3px 5px rgba(94, 104, 121, 0.388);
}
button:hover{
	box-shadow: inset -3px -3px 7px #ffffffb0, inset 3px 3px 5px rgba(94, 104, 121, 0.692);
}
table{
    opacity: 20;
background-color: aqua;
}

    </style>
</head>
<body>
   
        
        <form method="POST">
        <table class="center" border="2">
            <tr><th colspan="2">STUDENT LOGIN</th><TH></TH></tr>
            <tr><th>Email</th><th><input type="email" name="mail" required></th></tr>
            <tr><th>Password</th><th><input type="password" name="pass" required></th></tr>
            <tr><th colspan="2"><button>Submit</button></th><th></th></tr>
        </table>
        </form>
        
</body>
</html>