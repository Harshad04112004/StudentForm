
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data insert and disply </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="conterner">
        <form action="backend.php" method="post">
            <h1>Form insert</h1>
            <div class="inputgroup">
                <label>Roll No.</label> <br>
                <input type="number" name="roll" id="roll" >
            </div>
            <div class="inputgroup">
                <label>Student Name</label><br>
                <input type="text" name="name" id="name" >
            </div>
            <div class="inputgroup">
                <label>City</label><br>
                <input type="text" name="city" id="city" >
            </div>
            <div class="inputgroup">
                <label>Sate</label><br>
                <input type="text" name="sate" id="sate" >
            </div>
            
            <div class="inputgroup">
                <label>Address</label><br>
                <textarea name="address" id="address"></textarea>
            </div><br>
            <input type="submit" name="submit" class="submit">
        </form>
    </div>
    
    <div class="conterner1">
    <?php
    $servername="localhost";
    $username="Harshad";
    $password="Harshad041104";
    $database="student1";
    
    //Create a connection  
    $conn =mysqli_connect($servername,$username,$password,$database);

    
    $mysql="SELECT * FROM `student1`";
    $myresult=mysqli_query($conn,$mysql);
    
    $num=mysqli_num_rows($myresult);
    echo "<table style='margin: 0px;'>
    <tr><td><b>No</b></td><td><b>Roll No</b></td><td><b>Name</b></td><td><b>City</b></td><td><b> Sate</b></td><td><b>Adrees</b></td></b></tr>
  
    ";
    if ($myresult->num_rows > 0) {
        for($i=1;$i<=$num;$i++){
        
        while($row = $myresult->fetch_assoc()) {
          
            echo "<tr><td>
            <b>$i.  <b></td><td>" . $row["roll"]. " </td><td> " . $row["name"]. " </td><td> " . $row["city"]. "</td><td> " . $row["sate"]. "</td><td>" . $row["address"]. "</td></tr><br>
            ";
            $i++;
        }
       }
    } 
    echo "</table>";
    ?>
    </div>
    
</body>
</html>