<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
	<head>
	  <title>Portfolio</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <script src  ="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>  
        <link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	</head>
    <header>
       <nav>
            <ul>
                <li><a href="index2.php" class='topnav-icons fa fa-home'>Home</a></li>
                <li><a href="#tab1" class='topnav-icons fa fa-user'>Profile</a></li>
                <li><a href="#tab1" class='topnav-icons fa fa-trophy' >Skills</a></li>
                <li><a href="#tab1" class='topnav-icons fa fa-picture-o' >Work</a></li>
                <li><a href="#tab1" class='topnav-icons fa fa-file'>Resume</a></li>
                <a href="logout.php" class="btn btn-info btn-lg">
                <span class="glyphicon glyphicon-log-out"></span> Log out
                </a>
            </ul>
            <div class="handle">Menu</div>
        </nav>
    </header>
    <body>
    <div id="main">
      <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="images/crio.png" alt="Crio" >
                  <div class="carousel-caption">
                  </div>
                </div>

                <div class="item">
                  <img src="images/1.jpg" alt="Crio">
                  <div class="carousel-caption">
                  </div>
                </div>
              
                <div class="item">
                  <img src="images/2.jpg" alt="Crio">
                  <div class="carousel-caption">
                  </div>
                </div>

                <div class="item">
                  <img src="images/3.jpg" alt="Crio">
                  <div class="carousel-caption">
                  </div>
                </div>
              </div>
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
    </div>
    </body>
    <script type="text/javascript">
        $('.handle').click(function(){
            $('nav ul').toggleClass('showing');
        });
    </script>
</html>