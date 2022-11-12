<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member List</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
            color: blue;
            font-family: sans-serif;
            font-size: 30px;
            text-align: left;
        }
        th{
            background-color: lightgreen;
            color: white;
        }
        tr:nth-child(even)

    </style>
</head>
<body>
 <table>
     <tr>
         <th>First name</th>
         <th>Last name</th>
         <th>City</th>
         <th>Email</th>
     </tr>
<?php 
$conn = mysqli_connect("localhost","root","","19it535"); 
?>
    
<?php 

$sql = "SELECT firstname,lastname,city,email FROM regmember";

$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row['firstname']."</td><td>".$row['lastname']."</td><td>".$row['city']."</td><td>".$row['email']."</td></tr>";

    }
    echo "</table>";
}else{
    echo "Not Working";
}

$conn->close();

?>
</table>
</body>
</html>