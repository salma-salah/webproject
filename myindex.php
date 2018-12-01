<?php

include("includes/db.php");

?>

<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
<link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->
<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->
<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
<link rel="shortcut icon" href="themes/images/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
<style type="text/css" id="enject"></style>

<link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="toys.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body >
<div>

   <nav class="navbar navbar-inverse">
        <div class="container-fluid" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>

                </button>

            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><img src="images/kotb.PNG" width="50%px" height="10%px"></li>
                    <li><div class="search-container" >
                 <form action="/action_page.php">
                  <input type="text" placeholder="Search.." name="search" id="searchtxt" >
                 <button type="submit"><i class="fa fa-search"></i></button>
                 </form>
                 </div></li>
                 </ul>
                 <ul class="nav navbar-nav navbar-right">

                    <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="loginn.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

	<div class="w3-padding-20 w3-large w3-text-grey" style="font-weight:bold">
	<a href="#av" class="w3-bar-item w3-button">most seller</a>
        <a href="#av2" class="w3-bar-item w3-button">islamic books</a>
        <a href="#av4" class="w3-bar-item w3-button">novels</a>
	<a href="#av3" class="w3-bar-item w3-button">english novels</a>

        <a href="borrow.html" class="w3-bar-item w3-button" id="borrow">borrowing details</a>

    </div>

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
       <center> <ol class="carousel-indicators">
         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
         <li data-target="#myCarousel" data-slide-to="1"></li>
         <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" id="cr1">
       <?php

                   $get_slides = "select * from slider LIMIT 0,1";

                   $run_slides = mysqli_query($con,$get_slides);

                   while($row_slides=mysqli_fetch_array($run_slides)){

                       $slideName = $row_slides['slideName'];
                       $slideimage = $row_slides['slideimage'];

                       echo "

                       <div class='item active'>

                       <img src='admin_area/slides_images/$slideimage'>

                       </div>

                       ";

                   }

                  $get_slides = "select * from slider LIMIT 1,2";

                   $run_slides = mysqli_query($con,$get_slides);

                   while($row_slides=mysqli_fetch_array($run_slides)){

                      $slideName = $row_slides['slideName'];
                      $slideimage = $row_slides['slideimage'];

                      echo "

                       <div class='item'>

                       <img src='admin_area/slides_images/$slideimage'>

                       </div>

                       ";

                  }

                   ?>
      </div>
    </div>   </center>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
	<br>
	<br>


	</div>
	 <div id="mainBody">
	<div class="container" >
	<div class="row" >
        <p>best seller</p>
   <div class="span9" id="av" >
			<div class="well well-small">
			<h4>most seller books <small class="pull-right"></small></h4>
	        <div class="row-fluid">
			<div id="featured" class="carousel slide">
			<div class="carousel-inner">
			  <div class="item active">
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>

					<a href="product_details.html"><img src="pampo.jpg" alt=""  height="300px;"></a>
					<div class="caption">
					<h5>saq elbambo</h5>
					<button class="btn btn-sm btn-default like-btn active" type="button" id="btn" >
                   <span class="glyphicon glyphicon-thumbs-up"></span>
             <span class="badge like-badge" id="s"></span>
             </button>
	     <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$20.00</span></h4>

				  </div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>

					<a href="product_details.html"><img src="chemists.jpg" height="300px;" alt=""></a>
					<div class="caption">
					  <h5>the chemist's</h5>
					   <button class="btn btn-sm btn-default like-btn active" type="button" id="btn" >
              <span class="glyphicon glyphicon-thumbs-up"></span>
             <span class="badge like-badge" id="s"></span>
             </button>
					  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$10.00</span></h4>

				  </div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>

					<a href="product_details.html"><img src="leankallah.jpg" height="300px;" alt=""></a>
					<div class="caption">
					  <h5>le ank allah</h5>
					   <button class="btn btn-sm btn-default like-btn active" type="button" id="btn" >
              <span class="glyphicon glyphicon-thumbs-up"></span>
             <span class="badge like-badge" id="s"></span>
             </button>
					   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$15.00</span></h4>
					</div>

				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>

					<a href="product_details.html"><img src="idiot.jpg" height="300px;" alt=""></a>
					<div class="caption">
					  <h5>idiotbrain</h5>
					   <button class="btn btn-sm btn-default like-btn active" type="button" id="btn" >
              <span class="glyphicon glyphicon-thumbs-up"></span>
             <span class="badge like-badge" id="s"></span>
             </button>
					   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$22.00</span></h4>
					</div>

				  </div>
				</li>
			  </ul>
			  </div>
			   <div class="item">
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details.html"><img src="zaglool.jpg" height="300px;" alt=""></a>
					<div class="caption">
					  <h5>tafseer</h5>
					   <button class="btn btn-sm btn-default like-btn active" type="button" id="btn" >
              <span class="glyphicon glyphicon-thumbs-up"></span>
             <span class="badge like-badge" id="s"></span>
             </button>
					  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$9.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details.html"><img src="light.jpg" height="300px;" alt=""></a>
					<div class="caption">
					  <h5>warrior of light</h5>
					   <button class="btn btn-sm btn-default like-btn active" type="button" id="btn" >
              <span class="glyphicon glyphicon-thumbs-up"></span>
             <span class="badge like-badge" id="s"></span>
             </button>
					  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$12.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a href="product_details.html"><img src="sad.jpg" height="300px;" alt=""></a>
					<div class="caption">
					  <h5>la tahzan</h5>
					   <button class="btn btn-sm btn-default like-btn active" type="button" id="btn" >
              <span class="glyphicon glyphicon-thumbs-up"></span>
             <span class="badge like-badge" id="s"></span>
             </button>
					   <h4><a class="tena" href="product_details.html">VIEW</a> <span class="pull-right">$10.00</span></h4>
					</div>
				  </div>
				</li>
				 </ul>
			  </div>
			  </div>
			  <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
			  <a class="right carousel-control" href="#featured" data-slide="next">›</a>
			  </div>
			  </div>

	</div>
	</div>


       <p>novels</p>
	   <div class="span9" id="av4" >
			<div class="well well-small">
			<h4>our novels <small class="pull-right"></small></h4>

	        <div class="row-fluid">
			<div id="featured" class="carousel slide">
			<div class="carousel-inner">
			  <div class="item active">
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>

					<a href="product_details.html"><img src="mafar.jpg" alt=""  height="300px;"></a>
					<div class="caption">
					  <h5>ayn elmafar</h5>
					  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$20.00</span></h4>

				  </div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>

					<a href="product_details.html"><img src="yout.jpg" height="300px;" alt=""></a>
					<div class="caption">
					  <h5>youtuobia</h5>
					  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$10.00</span></h4>

				  </div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>

					<a href="product_details.html"><img src="emago.jpg" height="300px;" alt=""></a>
					<div class="caption">
					  <h5>emago</h5>
					   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$15.00</span></h4>
					</div>

				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>

					<a href="product_details.html"><img src="kozah.jpg" height="300px;" alt=""></a>
					<div class="qous qozah">
					  <h5>lala</h5>
					   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$22.00</span></h4>
					</div>

				  </div>
				</li>
			  </ul>
			  </div>
			   <div class="item">
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details.html"><img src="t.jpg" height="300px;" alt=""></a>
					<div class="caption">
					  <h5>an tabqah</h5>
					  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$9.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details.html"><img src="s.jpg" height="300px;" alt=""></a>
					<div class="caption">
					  <h5>kony sahabia</h5>
					  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$12.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a href="product_details.html"><img src="y.jpg" height="300px;" alt=""></a>
					<div class="caption">
					  <h5>qhwaa blyouraniom</h5>
					   <h4><a class="tena" href="product_details.html">VIEW</a> <span class="pull-right">$10.00</span></h4>
					</div>
				  </div>
				</li>
				 </ul>
			  </div>
			  </div>
			  <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
			  <a class="right carousel-control" href="#featured" data-slide="next">›</a>
			  </div>
			  </div>
	</div>
	</div>
	   <p>islamic books</p>
	   <div class="span9" id="av2" >
			<div class="well well-small">
			<h4>puzzels products <small class="pull-right"></small></h4>

	        <div class="row-fluid">
			<div id="featured" class="carousel slide">
			<div class="carousel-inner">
			  <div class="item active">
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>

					<a href="product_details.html"><img src="sama.jpg" alt=""  height="300px;"></a>
					<div class="caption">
					  <h5>sama in quoran</h5>
					  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$20.00</span></h4>

				  </div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>

					<a href="product_details.html"><img src="sedeek.jpg" height="300px;" alt=""></a>
					<div class="caption">
					  <h5>genius of sedeek</h5>
					  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$10.00</span></h4>

				  </div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>

					<a href="product_details.html"><img src="khaled.jpg" height="300px;" alt=""></a>
					<div class="caption">
					  <h5>genius of khaled/h5>
					   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$15.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>

					<a href="product_details.html"><img src="mohamed.jpg" height="300px;" alt=""></a>
					<div class="caption">
					  <h5>genius of mohamed/h5>
					   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$22.00</span></h4>
					</div>

				  </div>
				</li>
			  </ul>
			  </div>
			   <div class="item">
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details.html"><img src="pp3.jpg" height="300px;" alt=""></a>
					<div class="caption">
					  <h5>lee</h5>
					  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$9.00</span></h4>
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="product_details.html"><img src="logz.jpg" height="300px;" alt=""></a>
					<div class="caption">
					  <h5>logz elhayah</h5>
					  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$12.00</span></h4>
					</div>
				  </div>
				</li>

				 </ul>
			  </div>
			  </div>
			  <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
			  <a class="right carousel-control" href="#featured" data-slide="next">›</a>
			  </div>
			  </div>

	</div>
	</div>

	 <p>english novels</p>
	   <div class="span9" id="av3" >
			<div class="well well-small">
			<h4>pears products <small class="pull-right"></small></h4>

	        <div class="row-fluid">
			<div id="featured" class="carousel slide">
			<div class="carousel-inner">
			  <div class="item active">
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>

					<a href="product_details.html"><img src="angle.jpg" alt=""  height="300px;"></a>
					<div class="caption">
					  <h5>angle</h5>
					  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$20.00</span></h4>

				  </div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>

					<a href="product_details.html"><img src="dafenshy.jpg" height="300px;" alt=""></a>
					<div class="caption">
					  <h5>dafenshy</h5>
					  <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$10.00</span></h4>

				  </div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>

					<a href="product_details.html"><img src="harry.jpg" height="300px;" alt=""></a>
					<div class="caption">
					  <h5>harry potter</h5>
					   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$15.00</span></h4>
					</div>

				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>

					<a href="product_details.html"><img src="water.jpg" height="300px;" alt=""></a>
					<div class="caption">
					  <h5>water</h5>
					   <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$22.00</span></h4>
					</div>

				  </div>
				</li>
			  </ul>
			  </div>


			  </div>
			  </div>
			  <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
			  <a class="right carousel-control" href="#featured" data-slide="next">›</a>
			  </div>
			  </div>

	</div>
	</div>








	</div>
  	</div>
	 <footer class="container-fluid" id="foot">
      <center><p>find us social media</p><br>

	   <button class="fa fa-facebook" id="f"></a>
      <button class="fa fa-twitter" id="t"></a>
      <button class="fa fa-google" id="g"></a>
      <button class="fa fa-linkedin" id="l"></a></center>

      </footer>
	</div>


	 <script>
	 var cnt=0;
	 $(document).ready(function(){
	 $("#btn").click(function() {
	 cnt++;
	 $("#s").text(cnt);

       });
       });
       </script>
      
       <script>








 </html>




