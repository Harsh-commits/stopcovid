<!DOCTYPE html>
<html>
<head>
    <title>India Report</title>
    <?php include 'links.php' ?> 
    <?php include 'Style.php' ?> 
       <meta name="google-site-verification" content="JkiSPZZ0rvmaK2iuS9_b2tmGd7jdqmqnUvfbKkHqGS8" />
      <meta name="description" content="Latest COVID-19 pandemic updates of India. Live stats , Day wise report , state wise report , Latest MHA guidelines , COVID help as on particular date.">
      <meta name="keywords" content="Corona , Covid-19 , Symptoms , About corona, preventions , Guidelines ">
      <meta name="robots" content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="English">
</head>
<body style="background-color: #161625;">


<!-- back to top button  -->

  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>


  
<!-- ...................................NavBar ........................................................ -->


  <nav class="navbar navbar-expand-lg  p-3 ">
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
      <li class="nav-item ">
        <a class="nav-link" style="color:#fff;"  href="About.php">About <span class="sr-only">(current)</span></a>
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
		  <form action="mailto:harshtiwari.dtg2015@gmail.com" enctype="text/plain">
		  <div class="form-group">
		    <input type="text" placeholder="Enter your Name" name="" class="form-control" id="name" aria-describedby="name">
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


<!-- ......................BreadCrumb.................................................... -->

 <nav aria-label="breadcrumb" >
  <ol class="breadcrumb ">
    <li class="breadcrumb-item "><a href="index.php" data-target="ddls0" style="font-weight: bold;">Home</a></li>
    <li class="breadcrumb-item"><a href="stateWise.php" data-target="ddls0">StateWise</a></li>
  </ol>
</nav>




<!-- ..................header.................................................-->

<div class="container img-fluid mt-5">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 " style="text-align: left;">
             <span>
            <h1 style="color: orange">India</h1><h3 style="color: gray" >Daily Corona Report</h3>
             </span>
            
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12" style="text-align: center;">
            
        </div>
        
    </div>
</div>



<!-- ................................Table..................................... -->





<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 table-responsive ">
            
            <?php
                $data = file_get_contents('https://api.covid19india.org/data.json') ; 

                $daywise = json_decode($data,true) ; 

                // echo "<pre>";
                // print_r($daywise) ; 

                $totaldays = count($daywise['cases_time_series']) ;
            ?>

            <div  style="font-size: 2rem ; color: #f33 ; ">
              <span class="numup"> <?php echo "$totaldays "  ; ?> </span>

              <large class="text-primary"  > Corona days in India .</large>
              

            </div>
                

        


  <!-- ..............................India final stats............................................. -->

<marquee><h1 class=""></h1> </marquee>

<marquee>
  <div class="container-fluid">

    <span style="display: inline-flex;">
      <h5 class="text-danger mx-2">New Confirmed cases : <?php echo $daywise['cases_time_series'][$totaldays-1]['dailyconfirmed'] ; ?> </h5>
        <h5 class="text-secondary mx-3">New Death : <?php echo $daywise['cases_time_series'][$totaldays-1]['dailydeceased'] ; ?></h5>
        <h5 class="text-success mx-3">New Recovered :<?php echo $daywise['cases_time_series'][$totaldays-1]['dailyrecovered'] ; ?> </h5>
      
    </span>
        
  </div>

  
</marquee>

  <div class="container-fluid mt-5">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="text-center">
            <h1 class="bg-danger text-light">Total Cases</h1>
            <span class="numup" style="color:#f53; font-size: 3rem ; font-weight: bold;"><?php echo $daywise['cases_time_series'][$totaldays-1]['totalconfirmed'] ; ?></span>
          </div>  
      </div>

       <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="text-center">
            <h1 class="bg-secondary text-light">Total Deaths</h1>
             <span style="color:#555; font-size: 3rem ; font-weight: bold;" class="numup"><?php echo $daywise['cases_time_series'][$totaldays-1]['totaldeceased'] ; ?> </span>
          </div>  
      </div>
       <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="text-center">
            <h1 class="bg-success text-light">Total Recovered</h1>
              <span style="color:#2f2; font-size: 3rem ; font-weight: bold; " class="numup" ><?php echo $daywise['cases_time_series'][$totaldays-1]['totalrecovered'] ; ?>
          </div>  
      </div>
    </div>
  </div>
     

<?php
    $i = 0 ; 
    while ($i < $totaldays) {

?>
<br>

 

             <table id="myTable" class="table-responsive-sm table-hover  text-center p-5" style="width: 100%; ">



                <th colspan="12" class="text-left p-2 text-primary ">Date & Month</th> 
                  

                <tr colspan= "6">
                   <td class="p-2 text-light" style="font-weight: bold;"> <?php echo $daywise['cases_time_series'][$i]["date"]. " <br> " ; ?> </td>
                </tr>
                <tr >
                  
                  <th scope="col" class="bg-danger p-2">Total Confirmed</th>
                  <th scope="col" class="bg-danger">Daily Confirmed</th>
                  <th scope="col" class="bg-danger">Daily Recovered</th>
                  <th scope="col" class="bg-danger">Daily Deceased</th>
                  <th scope="col" class="bg-danger">Total Recovered</th>
                  <th scope="col" class="bg-danger">Total Deceased</th>
                </tr>

                <tr class="bg-dark" style="color: #fff ; ">
                  <td class="p-2"> <?php echo $daywise['cases_time_series'][$i]['totalconfirmed']. " <br> "  ; ?> </td>
                  <td> <?php echo $daywise['cases_time_series'][$i]['dailyconfirmed']. " <br> " ; ?> </td>
                  <td> <?php echo $daywise['cases_time_series'][$i]['dailyrecovered']. " <br> " ; ?> </td>
                  <td> <?php echo $daywise['cases_time_series'][$i]['dailydeceased']. " <br> " ; ?>  </td>
                  <td> <?php echo $daywise['cases_time_series'][$i]['totalrecovered']. " <br> " ; ?> </td>
                  <td> <?php echo $daywise['cases_time_series'][$i]['totaldeceased'].   " <br> " ; ?>  </td>
                </tr>

              <?php

                $i++ ; 
                }

              ?>

            </table>
        </div>
    </div>
</div>


<!-- ...........................footer................................................................. -->


         <footer class="text-center mt-5 p-5" style="background-color:#a61625 ; color: #fff ; ">
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

    <script type="text/javascript">
$('.numup').counterUp({
    delay: 20,
    time: 1000
});
</script>


</body>
</html>