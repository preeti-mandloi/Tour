<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: logout.php");
  }
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>

    
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" type="text/css" href="css/style.css">
  
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	</head>
  
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
 
    <div class="navbar-header">
      <a class="navbar-brand" href="#">MY INDIA</a>
    </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </nav>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/Gems-of-Arunachal.jpg" alt="Tawang, Andra Pradesh" style="width:1550px;height:700px;">
        <div class="carousel-caption">
          <h3>Tawang, Andra Pradesh</h3>
          <p>Thank You For Tawang</p>
        </div>
      </div>

      <div class="item">
        <img src="images/rj.jpg" alt="Jaisalmer, Rajsthan" style="width:1550px;height:700px;">
        <div class="carousel-caption">
          <h3>Jaisalmer, Rajsthan</h3>
          <p>Thank You For Jaisalmer</p>
        </div>

      </div>
    
      
      <div class="item">
        <img src="images/tj.jpg" alt="Taj-Mahal, Agra" style="width:1550px;height:700px;">
        <div class="carousel-caption">
          <h3>Taj-Mahal, Agra</h3>
          <p>Thank You For Taj-Mahal</p>
        </div>

      </div>
    
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<section class="my-5">
  <div class="py-4">
    <h2 class="text-center"></h2>
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6">
      <img src="images/in.jpg" style="width:700px;height:320px;">
    </div>
     <div class="col-lg-6 col-md-6">
      <h1>OUR INDIA</h1>
      <p>Tourism in India has shown a phenomenal growth in the past decade. One of the reasons is that the Ministry of tourism, India has realized the immense potential of tourism in India during vacations. India travel tourism has grown rapidly with a great influx of tourists from all across the globe who have been irresistibly attracted to the rich culture, heritage, and incredible natural beauty of India. India tourism with its foggy hill stations, captivating beaches, historical monuments, golden deserts, serene backwaters, pilgrimage sites, rich wildlife, and colourful fairs capture the heart of every tourist. In addition, a variety of festivals, lively markets, vibrant lifestyle, and traditional Indian hospitality, will make your experience as an india tourist truly unforgettable and fantastic. Travel through the lovely Indian states and discover closely the resplendent colors and rich cultural locales of this incredible land. Our India tourism guide provides you a glimpse of travel and tourism in india ,india tourism information about south india tourism, north India tourism, and all the major tourist destinations, and tourism services of India.</p>
      <a href="about.php" class="btn btn-danger" >Check More</a>
    </div>
  </div>
</div>
</div>
</section>
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Places For Visit</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4">

        <div class="card">
          <img class="card-img-top" src="images/leh.jpg" alt="Card image" style="width:450px;height:210px;">
            <div class="card-body">
              <h4 class="card-title">Hill Station</h4>
              <p class="card-text">View of the Nature</p>
              <a href="hill_station.php" class="btn btn-danger">See Profile</a>
            </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="card">
          <img class="card-img-top" src="images/Rann-of-Kutch.jpg" alt="Card image" style="width:450px;height:210px;">
            <div class="card-body">
              <h4 class="card-title">White Desret</h4>
              <p class="card-text">View of rann fastival</p>
              <a href="desert.php" class="btn btn-danger">See Profile</a>
            </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="card">
          <img class="card-img-top" src="images/mysorepalace.jpg" alt="Card image" style="width:450px;height:210px;">
            <div class="card-body">
              <h4 class="card-title">Mysorepalace</h4>
              <p class="card-text">Historic Palace</p>
              <a href="historic.php" class="btn btn-danger">See Profile</a>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <h2 class="text-center"></h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4">
        
        <div class="card">
          <img class="card-img-top" src="images/beach.jpg" alt="Card image" style="width:450px;height:210px;">
            <div class="card-body">
              <h4 class="card-title">Goa</h4>
              <p class="card-text">Beach</p>
              <a href="beach.php" class="btn btn-danger">See Profile</a>
            </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="card">
          <img class="card-img-top" src="images/wildlife.jpg" alt="Card image" style="width:450px;height:210px;">
            <div class="card-body">
              <h4 class="card-title">WildLife</h4>
              <p class="card-text">Wildlife Parks</p>
              <a href="park.php" class="btn btn-danger">See Profile</a>
            </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="card">
          <img class="card-img-top" src="images/kumbh.jpg" alt="Card image" style="width:450px;height:210px;">
            <div class="card-body">
              <h4 class="card-title">Kumbh Mela</h4>
              <p class="card-text">Devotional Places</p>
              <a href="divotional.php" class="btn btn-danger">See Profile</a>
            </div>
        </div>
      </div>
    </div>
  </div>
  
</section>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</body>
</html>

