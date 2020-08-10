<!DOCTYPE html>
<html>
<head>
	<title>Symptoms</title>
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

  .bg-symp {
      /* The image used */
      background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('images/symp1.jpg');
      /*background-position:center top;*/

      /* Control the height of the image */
      min-height: 500px ; 

      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: contain ;
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
  color: #fee ; 
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

   h1 {
        /* Extra small devices (phones, less than 768px) */
        font-size: 34px;
    }

  </style>
<body>


<!-- ..........................back to top ................. -->
    
        <!-- back to top button  -->

  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>


  <!-- javascript -->



	<div class="bg-symp" >
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
      

<!-- .....................................Symptoms of Covid.................................... -->

<div class="container-fluid  align-text-bottom  " style="height: 80px; padding: 10px; margin-top: 345px; background-color: rgba(6,8,8,.6);">
  <div class="row " >
    <div class="col-lg-12 col-md-12 col-sm-12 "  >
          <h1  style="color: #f31;  ">
              Symptoms
              <small class="text-primary"  >Of COVID-19</small>
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
            <span><i style="font-size:1.2rem ;  " ></i>
              <p class="p-2">
                
              The most common symptoms of COVID-19 are fever, dry cough, and tiredness. Other symptoms that are less common and may affect some patients include aches and pains, nasal congestion, headache, conjunctivitis, sore throat, diarrhea, loss of taste or smell or a rash on skin or discoloration of fingers or toes. These symptoms are usually mild and begin gradually. Some people become infected but only have very mild symptoms.<br>

              Most people (about 80%) recover from the disease without needing hospital treatment. Around 1 out of every 5 people who gets COVID-19 becomes seriously ill and develops difficulty breathing. Older people, and those with underlying medical problems like high blood pressure, heart and lung problems, diabetes, or cancer, are at higher risk of developing serious illness.  However, anyone can catch COVID-19 and become seriously ill.  People of all ages who experience fever and/or  cough associated withdifficulty breathing/shortness of breath, chest pain/pressure, or loss of speech or movement should seek medical attention immediately. If possible, it is recommended to call the health care provider or facility first, so the patient can be directed to the right clinic.
              </p>

             <h2> Watch for symptoms</h2>
                <p class="pl-2">People with COVID-19 have had a wide range of symptoms reported – ranging from mild symptoms to severe illness.</p>

                <p class="pl-2">Symptoms may appear 2-14 days after exposure to the virus. People with these symptoms may have COVID-19:</p>
                <ul class="pl-5 ">
                  <li>Fever or chills</li>
                  <li>Cough</li>
                  <li>Shortness of breath or difficulty breathing</li>
                  <li>Fatigue</li>
                  <li>Headache</li>
                  <li>New loss of taste or smell</li>
                  <li>Sore throat</li>
                  <li>Congestion or runny nose</li>
                  <li>Nausea or vomiting</li>
                  <li>Diarrhea</li>
                </ul>

                <p class="p-2">This list does not include all possible symptoms. CDC will continue to update this list as we learn more about COVID-19.</p>
          </span>
        </div>
      </div>
    </div>

    <div class="container p-3">
      <div class="row p-2 ">
          <div class="col-sm-12 col-lg-12 col-md-12 shadow-lg">
            <img src="images/symp2.jpg" class="img-fluid" style="width: 100%;" alt="symptoms">
          </div>
       
      </div>
      <div class="row p-2">
          <div class="col-lg-12 col-md-12 col-sm-12 shadow-lg">
            <img src="images/symp3.jpg" class="img-fluid" style="width: 100%;" alt="Prevention">
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