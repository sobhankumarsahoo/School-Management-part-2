<?php
session_start();

include 'db.php';

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_POST['name'];
    $gmail=$_POST['email'];
    $atd=$_POST['atd'];

if(!empty($gmail) && !empty($atd))
{
    $query="insert into atd (name,email,attendance)  values('$name','$gmail','$atd')";

    mysqli_query($con,$query);

    echo "<script type='text/javascript'> alert('successfuly done!') </script>";
}

        else{
            echo "<script type='text/javascript'> alert('please enter all req fild') </script>";
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
  background-image: url("https://wallpaperaccess.com/full/697829.jpg");
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
            <tr><th colspan="2">Attdendance</th><TH></TH></tr>
            <tr><th>Name</th><th><input type="text" name="name" required></th></tr>            
            <tr><th>Email</th><th><input type="email" name="email" required></th></tr>
            <tr><th>Attdendance</th><th><input type="number" name="atd" required></th></tr>
            <tr><th colspan="2"><button>Submit</button></th><th></th></tr>
        </table>
        </form>
        
</body>
</html>
