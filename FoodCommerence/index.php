<?php  
session_start();

require'Databaseconnection.php'; 

$lphnum;
     $lpass;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
          testinput();
          $decrpt_pass= md5($lpass);
          $sql= "select * from registration where phnum='$lphnum' and password='$decrpt_pass';";
          echo $sql;
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              $ousername="";
             $sql2="select * from registration where phnum='$lphnum' and password='$decrpt_pass';";
               $result=$conn->query($sql);
               while($row = $result->fetch_assoc()) {
                   $ousername =$row["username"];
            }

               $_SESSION['username']=$ousername;
          }
          if ($result->num_rows > 0) {
               
                header("Location: welcome.php"); 

               


          
        
        }else{
            echo'<html>
            <body>
             <div>
             <h3 style="color:red;  font-style: italic;">Oops! looks like  you  have entered invalid MobileNumber or password.</h3>
             </div>
            </body>
            ';
        
        }

    


    }
      function testinput(){
        global $lphnum;
        global $lpass;
       $lphnum =strip_tags($_POST['email']);
        $lpass=strip_tags($_POST['pass']);
      }


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zomato Restaurants</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>   
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="main.js"></script>
    <!-- css files -->
    <link rel="stylesheet" href="./css/index.css" >

</head>
<body style="background-image: url('./images/Homebackground.jpg');">
<div class="container">
    <div class="wrapper fadeInDown">
    <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="./images/logo.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form method='POST' action='<?php echo $_SERVER['PHP_SELF']; ?>'> 
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="Mobile Number">
      <input type="text" id="password" class="fadeIn third" name="pass" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

      <!-- Register link -->
        <div id ="formFooter">
            <a class="underlineHover" href="Registration.php">Not a memeber yet? Register Here</a>
       </div>
       <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>








</div>    
</body>
</html>