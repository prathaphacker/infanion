<?php
require'Databaseconnection.php'; 
// initializing variables 
$error=false;
$trace=0;
$errorarray =array();
$firstname=$lastname=$username=$Email=$pass=$phnum=$repass="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    test_input(); 
    if(!preg_match('/^[6-9]\d{9}$/',$phnum)&& strlen($phnum)<10){
        $phnum_e="Plz enter valid number starts with 6,7,8,9";
        array_push($errorarray,$phnum_e);
       }
       if ( !preg_match('/^[A-Za-z][A-Za-z0-9]{5,31}$/', $username) ){
        $username_e="username must have combination of alpha and num";
        array_push($errorarray,$username_e);
        
        }
    if(!preg_match('/^[a-zA-Z]{4,}$/', $firstname)) {
        $firstname_e="plz enter only alphabets";
        array_push($errorarray,$firstname_e);
        
    }


    if(!preg_match('/^[a-zA-Z]{4,}$/', $lastname)) {
    $lastname_e=" plz enter only alphabets";
    array_push($errorarray,$lastname_e);
  
    }
    if(strcmp($pass,$repass)){
    $pass_e="Both password should match";
    array_push($errorarray,$pass_e);
    
    }
    if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $Email)){
       
       $Email_e="Enter valid email";
       array_push($errorarray,$Email_e);
    }
   
    checkexist();
    $decrpt_pass= md5($pass);

      echo $trace;
   if(count($errorarray)==0&&$trace==0){
      
       //insert into DB
      $sql="insert into registration VALUES('$phnum','$username','$firstname','$lastname','$Email','$decrpt_pass');";
      if ($conn->query($sql) === TRUE) {
           echo "<script type='text/javascript'>alert('succes! Log In');</script>";
    
        }
   }else{
           foreach ($errorarray as $errors) {
               echo "<div class='error' style='background-color:red; width:28%'>";
                     echo $errors. '<br>';
               
                     echo '</div>';
           }
   }
      







}
function test_input(){
    global $phnum;
    global $firstname;
    global $lastname;
    global $lastname;
    global $username;
    global $Email;
    global $pass;
    global $repass;
      $firstname =strip_tags( trim($_POST['firstname']));
      $lastname = strip_tags(trim($_POST['lastname']));
      $username= strip_tags(trim($_POST['username']));
      $Email =strip_tags(trim($_POST['email']));
      $phnum=strip_tags(trim($_POST['phnum']));
      $pass=strip_tags(trim($_POST['password']));
      $repass = strip_tags(trim($_POST['repassword']));
     
  }
  function checkexist(){
  
    $dup_email;
    $dup_phnum;
    global $Email;
    global $conn;
    global $phnum;
    global $error;
  global $trace;
      $mysql = "select * from registration where email ='$Email';";
      $result = $conn->query($mysql);
    $trace=0;
      if($result->num_rows > 0){
        $error= true;
        $dup_email="email";
        $trace++;
     
            
        
        
        }
        $mysql1 = "select * from registration where  phnum  ='$phnum';";
        $result1 = $conn->query($mysql1);
        
        if($result1->num_rows > 0){
          $error= true;
          $dup_phnum="phone number";
          $trace++;
        }
        
        if($trace!=0){
         
        echo "<html>
        <body>
        <h3  style='color:red;'>oops! your $dup_email $dup_phnum is already registered with us. Please login in</h3>
    
    
        </body>
        </html>";
        }
      
      }







?> 

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zomato Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>   
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="main.js"></script>
    <!-- CSS FILES -->
    <link rel="stylesheet" type="text/css" media="screen" href="./css/registration.css">
   
</head>
<body style="  background-image: url('./images/registrationbgimage.jpg');">
<div class="container">
    

    
<div class="wrapper fadeInDown">
    <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="./images/logo.png" id="icon" alt="User Icon" />
    </div>

    <!-- Registration Form -->
    <form method='POST' action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <input type="text" name="firstname" id="fn"  class="fadeIn second"placeholder="Firstname"  >
   
    <input type ="text" name="lastname" id="ln" class="fadeIn third"  placeholder ="Lastname" >
   
    <input type="text" name="username" id="un"  class="fadeIn fourth"  placeholder="Username" >
   
    <input type="text"  name="email" id="em"  placeholder="Email" >
  
    <input type="number" name="phnum" id="ph" style="background-color:white;" placeholder="+91">
  
    <input type="password" name = "password"  style="background-color:white; "placeholder="Password" >
  
    <input type="password" name="repassword"id="repas" style="background-color:white;"   placeholder="Re-enter Password" > 
    
    <input type='submit' class="fadeIn sixth" value="Register">
    </form>
     <a class="underlineHover"  style ="color:#5baed;;"href="index.php"><h4>Log In Here</h4></a>
   

  </div>
</div>














</div>
</body>
</html>