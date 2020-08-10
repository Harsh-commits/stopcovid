<!DOCTYPE html>
<html>
<head>
	<title>About COVID-19</title>
	<?php include 'links.php' ?>
  <?php include 'Style.php' ?>

<meta name="viewport" content="width=device-width, initial-scale=1">

   <meta name="google-site-verification" content="JkiSPZZ0rvmaK2iuS9_b2tmGd7jdqmqnUvfbKkHqGS8" />
      <meta name="description" content="Latest COVID-19 pandemic updates of India. Live stats , Day wise report , state wise report , Latest MHA guidelines , COVID help as on particular date.">
      <meta name="keywords" content="Corona , Covid-19 , Symptoms , About corona, preventions , Guidelines ">
      <meta name="robots" content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="English">
  <style type="text/css">
    
    .container {
      position: relative;
      min-width: 100%;
      display: 
      height: auto; /* Maximum width */
      margin: 0 auto; /* Center it */
    }

  .bg-about {
  /* The image used */
  background-image: url("images/about.jpg");

  /* Control the height of the image */
  min-height: 500px ; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover ;
  position: relative ;
  line-height: 0.8;
}

.para_border {
  /*border: 3px solid #4CAF50;*/
    padding: 5px;

}
.clearfix {
  overflow: auto;
  margin: 10px;
  font-family: ibm plex sans;
  background-color: #28313e!important;
  color: #fed ; 
  padding: 20px; 
  box-shadow: 0px 0px 5px 5px #222;

  text-align: justify;
  text-justify: inter-word;
}

.img2 {
  /*margin: 10px ; */
  float: right;
  box-shadow: 0px 0px 5px 5px #222;
  margin-left: 25px;
}

@media screen and (max-width: 500px) {
  .bg-about h1 {
    float: none;
    display: block;
    text-align: left;
  }

  </style>

  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  



</head>
<body>


<!-- ..........................back to top ................. -->
    
        <!-- back to top button  -->

  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>



	<div class="bg-about  " style=" overflow: hidden;">
        <nav class="navbar sticky-top navbar-expand-lg nav_style navbar-light nav-style p-3 ">
         	<a href="https://www.who.int/health-topics/coronavirus#tab=tab_1" style="text-decoration: none; display:inline-flex; padding-right: 20px;"><img height="100" width="100" src="images/co1.png" class="image"  ><strong style="font-size:3rem; "  class="my-auto"><h1 class="text-danger my-auto">STOP</h1><h5>COVID-19</h5></strong></a>
          <button class="navbar-toggler" style="border-color: red ; " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa fa-navicon" style="color:#fff; font-size:28px;"></i></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto pr-5 ul_style">
              <li class="nav-item ">
                <a class="nav-link " style="color:#fff;"  href="index.php">Home</a>
              </li>
              <li class="nav-item " >
                <a class="nav-link" style="color:#fff;"  href="About.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color:#fff;"  href="symptoms.php">Symptoms</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color:#fff;"  href="prevention.php">Prevention</a>
              </li>
            </ul>
            	<div>
				<a class="sharp_btn" style="text-decoration: none; color: #fff;"  data-toggle="modal" data-target="#registerModal">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					Register
				</a>
				</div>

          </div>
        </nav>

            
<!-- Modal -->
<div class="modal fade  " id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content " style="background-color: rgba(6,8,8,.6);">
      <div class="modal-header">
        <h3 class="modal-title text-warning" id="exampleModalLabel">Register Here<br><p style=" color:#f23; font-size: 1rem;">Register for getting latest COVID news</p></h3>

        <button type="button" class="close btn-outline-primary" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: #f23; font-weight: bold;">&times;</span>
        </button>

      </div>

      <div class="modal-body " >
		  <form>
		  <div class="form-group">
		    <input type="text" placeholder="Enter your Name" class="form-control" id="name" aria-describedby="name">
		  </div>
		  <div class="form-group">
		    <input type="text" placeholder="Enter your phone no." class="form-control" id="phone" aria-describedby="emailHelp">
		  </div>
		  <div class="form-group">
		    <input type="email" placeholder="Enter your email id" class="form-control" id="exampleInputEmail1" autosave="off" autocomplete="off" aria-describedby="emailHelp">
		  </div>
		  <div class="form-group">
		    <input type="password" placeholder="Enter a unique Password" class="form-control" id="exampleInputPassword1">
		  </div>
		  <div class="form-group">
		    <input type="password" placeholder="Confirm Password" class="form-control" id="exampleInputPassword2">
		  </div>
		
		  <button type="submit" class="btn btn-outline-danger bg-primary">Submit</button>
		</form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
      </div>
    </div>
  </div>
</div>


        <!-- .....................................back button........................ -->

      <div class="m-4">
        <a href="index.php" class="btn btn-info btn-lg " style="width: auto; " >
          <span class="far fa-arrow-alt-circle-left"></span> Home
        </a>
      </div>
      

<!-- .....................................About Heading.................................... -->
<div class="container-fluid  align-text-bottom " style="height: 100px; padding: 20px; margin-top: 280px; opacity:  ; ">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 "  >
          <h1 style="color: #fed;  font-size: 3.5rem ;  ">
              About  
              <large class="text-danger"  >Corona Virus</large>
          </h1>
    </div>
  </div>

</div>
   

     
       
      </div>
    </div>


    </div>


    <div class="bg-light">
      <div>

          <div class="clearfix para_border">
            <img class="img2 img-fluid" src="images/corona1.png" alt="corona1" width="360" height="240" >
            <span><i style="font-size:1.2rem ;  " >Coronavirus</i> disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.<br><br>

            Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.<br>

            The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. <br>

            The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow.<br>

            At this time, there are no specific vaccines or treatments for COVID-19. However, there are many ongoing clinical trials evaluating potential treatments. WHO will continue to provide updated information as soon as clinical findings become available.
          </span>
          </div>
      </div>
    </div>


     <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <img class="img-fluid" src="11.jpeg">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <img class="img-fluid" src="m1.jpeg">
        </div>
      </div>
      
    </div>


<!-- ..........................footer.......................................................... -->


         <footer class="text-center  p-5" style="background-color:#a61625 ; color: #fff ; ">
          <p>Copyright Reserved HarshTech</p>
                 <nav class="nav justify-content-end mr-5 pr-5">
          <a class="fa ficon fa-facebook" href="https://www.facebook.com/"></a>
          <a class="fa ficon fa-twitter" href="#"></a>
          <a class="fa ficon fa-instagram" href="https://www.instagram.com/"></a>
        </nav>
         </footer>



           <!-- javascript -->

  <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 60 || document.documentElement.scrollTop > 60) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    </script>


</body>
</html>