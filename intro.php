<?php
	    include 'db.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>school management System</title>
   
    <style>
    
 body{
 background-image:url("https://www.giet.edu/wp-content/uploads/2020/06/wifi-facility.jpg");
 background-repeat: no-repeat;
 background-size: cover;
 }
.container{
  display:flex;
  justify-content: center;
  animation-name: giet;
  animation-duration: 3s;
  animation-timing-function:ease-in-out;
  animation-iteration-count: 4;
  animation-delay: 0.3s;
  animation-iteration-count:1;

}
.container{
  background-image:url("https://tse1.mm.bing.net/th?id=OIP.b5KVQNasomvHsHBMA445zwHaFj&pid=Api&rs=1&c=1&qlt=95&w=129&h=96");
  background-size: cover;
  background-repeat: no-repeat;
  background-clip: text;
  -webkit-background-clip: text;
  background-position:bottom;
  color:transparent;

}
@keyframes giet{
  from {
transfor:rotate(45deg);

  }
  to{
    transform:rotate(180deg)
  }
}
h1::first-letter{
  font-size: 80px;
  color:rgb(238, 255, 0);
}

.container h1 ::first-letter{

  font-size:80px;
  font-weight: bold;
  
}

.container  span{
  color:#144e05;
  
}
.LOGIN{
    width: 300px;
    padding: 10px;
    display: flex;
    flex-direction: column;
    border: solid;
    color: skyblue;
    border-radius: 5px;
    background-color: rgb(5, 104, 147);
    justify-content: center;
    direction:FLEX;
    position: fixed;
    top: 70%;
    left: 15%;
border-bottom: 40%;
  
     transform: translate(-50%, -50%);
}
.TEACHERLOGIN{
  width: 300px;
  padding: 10px;
  display: flex;
  flex-direction: column;
  border: solid;
  color: skyblue;
  border-radius: 5px;
  background-color: rgb(5, 104, 147);
  justify-content: center;
  direction:FLEX;
  position: fixed;
  top: 70%;
  left: 75%;
  border-bottom: 60%;
   transform: translate(-50%, -50%);
}
.about{
    text-decoration: solid;
    border: solid;
    text-align: center;
    background-color: rgb(96, 6, 6);
    color: blue;
    text-wrap: 20px;
           
            animation: changeBg 10s linear infinite ;
            display: grid;
            
        }
        @keyframes changeBg {
            0%
            {
                background-color: blueviolet;
            }
            20%
            {
                background-color: #089688;
            }
            40%
            {
                background-color:#2196f3;
            }
            60%
            {
                background-color: #ff5722;
            }
            80%
            {
                background-color: yellowgreen;
            }
            100%
            {
                background-color: #9c27ba;
            }
}


    </style>
</head>





<body>
      <div class="container">
    <H1>WELCOME TO</H1><BR>
      <H1><P>GANDHI INSTITUTE OF ENGINEERING AND TECHNOLOGY <span>UNIVERSITY</span></P></H1>
      </div>
 

      <div class="LOGIN">
        <marquee directin="left"><h2> STUDENT LOGIN </h2></marquee>
        <p>LOGIN HERE!</p>
        <button onclick="document.location='login.php' ">LOGIN</button>
        <br>
        <p>NEW USER?</p>
        <button onclick="document.location='signup.php' ">REGISTER</button>
    </div>
    <div class="TEACHERLOGIN">
       <marquee directin="left"><h2> TEACHER LOGIN </h2></marquee>
       <p>LOGIN HERE!</p>
      <button onclick="document.location='teaherlogin.php' ">LOGIN</button>
      <br>
      <p>NEW USER?</p>
      <button onclick="document.location='teacher.php' ">REGISTER</button>
    </div>
    
    <div class="about">
        <marquee directin="left"><p>ABOUT OUR INSTITUTE </p></marquee>
        <HR/>
        
    <P >GIET, best University in Eastern India for campus placement. GIET University, Gunupur (formerly known as Gandhi Institute of Engineering and Technology) was established by “Vidya Bharati Educational Trust,” Gunupur, Odisha, India in the year 1997. Since inception, the Trust promotes Technical Education in India with a motto of providing Quality Education in a highly disciplined and conducive environment with International Standards.</P>
    <a href="aboutmore.html"><button>About us</button></a>    
</div>



</body>
</html>