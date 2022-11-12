<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Registration</title>
    <style>
    *{
    margin:0;
    padding:0;
    }
   body{
         
      background-image: url(Assets/cars2.jpg);
      margin-top:40px;
      background-position:center;
      background-size:cover;
      font-family:sans-serif;
      }
  
     .regform{
      width:800px;
      background-color:rgba(170, 14, 14, 0.6);
      margin:auto;
      color:#070606;
      padding:10px 0px 10px 0px;
      text-align:center;
      border-radius:15px 15px 0px 0px ;
      }  
    .main{
      background-color:rgba(8, 7, 7, 0.5);
      width:800px;
      margin:auto;}
    
    form{
      padding:10px;
     
    } 
    
    #name{
      width:100%;
      height:100px;
      
      }  
    .name{
     margin-left:25px;
     margin-top:30px;
     width: 125px;
     color: white;
     font-size: 18px;
     font-weight: 700;}
  .firstname{
         position: relative;
         left:200px;
         top:-37px;
         line-height: 40px;
         border-radius: 6px;
         padding: 0 22px;
         font-size: 16px;
         
         }
  .lastname{
         position: relative;
         left:417px;
         top:-80px;
         line-height: 40px;
         border-radius: 6px;
         padding: 0 22px;
         font-size: 16px;
         color:#555;       
                    }  
   .firstlabel{
      position: relative;
      color:#E5E5E5;    
      text-transform: capitalize;
      font-size: 14px;
      left:203px;
      top:-45px;
     }   
  .lastlabel{
     position: relative;
     color:#E5E5E5;
     text-transform:capitalize;
     font-size:14px;
     left:492px;
     top:-76px;
       } 
   .ish{
      position: relative;
      left:200px;
      top:-35px;
      line-height: 40px;
      width:480px;
      border-radius: 6px;
      padding: 0px 20px;
      font-size: 16px;
      color: #555;  
      }     
   .check-box{
      margin: 20px -250px 10px -250px;
        }
      span{
      color: rgb(241, 242, 243);
      font-size: 12px;
      margin: 20px 0px 0px 250px;
      position: absolute;
        }
 
      button{
      background-color:#3BAF9F;
       display:block;
       margin:20px 0px 0px 20px;
       text-align:center;
       border-radius:12px;
       border:2px solid #366473;
       padding:14px 110px;
       outline:none;
       color:white;
       cursor:pointer;
       transition:0.25px;
      } 
     button:hover{
      background-color: #5390F5;
        }  
    
    </style>
</head>
<body>
<div class="regform"><h1>Registration Form</h1></div>
<div class="main">
    
    <form action="reg_action.php" method="POST">
            <div id="name">
                <h2 class="name">Name </h2>

                <input class="firstname" type="text" name="firstname" required><br>
                <label class="firstlabel" for="firstname" required>first name</label>

                <input class="lastname" type="text" name="lastname"><br>
                <label class="lastlabel" for="lastname">last name</label>
            </div>

                <h2 class="name">NIC</h2>
                <input class="ish" type="text" name="nic" required>

                <h2 class="name">City(home-town)</h2>
                <input class="ish" type="text" name="city" required>

                <h2 class="name">Email</h2>
                <input class="ish" type="email" name="email" required>

                <h2 class="name">Password</h2>
                <input class="ish" type="password" name="password" required>

                <h2 class="name">Re-type password</h2>
                <input class="ish" type="password" name="repassword" required>

                <input type="checkbox" class="check-box" ><span>I Agree To The Terms & Conditions</span>

            
        <button type="submit">Register</button>       
    </form>
</div>
</body>
</html>