
<?php
	    include 'db.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> -->
    <title>school management System</title>
    <script>
        function onClickmenu(menu){
            document.getElementById("menu").classList.toggle("icon");
            document.getElementById("nav").classList.toggle("change")
        }

    </script>
    <style>
        body{ background-color: rgb(100, 110, 110);
            margin:0;
            padding:0;
            box-sizing: border-box;
        }
       #menu{
        width:35px;
        height:30px;
        margin:30px 0 20px 20px;
        cursor:pointer;
        z-index:  100;
        
       } 

       .bar{
        height:5px;
        width: 100%;
        background-color: #fff;
        display:block;
        border-radius: 5px;
        transition: 0.3s ease;
       }
       #bar1{
         transform:translateY(-4px);
       }
       #bar2{
        transform:translateY(4px);
       
       }
       #bar3{
        transform:translateY(-4px);
       }
     .navbar{
        padding:0;
        margin: 0 20px;
        transition: 1s ease;
        display:none;
    
        
     }
       .navbar li a {
        color:#fff;
        text-decoration: none;

       }
       .navbar  li{
        list-style: none;
        padding:16px 0;
        height:50%;
        width:50%;
       }
       .navbar li a:hover{
        border:1px solid#fff;
        
       background:palevioletred;  
background: -webkit-linear-gradient(to right, #f00bb7, #c860b1, #4c0734);  
background: linear-gradient(to right, #e54fb6, #302b63, #6c9008);
       }
       .icon .bar{
        background-color: #fff;
       }
       .icon #bar1{
        transform: translateY(-4px) rotate(45deg);
       }
       .icon #bar2{
        transform: translateY(6px) rotate(45deg);
       }
       .icon #bar3{
        opacity:0; 
         
       }
  .change{
    background-color:#2e1a47;
    height:100%;
    margin:0;
    position:absolute;
    font-size:15px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-weight: bold;
    top :0;
    z-index: -100;
    width:20%;
    display:flex;
    flex-direction:column;
    align-items: center;
    justify-content: center;
  }
 @media only screen and(max-width:100px) {
    .change{
        width:40%;
    }
    
 }
 body{
 background: linear-gradient(to right,#00DBDE 0%,#FC00FF 100%);
 }



    </style>
</head>
<body>
    <div class="navigation">
      <div id="menu" onclick="onClickmenu()">
            <div id="bar1" class="bar" ></div>
            <div id ="bar2" class="bar"></div>
             <div id="bar3" class="bar"></div>
      </div>
                   <ul class="navbar" id="nav">
                   <li><a href="r1semmark.php">Check your Sem_Mark</a></li>  
                   <li><a href="r2internalmark.php">Check your Int_Mark</a></li> 
                   <li><a href="r3atd.php">Check your Attendance</a></li> 

            
            </ul>
    </div>

    
</body>
</html>