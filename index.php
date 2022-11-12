<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME page-carsale</title>
    <link href="" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
</head>
<body>

<div class="wrapper">
        <div class="header fl">
            <div class="sub-header">
                    <div class="top-header">
                        <div class="logo fl">
                            <p>Ru--<span>Motors</span></p>
                        </div>
                        <div class="nav fr">
                            <ul>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="regform.php">Register</a></li>
                            </ul>
                        </div>
                    </div>
        </div>

            <div class="bttm">
                <div class="btn-head fl">
                    <h1 class="hr1">Find The</h1>
                    <p class="text">Best Vehicle</p>
                    <h1 class="hr2">For You</h1>
                    <div class="drp">
                    </div>    
                    <?php
                
                    $conn = mysqli_connect("localhost","root","","19it535");
                    $sql = "SELECT distinct Brand FROM carlist";
                    $result = mysqli_query($conn, $sql);

                    ?>

                    <form action="search.php" method="POST" enctype="multipart/form-data">

                        <div class="drp1">
                            Brand : 
                            <select name="Brand">
                            <?php while ($row = mysqli_fetch_array($result)){
                            ?>
                                <option value="<?php echo $row['Brand'];?>"> <?php echo $row['Brand']; ?> </option>
                            <?php 
                            }
                            ?>   
                            </select>
                        </div>

                    <?php

                        $conn = mysqli_connect("localhost","root","","19it535");
                        $sql = "SELECT distinct Model FROM carlist";
                        $result = mysqli_query($conn,$sql);
    
                    ?>

                        <div class="drp2">
                            Model :
                            <select name="Model">
                            <?php while ($row = mysqli_fetch_array($result)){
                            ?>
                                <option value="<?php echo $row['Model'];?>"> <?php echo $row['Model']; ?> </option>
                            <?php 
                            }
                            ?>   
                            </select>
                        </div>

                            <input class="bcom" type="submit" value="Search" name="Search">
                    </form>
                    </div>    
                    
                 

        
</div>

<div class="footer">
    <div class="ff">
        <div class="text1">Copyright &copy; 2021</div>
        <div class="text2">Design by Ravindu_Umayanga</div>
    </div>
</div>

</body>
</html>