<?php

session_start();
require'Databaseconnection.php';


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zomato Restaruants</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
   <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
   <script src="timing.js" type="text/javascript"></script>   


   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- css files--> 
    <link rel="stylesheet" href="./css/welcome.css" type="text/css">

    <script type="text/javascript">
    $(document).ready(function(){
	$(".dropdown, .btn-group").hover(function(){
		var dropdownMenu = $(this).children(".dropdown-menu");
		if(dropdownMenu.is(":visible")){
			dropdownMenu.parent().toggleClass("open");
		}
	});
});		
</script>
<style type="text/css">
.bs-example{
	margin: 20px;
}
@media screen and (min-width: 768px) {
  .dropdown:hover .dropdown-menu, .btn-group:hover .dropdown-menu{
		display: block;
	}
	.dropdown-menu{
		margin-top: 0;
	}
	.dropdown-toggle{
		margin-bottom: 2px;
	}
	.navbar .dropdown-toggle, .nav-tabs .dropdown-toggle{
		margin-bottom: 0;
	}
}
</style>


</head>
<body style="background: #F3F3F3;">
   
<nav class="nav navbar-inverse">
    <div class="container-fluid" style="background-color:#fe0038;">
    <div class="row">
        <div class="col-lg-4">
            <div class="navbar-header">
            <a class="navbar-brand" href="#"><img src="./images/zomatologo.png"alt="logo" style="width:60%; height 60%;"></a>    
            </div>
        </div>
        <div class="col-lg-4">
                <div class="search h">
                    <form class="form-group" method='POST' action="welcome.php">
                        
                 <input type="text" class="searchbar " placeholder="search restaruant">
                 <button type="submit"  class="navsearch"role="button">search</button>
                    </form>
                   
                </div>
        </div>
    <div class="col-lg-2">
        <div class="accounticon">
            
            <ul>
                     <li class="dropdown">
                        <a  style="color:black;"href="#" data-toggle="dropdown" class="dropdown-toggle"><span><img  class="imgaccount"src="https://img.icons8.com/plasticine/100/000000/gender-neutral-user.png" style="width:50%heigth:50%;"> <?php echo $_SESSION['username']?></span> <b class="caret"></b></a>
                        <ul  style="text-align:center"class="dropdown-menu">
                            <li><a style="color:black;" href="#">Profile</a></li>
                            <li><a style="color:black;" href="#">My orders</a></li>
                            <li><a  style="color:black;"href="Logout.php">Log Out</a></li>
                        </ul >
                    </li>
                </ul>
        </div>
    </div>
    <div class="col-lg-2">
            <div class="cart h">
               
               <a style="color:white;" href="#"><img  class="cartimg" src="./images/cart1.png" alt="icon logo"> <?php echo "0";?></a>
                

            </div>
    </div>
        
</div>
</div>
</nav>


    <div class="container-fluid nav2">
        <div class="nav2">
    
            <div class="row">
                <div class="col-lg-2">
                    <div class="belowheader">
                    <span ><img class="appicon" src="./images/appicon.png">Get the app</span>
                    </div>
                </div>
            <div class="col-lg-2">
                

                <div class="dropdown belowheader">
                        <a class="dropbtn">Staters</a>
                            <div class="dropdown-content">
                                <a href="#">Veg-staters</a>
                                <a href="#">Non-veg staters</a>
                                <a href="#">Liquid staters</a>
                               
                             </div>
                </div>


            </div>
            <div class="col-lg-2">
                <div class="dropdown belowheader">
                        <a class="dropbtn">Vegeterian</a>
                            <div class="dropdown-content">
                                <a href="#">Leafy-Greens</a>
                                <a href="#">salads</a>
                                <a href="#">solidFood</a>
                                
                             </div>
                 </div>
            
            
            </div>
            

            <div class="col-lg-2">
                <div class="dropdown belowheader">
                        <a class="dropbtn">Non-veg</a>
                            <div class="dropdown-content">
                                <a href="#">Chicken</a>
                                <a href="#">Mutton</a>
                                <a href="#">Fish</a>
                                <a href="#">seaFood</a>
                             </div>
                 </div>
            </div>

            <div class="col-lg-2">
                    <div class="dropdown belowheader">
                        <a class="dropbtn">Deserts</a>
                            <div class="dropdown-content">
                                <a href="#">Buckets</a>
                                <a href="#">Fresh ice creams</a>
                                <a href="#">Cones</a>
                                <a href="#">Sticks(Bars)</a>
                                <a href="#">Cakes</a>

                            </div>
                    </div>


            </div>
            <div class="col-lg-2">
                     <div class="dropdown belowheader">
                                <a class="dropbtn"> Beers&Beverages</a>
                            <div class="dropdown-content">
                                <a href="#">Beers</a>
                                <a href="#">Beverages</a>
                             </div>
                     </div>
            </div>





            </div>
        </div>



    </div>


<div class="container-fluid">


<div class="row">
		<h2>Carousel with text and transition timer.</h2>
	</div>
    
    <div class="row">
        <!-- The carousel -->
        <div id="transition-timer-carousel" class="carousel slide transition-timer-carousel" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#transition-timer-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#transition-timer-carousel" data-slide-to="1"></li>
				<li data-target="#transition-timer-carousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
                    <img src="http://placehold.it/1200x400" />
                    <div class="carousel-caption">
                        <h1 class="carousel-caption-header">Slide 1</h1>
                        <p class="carousel-caption-text hidden-sm hidden-xs">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim aliquet rutrum. Praesent vitae ante in nisi condimentum egestas. Aliquam.
                        </p>
                    </div>
                </div>
                
                <div class="item">
                    <img src="http://placehold.it/1200x400/AAAAAA/888888" />
                    <div class="carousel-caption">
                        <h1 class="carousel-caption-header">Slide 2</h1>
                        <p class="carousel-caption-text hidden-sm hidden-xs">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim aliquet rutrum. Praesent vitae ante in nisi condimentum egestas. Aliquam.
                        </p>
                    </div>
                </div>
                
                <div class="item">
                    <img src="http://placehold.it/1200x400/888888/555555" />
                    <div class="carousel-caption">
                        <h1 class="carousel-caption-header">Slide 3</h1>
                        <p class="carousel-caption-text hidden-sm hidden-xs">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim aliquet rutrum. Praesent vitae ante in nisi condimentum egestas. Aliquam.
                        </p>
                    </div>
                </div>
            </div>

			<!-- Controls -->
			<a class="left carousel-control" href="#transition-timer-carousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#transition-timer-carousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
            
            <!-- Timer "progress bar" -->
            <hr class="transition-timer-carousel-progress-bar animate" />
		</div>
    </div>

       












</div>

    
        








    
    
    
</body>
</html>