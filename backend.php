<?php
//Connection to the Database
$servername="localhost";
$username="Harshad";
$password="Harshad041104";
$database="student1";

//Create a connection  
$conn =mysqli_connect($servername,$username,$password,$database);

//Die if connection was not successful
if(!$conn){
    die("<script>alert('Sorry we failed to connect:');</script>". mysqli_connect_error());
}else{
    echo "<script>alert('Connection was successful');</script>";
}

$roll=$_POST['roll'];
$name=$_POST['name'];
$city=$_POST['city'];
$sate=$_POST['sate'];
$contect=$_POST['contect'];
$address=$_POST['address'];

$sql="INSERT INTO `student1` (`roll`, `name`, `city`, `sate`, `contectno`, `address`) VALUES ('$roll', '$name', '$city', '$sate', '$contect', '$address')";
$result=mysqli_query($conn,$sql);

if($result){
    echo "<script>alert('The data is insert in to data base');</script>";
}else{
    echo "<script>alert('The data is not insert in to data base');</script>". mysqli_error($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $mysql="SELECT * FROM `student1`";
    $myresult=mysqli_query($conn,$mysql);
    
    $num=mysqli_num_rows($myresult);
    echo "$num<br>";
    echo "<table style='margin: 0px;'>
    <tr><td>Name</td><td>Email ID</td><td> Password</td>
    ";
    if ($myresult->num_rows > 0) {
        for($i=1;$i<=$num;$i++){
        
        while($row = $myresult->fetch_assoc()) {
          
            echo "<tr><td>
            <b>$i. Roll No :</b>" . $row["roll"]. " </td><td><b>Name:</b> " . $row["name"]. " </td><td><b>City:</b> " . $row["city"]. "</td><td><b>Sate:</b> " . $row["sate"]. "</td><td><b>Contect:</b> " . $row["contect"]. "</td><td><b>Adress:</b> " . $row["address"]. "</td></tr><br>
            ";
            $i++;
        }
       }
    } 
    echo "</table>";
    ?>
</body>
</html>