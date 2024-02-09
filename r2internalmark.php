<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search data by its ID</title>
    <style>
        body{
            background-image: url("https://www.jamesgmartin.center/wp-content/uploads/2020/07/AdobeStock_328366715-1200x800.jpeg");

        }
        </style>
</head>
<body>
    <center>
        <h1>Hello Student</h1>
        <h2>Here is your Internal Mark </h2>
        <div class="container">
            <form action="" method="POST">
                <input type="text" name="name" placeholder="Enter your Name" />
                <input type="submit" name="search" value="SEARCH BY ID">
            </form>
            <table> 
            <tr>
                <th>Name</th>
                <th>mail</th>
                <th>internal Mark</th>
            </tr>
            <br>

            <?php 
            session_start();
            include 'db.php';

            if(isset($_POST['search']))
            {
                $name = $_POST['name'];
                $query = "SELECT * FROM marks WHERE name='$name'";
                $query_run = mysqli_query($con,$query);
                
                while($row = mysqli_fetch_array($query_run))
                {
                    ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['mail']; ?></td>
                        <td><?php echo $row['mark']; ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
            </table>
        </div>
    </center>
</body>
</html>
