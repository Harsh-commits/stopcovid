
<!DOCTYPE html>
<html>
<head>
    <title>India Statewise Report</title>
    <?php include 'links.php' ?> 
    <?php include 'Style.php' ?>
       <meta name="google-site-verification" content="JkiSPZZ0rvmaK2iuS9_b2tmGd7jdqmqnUvfbKkHqGS8" />
      <meta name="description" content="Latest COVID-19 pandemic updates of India. Live stats , Day wise report , state wise report , Latest MHA guidelines , COVID help as on particular date.">
      <meta name="keywords" content="Corona , Covid-19 , Symptoms , About corona, preventions , Guidelines ">
      <meta name="robots" content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="English"> 
</head>
	<style type="text/css">
	thead th {
	    position: sticky;
	    position: -webkit-sticky;
	    top: 0;
	    background: #0066cc;
	    z-index: 10;
	}
	
	</style>


<body style=" background-color:#161625 ;" >
 

<!-- back to top button  -->

  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>




  
<!-- ...................................NavBar ........................................................ -->


    <nav class="navbar navbar-expand-lg  navbar-info   p-3 ">
  	<a href="https://www.who.int/health-topics/coronavirus#tab=tab_1" style="text-decoration: none; display:inline-flex; padding-right: 20px;"><img height="100" width="100" src="images/co1.png" class="image"  ><strong style="font-size:3rem; "  class="my-auto"><h1 class="text-danger my-auto">STOP</h1><h5>COVID-19</h5></strong></a>
  <button class="navbar-toggler" style="border-color: red ; " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fa fa-navicon" style="color:#fff; font-size:28px;"></i></span>
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


<nav aria-label="breadcrumb" >
  <ol class="breadcrumb ">
    <li class="breadcrumb-item "><a href="index.php" data-target="ddls0" style="font-weight: bold;">Home</a></li>
    <li class="breadcrumb-item"><a href="stateWise.php" data-target="ddls0">StateWise</a></li>
  </ol>
</nav>



<!-- ..................header.................................................-->

   <?php
                $data = file_get_contents('https://api.covid19india.org/data.json') ; 

                $daywise = json_decode($data,true) ; 

                // echo "<pre>";
                // print_r($daywise) ; 

                $totaldays = count($daywise['statewise']) ;
    ?>



<marquee>
  <div class="container-fluid">

    <span style="display: inline-flex;" class="px-3">
        <div class = "mx-4"><h4 class="text-warning">Maharastra :</h4><h5 class="text-primary">Confirmed cases :<?php echo $daywise['statewise'][1]['confirmed'] ; ?></h5></div>
        <div class = "mx-4"><h4 class="text-warning">Tamil Nadu :</h4><h5 class="text-primary">Confirmed cases : <?php echo $daywise['statewise'][2]['confirmed'] ; ?>   </h5></div>
        <div class = "mx-4"><h4 class="text-warning">Gujarat :</h4><h5 class="text-primary">Confirmed cases :<?php echo $daywise['statewise'][3]['confirmed'] ; ?>  </h5></div>
        <div class = "mx-4"><h4 class="text-warning">Delhi :</h4><h5 class="text-primary">Confirmed cases :<?php echo $daywise['statewise'][4]['confirmed'] ; ?> </h5></div>
        <div class = "mx-4"><h4 class="text-warning">Rajasthan :</h4><h5 class="text-primary">Confirmed cases :<?php echo $daywise['statewise'][5]['confirmed'] ; ?></h5></div>
      
    </span>
        
  </div>

  
</marquee>





<div class="container img-fluid mt-5">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 " style="text-align: left;">
             <span>
            <h1 style="color: orange">India</h1><h3 style="color: gray" >State wise Corona Report</h3>
             </span>
             <!-- <img src="" class="img-fluid ">             -->
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12" style="text-align: center;">
            
        </div>
        
    </div>
</div>



<!-- ................................Table..................................... -->

 
       

         <div class="container-fluid my-3">

            <div class="input-group input-group-md">
  <input type="text" class="form-control btn-outline-primary bg-light text-dark my-2" id="myInput" placeholder="Enter State name.."  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
</div>
         	<table class="table-responsive-sm  table-bordered table-dark table-hover text-center " id="myTable"  width="100%" style="color: #fed ;  " >
         		
         		<thead class="bg-danger sticky-top" style="font-size: 1.5rem;">
         			<th class="p-3" >Last Updated Time</th>
         			<th class="p-3">State</th>
         			<th class="p-3 bg-secondary">Confirmed Cases</th>
         			<th class="p-3 bg-warning">Active Cases</th>
         			<th class="p-3 bg-success">Recovered</th>
         			<th class="p-3 bg-danger">Deaths</th>
  		        </thead>

  		 
            <?php
                $i = 1 ; 
                while ($i < $totaldays) {
                	
            ?>

            	<tr class="">
            		<td class="p-2"><?php echo $daywise['statewise'][$i]['lastupdatedtime'] ; ?></td>
            		<td><?php echo $daywise['statewise'][$i]['state'] ; ?></td>
            		<td><?php echo $daywise['statewise'][$i]['confirmed'] ; ?></td>
            		<td class="text-warning"><?php echo $daywise['statewise'][$i]['active'] ; ?></td>
            		<td class="text-success"><?php echo $daywise['statewise'][$i]['recovered'] ; ?></td>
            		<td class="text-danger"><?php echo $daywise['statewise'][$i]['deaths'] ; ?></td>
                
            	</tr>
                


            <?php

            	$i++ ; 
            }
            ?>




         	</table>
         	
         </div>




         <footer class="text-center  p-5" style="background-color:#a61625 ; color: #fff ; ">
         	<p>Copyright Reserved HarshTech</p>
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
   $("#myTable").searcher({
    inputSelector: "#myInput"
    // itemSelector (tbody > tr) and textSelector (td) already have proper default values
});
</script>


</body>
</html>