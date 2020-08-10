<!DOCTYPE html>
<html>
<head>
	<title>Preventions</title>
	<?php include 'links.php' ?>
  <?php include 'Style.php' ?>

<meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="google-site-verification" content="JkiSPZZ0rvmaK2iuS9_b2tmGd7jdqmqnUvfbKkHqGS8" />
      <meta name="description" content="Latest COVID-19 pandemic updates of India. Live stats , Day wise report , state wise report , Latest MHA guidelines , COVID help as on particular date.">
      <meta name="keywords" content="Corona , Covid-19 , Symptoms , About corona, preventions , Guidelines ">
      <meta name="robots" content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="English">
</head>
  <style type="text/css">
    
    .container {
      position: relative;
      min-width: 100%;
      display: 
      height: auto; /* Maximum width */
      margin: 0 auto; /* Center it */
    }

  .bg-prevent {
      /* The image used */
      background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('images/Distance.jpg');
      background-position:center top;

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

  .img_con{
    /*box-shadow: 0 0 10px #123 ,0 0 40px #123; */
    box-shadow: 0px 0px 5px 10px #222;
  }

  </style>


<body>


<!-- ..........................back to top ................. -->
    
        <!-- back to top button  -->

  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>


  <!-- javascript -->



	<div class="bg-prevent" >
        <nav class="navbar  navbar-expand-lg bg-dark navbar-light nav-style p-3 ">
          <a href="https://www.who.int/health-topics/coronavirus#tab=tab_1" style="text-decoration: none; display:inline-flex; padding-right: 20px;"><img height="100" width="100" src="images/co1.png" class="image"  ><strong style="font-size:3rem; "  class="my-auto"><h1 class="text-danger my-auto">STOP</h1><h5>COVID-19</h5></strong></a>
          <button class="navbar-toggler" style="border-color: red ; " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">   
    			<i class="fa fa-navicon" style="color:#fff; font-size:28px;"></i>
			</span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto pr-5 ul_style">
              <li class="nav-item ">
                <a class="nav-link " style="color:#fff;"  href="index.php">Home</a>
              </li>
              <li class="nav-item " >
                <a class="nav-link" style="color:#fff;"  href="About.php">About </a>
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

<!-- ............................................Back Button................................................ -->

      <div class="m-4">
        <a href="index.php" class="btn btn-info btn-lg " style="width: auto; " >
          <span class="far fa-arrow-alt-circle-left"></span> Home
        </a>
      </div>
      

<!-- .....................................About Heading.................................... -->
<div class="container-fluid  align-text-bottom  " style="height: 100px; padding: 20px; margin-top: 280px; background-color: rgba(6,8,8,.6); overflow: hidden; ">
  <div class="row " >
    <div class="col-lg-12 col-md-12 col-sm-12 "  >
          <h1  style="color: #f31;  font-size: 3.5rem ;  ">
              Preventions 
              <large class="text-primary"  >From Corona Virus</large>
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
            <img class="img2 img-fluid" src="images/safe1.jpg" alt="corona1" width="360" height="240" >
            <span><i style="font-size:1.2rem ;  " >
                You can reduce your chances of being infected or spreading COVID-19 by taking some simple precautions:</i>
              <ul class="p-2">
                
                <li>Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap and water. Why? Washing your hands with soap and water or using alcohol-based hand rub kills viruses that may be on your hands.
                </li>
                <li>Maintain at least 1 metre (3 feet) distance between yourself and others. Why? When someone coughs, sneezes, or speaks they spray small liquid droplets from their nose or mouth which may contain virus. If you are too close, you can breathe in the droplets, including the COVID-19 virus if the person has the disease.</li>
                <li>Avoid going to crowded places. Why? Where people come together in crowds, you are more likely to come into close contact with someone that has COIVD-19 and it is more difficult to maintain physical distance of 1 metre (3 feet).</li>
                <li>Avoid touching eyes, nose and mouth. Why? Hands touch many surfaces and can pick up viruses. Once contaminated, hands can transfer the virus to your eyes, nose or mouth. From there, the virus can enter your body and infect you.</li>
                <li>Make sure you, and the people around you, follow good respiratory hygiene. This means covering your mouth and nose with your bent elbow or tissue when you cough or sneeze. Then dispose of the used tissue immediately and wash your hands. Why? Droplets spread virus. By following good respiratory hygiene, you protect the people around you from viruses such as cold, flu and COVID-19.</li>
                <li>Stay home and self-isolate even with minor symptoms such as cough, headache, mild fever, until you recover. Have someone bring you supplies. If you need to leave your house, wear a mask to avoid infecting others. Why? Avoiding contact with others will protect them from possible COVID-19 and other viruses.</li>
                <li>If you have a fever, cough and difficulty breathing, seek medical attention, but call by telephone in advance if possible and follow the directions of your local health authority. Why? National and local authorities will have the most up to date information on the situation in your area. Calling in advance will allow your health care provider to quickly direct you to the right health facility. This will also protect you and help prevent spread of viruses and other infections.</li>
                <li>Keep up to date on the latest information from trusted sources, such as WHO or your local and national health authorities. Why? Local and national authorities are best placed to advise on what people in your area should be doing to protect themselves.</li>
              </ul>
          </span>
          </div>
      </div>
    </div>

    <div class="container p-3">

      <h1>Must To Do : </h1>
      <div class="row">

        <div class="col-lg-4 col-md-4 col-sm-12 p-1 img_con">
            <img class="img-fluid" src="blue-1.png">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 p-1 img_con">
            <img class="img-fluid" src="blue-2.png">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 p-1 img_con">
            <img class="img-fluid" src="blue-3.png">
        </div>
      </div>

      <h1>Must Know : </h1>
      <div class="row">

        <div class="col-lg-4 col-md-4 col-sm-12 p-1 img_con">
            <img class="img-fluid" src="images/handshaking.png">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 p-1 img_con">
            <img class="img-fluid" src="images/wearing-gloves.png">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 p-1 img_con">
            <img class="img-fluid" src="images/shoping.png">
        </div>
       </div>

       <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 p-1 img_con">
            <img class="img-fluid" src="images/wash-veg.png">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 p-1 img_con">
            <img class="img-fluid" src="images/wash-cloths.png">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 p-1 img_con">
            <img class="img-fluid" src="images/coin.png">
        </div>
      </div>
      
    </div>


<!-- ..........................footer.......................................................... -->


         <footer class="text-center  p-5" style="background-color:#a61625 ; color: #fff ; ">
          <p>Copyright Reserved HarshTech</p>
         </footer>









         <!-- ..........................JavaScript....................................... -->


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