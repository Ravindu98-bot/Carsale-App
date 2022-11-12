<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <style>
        th{
            background-color: lightgreen;
            color: red;
            font-family: arial;
        }
        td{
            background-color: lightgreen;
            color: black;
            font-family: helvetica;
        }
    </style>
</head>
<body>
    <center>
        <form action="" method="post" enctype="multipart/form-data">
            <table width="75%" border="1" cellpadding="5" cellspacing="5" >
                        <thead>
                            <tr>
                            <th>image</th>  
                            <th>Brand</th>
                            <th>Model</th>
                            <th>Condidition</th>
                            <th>Price</th>
                            <th>description</th>
                            </tr>
                        </thead>
                <?php
                if(isset($_POST['Search'])){
                $Brand=$_POST['Brand']; 
                $Model=$_POST['Model'];

                if($Brand !="" && $Model !=""){ 
                $Conn=mysqli_connect("localhost","root","","19it535");
                $query="SELECT * FROM carlist WHERE Brand='$Brand' AND Model='$Model'";
                $data=mysqli_query($Conn,$query) or die('error');
                if(mysqli_num_rows($data) >0){ 


                    while($row=mysqli_fetch_array($data))
                {
                    ?>
                    <tr>
                    <td><img src="<?php echo $row["image"];?>" width="150px" height="150px";></td>
                    <td><?php echo $row['Brand']; ?></td>
                    <td><?php echo $row['Model']; ?></td>
                    <td><?php echo $row['Condition']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    </tr>

                <?php

                } 
                }
                else {echo "You are enter wrong deatils";?>
                <tr>
                    <td> Error </td>
                    <td> Error </td>
                    <td> Error </td>
                    <td> Error </td>
                    <td> Error </td>
                    <td> Error </td>
                    </tr>
                <?php
                } 
                }
                }
                ?>
        </table>
        </form>
    </center>
</body>
</html>
