<?php 
session_start();

session_destroy();


echo "<html>
<body>
<h1> You have succesfully logged out!</h1>
<a  style ='color:red; text-decoration:none;'href='index.php' > click here to visit us again !</a>

</body>
    </html>
"



?>