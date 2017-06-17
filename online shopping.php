<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.28/angular.min.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.28//angular-route.min.js"></script>
  
  <script src="olshopping.js"></script>
  <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery/jquery-1.6.2.min.js">
  </script>
  
<!--<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">-->

<style type="text/css">
	body {
      position: relative; 
  }
  .affix {
      top:0;
      width: 100%;
      z-index: 9999 !important;
  }
  .navbar {
      margin-bottom: 0px;
  }

  .affix ~ .container-fluid {
     position: relative;
     top: 50px;
  }

	.img-thumbnail{
		padding-top: 50px;
		height: 500px;
		color: #fff; background-color: #1E88E5;
		margin-top: 50px;

	}

	.carousel-inner > .item > img,
  	.carousel-inner > .item > a > img {
      width: 30%;
      margin: auto;

  }
  #footer{
  	margin-top: 50px;
  	height: 100px;
  	background-color: #AAEEDD;
  }
</style>
<!--<link rel="stylesheet" href="/bootstrap/custom.css">-->

<script type="text/javascript">
$(document).ready(function(){
$("#submit").submit(function() {
var name = $('#name').val();
$.ajax({
type: "POST",
url: "ins.php",
data: "name="+ name ,
success: function(){
alert("sucess");
}
});

});
});
</script>




</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">


	
		
		
	<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="30">
			<div class="container-fluid">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-target="#mainNavbar" data-toggle="collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="mainNavbar">
				<ul class="nav navbar-nav">
				<li class="active" ><a href="#men">Men</a></li>
				<li ><a href="women.html">Women</a></li>
				<li><a href="#kids">Kids</a></li>
				</ul>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" id="name" class="form-control" placeholder="Search">
					</div>
					<button type="Submit"  class="btn btn-default">Submit</button>



				</form>
			</div>
			</div>
		</nav>


		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>

			<!--wrapper for slides-->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="images/athena.jpg" alt="dresses" width="200" height="200">
				</div>
					
					<div class="item">
					<img src="images/evan.jpg" alt="dresses" width="200" height="200">
					</div>

					<div class="item">
					<img src="images/multicolored.jpg" alt="dresses" width="200" height="200">
					</div>

					<div class="item">
					<img src="images/rare.jpg" alt="dresses" width="200" height="200">
					</div>
				</div>

			<!--Left and Right Controls-->
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
	

		
		
		<div class="row" >
		<div class="col-lg-3 col-md-4 col-sm-6 col xs-12" class="container-fluid">
			
			<img src="images/athena.jpg" class="img-thumbnail"class="img-responsive"/><a href="#"><div>Athen<span class="badge">12</span></div></a>
			<div class="product">Women Dress</div></div>
			
			<div class="col-lg-3 col-md-4 col-sm-6 col xs-12" class="container-fluid">
			<img src="images/evan.jpg" class="img-thumbnail"class="img-responsive"/><a href="#"><div>Evan<span class="badge">12</span></div></a>
			<div class="product">Women Dress</div></div>
			
			<div class="col-lg-3 col-md-4 col-sm-6 col xs-12"class="container-fluid" >
			<img src="images/multicolored.jpg"class="img-thumbnail" class="img-responsive"/><a href="#"><div>MultiColored<span class="badge">12</span></div></a>
			<div class="product">Women Dress</div></div>
		
			
			<div class="col-lg-3 col-md-4 col-sm-6 col xs-12"class="container-fluid" >
			<img src="images/rare.jpg"class="img-thumbnail" class="img-responsive"/>
			<a href="#"><div>RARE<span class="badge">12</span></div></a>
			<div class="product">Women Dress</div></div>


			<div class="col-lg-3 col-md-4 col-sm-6 col xs-12" >
			<img src="images/Tokyo.jpg"class="img-thumbnail" class="img-responsive"/>
			<a href="#"><div>Tokyo<span class="badge">12</span></div></a>
			<div class="product">Women Dress</div></div>
		
		

		</div><br><br>
		<div style="text-align:center;">
		<button type="button" class="btn btn-primary">Show More Products</button>
		</div>
		</div>
		<form name="form1" action="ins.php" method="post"/>
		<p>Enter Comments</p>
		<input type="text" name="name" id="name" placeholder="Enter your requirements to remodel"/><br><br>

		<button type="submit" name="button" id="submit">SUBMIT</button>
		</form>
		<br><br>

		<p id="text"></p>

		

	
		<div class="panel panel-primary" id="footer">
			<div class="panel-footer">All @CopyRights are reserved</div>
		</div>
		


	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	 <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>