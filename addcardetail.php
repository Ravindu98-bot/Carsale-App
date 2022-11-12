<?php
    session_start();
    $db_name = "19it535";
    $connection = mysqli_connect("localhost","root","",$db_name);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD Car Details</title>

<style>
a{
    margin: 0 0 0 1250px;
    font-weight: bold;
    color: red;
    font-family: Arial;
}
a:hover{
    color: lightblue;
}
.title{
    margin: 100px 0 0 370px;
    font-size: 50px;
    color: blue;   
}
.form{
    width: 250px;
    height: 400px;
    background-color: rgba(236, 28, 28, 0.6);
    margin-top: 40px;
    margin-left: 450px;
    padding: 35px;
    margin: auto;
    border-radius: 35px;
    
 }
.control{
    width: 100%;
    padding: 8px 0;
    margin:5px 0;
    border-left: 0;
    border-top: 0;
    border-right: 0;
    border-bottom: 2px solid red;
    outline: none;
    background: transparent;
}
.btn{
    display: block;
    color: red;
    outline: blue;
    padding: 5px 15px;
    border-radius: 10px;
    cursor: pointer;
}
.btn:hover{
    color: blue;
}
label{
    font-family: helvetica;
    font-weight: bold;
}
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
    <a href="index.php">Home</a>
<h3 class="title">Add Your Car Details Here</h3>
        
    <div class="form">
            <form action="addcar_action.php" method="POST" enctype='multipart/form-data'>
                
                    <label>Brand : </label>
                    <input type="text" name="Brand" class="control">

                    <label>Model : </label>
                    <input type="text" name="Model" class="control">

                    <label>Image : </label>
                    <input type="file" name="image">

                    <label>Price : </label>
                    <input type="text" name="price" class="control">

                    <label>Condition :(Rgistered/Unregistered/Brandnew) </label>
                    <input type="text" name="Condition" class="control">

                    <label>description : </label>
                    <input type="text" name="description" class="control">
                
                    <input type="submit" class="btn" name="Add" value="Add">    
                
            </form>
    </div>
    <div style="clear: both"></div>

    <div style="width: 100%">
        <h2>Get Your Car HERE</h2>
        <?php
            $query = "select * from carlist order by id asc";
            $result = mysqli_query($connection,$query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                    ?>
                    <div class="col-md-3" style="float: left;">
                        <form method="post" action="addcar_action.php?action=add&id=<?php echo $row["id"];?>">
                            <div class="cars">
                                <img src="<?php echo $row["image"];?>" width="190px" height="180px" class="img-responsive">
                                <h5><?php echo $row["Model"];?></h5>
                                <h5><?php echo $row["price"];?></h5>
                                <h5><?php echo $row["Brand"];?></h5>
                                <h5><?php echo $row["Condition"];?></h5>
                                <h5><?php echo $row["description"];?></h5>
                                  
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

