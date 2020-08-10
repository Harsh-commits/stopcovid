<?php
// Start the session
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>COVID-19:Latest COVID-19 pandemic updates of India.</title>
     <?php include 'links.php' ?>
      <?php include 'Style.php' ?>

       <script type="text/javascript">
         const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
         setInterval(() => {
         
             a = new Date();
             let date = a.toLocaleDateString(undefined,options);
             let time = a.getHours()+":"+a.getMinutes()+":"+a.getSeconds();
             document.getElementById('stime').innerHTML = time + "  on "+ date;
         
         }, 1000)
      </script>
  </head>
  <body>

        <nav id="top_nav">Current Time : <span id="stime"></span></nav>
      <div class="bg-img shadow-lg ">
         <nav class="navbar sticky-top navbar-expand-lg nav_style navbar-light nav-style p-3 shadow-lg " >
            <a href="https://www.who.int/health-topics/coronavirus#tab=tab_1" style="text-decoration: none; display:inline-flex; padding-right: 20px;">
               <img height="100" width="100" src="images/co1.png" class="image"  >
               <strong style="font-size:3rem; "  class="my-auto">
                  <h1 class="text-danger my-auto">STOP</h1>
                  <h5>COVID-19</h5>
               </strong>
            </a>
            <button class="navbar-toggler" style="border-color:red;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

<?php

	$servername = "sql306.epizy.com";
	$username = "epiz_25856443";
	$password = "OWxXaWV7ioU";
	$database = "epiz_25856443_corona19";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

    if (isset($_POST['submit'])) {
	$name = $_POST['Name'];
	$phone = $_POST['Phone'];
	$email = $_POST['Email'];
	$pass = $_POST['Pass'];
    $cpass = $_POST['Cpass'];

    if($pass == $cpass){
        $sql = "INSERT INTO rdata (name, phone, email, pass, cpass)
VALUES ('$name', '$phone', '$email', '$pass', '$cpass')";
    }else{
        
        ?>
            <script>
                alert("Confirm Password not matching with initial Password..!!!")
            </script>
        <?php
        echo"Please Confirm your password again and then submit .";
    }
}

if ($conn->query($sql) === TRUE) {
  ?>


		<div class="jumbotron jumbotron-fluid " style="background-color:rgba(10,10,10,0.8);  color:#fff; ">
		  <div class="container">
		    <h1 class="display-4">WELCOME <?php echo $name; ?></h1>
		    <p class="lead">You are Registered Successfully..!!</p>
            <p class="lead">From now you will get the daily COVID-19 counts and all the latest news about COVID-19 </p>
		  </div>
		</div>




<?php
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
session_unset(); 
session_destroy();
?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>