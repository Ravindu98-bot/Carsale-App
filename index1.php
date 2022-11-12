<?php
    session_start();
    $db_name = "19it535";
    $connection = mysqli_connect("localhost","root","",$db_name);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUY CAR</title>

    <style>
        .cars{
            border: 1px solid black;
            margin: 2px 45px 8px 20px;
            padding: 12px;
            text-align: center;
            background-color: rgba(236, 146, 146, 0.6);
        }
        table,th,tr{
              text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: blue;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: white;
            background-color: blue;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
        h5{
            font-size: 15px;
        }
    </style>
</head>
<body>
    <div style="width: 100%">
        <h2>Get Your Car HERE</h2>
        <?php
            $query = "select * from carlist order by id asc";
            $result = mysqli_query($connection,$query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                    ?>
                    <div class="col-md-3" style="float: left;">
                        <form method="post" action="index.php?action=add&id=<?php echo $row["id"];?>">
                            <div class="cars">
                                <img src="<?php echo $row["image"];?>" width="190px" height="180px" class="img-responsive">
                                <h5 class="text-info"><?php echo $row["Model"];?></h5>
                                <h5 class="text-danger"><?php echo $row["price"];?></h5>
                                <h5><?php echo $row["Brand"];?></h5>
                                <h5><?php echo $row["Condition"];?></h5>
                                <h5><?php echo $row["description"];?></h5>
                                <input type="hidden" name="hidden_name" value="<?php echo $row["Model"];?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>">    
                            </div>
                        </form>
                    </div>
        <?php
                }
            }
        ?>

        <div style="clear: both"></div>
        <h2>You can ADD your car advertisement after Registering</h2>

</body>
</html>