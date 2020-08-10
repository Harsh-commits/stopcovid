<!DOCTYPE html>
<html>

<head>
   <title>COVID-19:Latest COVID-19 pandemic updates of India.</title>
   <?php include 'links.php' ?>
   <?php include 'Style.php' ?>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="google-site-verification" content="JkiSPZZ0rvmaK2iuS9_b2tmGd7jdqmqnUvfbKkHqGS8" />
   <meta name="description" content="Latest COVID-19 pandemic updates of India. Live stats , Day wise report , state wise report , Latest MHA guidelines , COVID help as on particular date.">
   <meta name="keywords" content="Corona , Covid-19 , Symptoms , About corona, preventions , Guidelines ">
   <meta name="robots" content="index, follow">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <meta name="language" content="English">
   <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
   <style type="text/css">
      thead th {
         position: sticky;
         position: -webkit-sticky;
         top: 0;
         background: #0066cc;
         z-index: 10;
      }

      .rounded:hover {
         /*box-shadow: 0 0 11px rgba(33,33,33,.2); */
         box-shadow: 0px 0px 10px 2px #161625;
      }

      // .........................................
      .icon-bar {
         width: 22px;
         height: 2px;
         background-color: #B6B6B6;
         display: block;
         transition: all 0.2s;
         margin-top: 4px
      }

      .navbar-toggler {
         border: none;
         background: transparent !important;
      }

      .navbar-toggler .top-bar {
         transform: rotate(45deg);
         transform-origin: 10% 10%;
      }

      .navbar-toggler .middle-bar {
         opacity: 0;
      }

      .navbar-toggler .bottom-bar {
         transform: rotate(-45deg);
         transform-origin: 10% 90%;
      }

      .navbar-toggler.collapsed .top-bar {
         transform: rotate(0);
      }

      .navbar-toggler.collapsed .middle-bar {
         opacity: 1;
      }

      .navbar-toggler.collapsed .bottom-bar {
         transform: rotate(0);
      }

      .col_wrap {
         background: #123;
      }
   </style>
   <script type="text/javascript">
      const options = {
         weekday: 'long',
         year: 'numeric',
         month: 'long',
         day: 'numeric'
      };
      setInterval(() => {

         a = new Date();
         let date = a.toLocaleDateString(undefined, options);
         let time = a.getHours() + ":" + a.getMinutes() + ":" + a.getSeconds();
         document.getElementById('stime').innerHTML = time + "  on " + date;

      }, 1000)
   </script>
</head>
<!--....................................Body................................................................. -->

<body class="body">
   <!-- back to top button  -->
   <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
   <nav id="top_nav">Current Time : <span id="stime"></span></nav>
   <div class="bg-img shadow-lg ">
      <nav class="navbar sticky-top navbar-expand-lg nav_style navbar-light nav-style p-3 shadow-lg ">
         <a href="https://www.who.int/health-topics/coronavirus#tab=tab_1" style="text-decoration: none; display:inline-flex; padding-right: 20px;">
            <img height="100" width="100" src="images/co1.png" class="image">
            <strong style="font-size:3rem; " class="my-auto">
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
                  <a class="nav-link " style="color:#fff;" href="index.php">Home</a>
               </li>
               <li class="nav-item ">
                  <a class="nav-link" style="color:#fff;" href="About.php">About </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" style="color:#fff;" href="symptoms.php">Symptoms</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" style="color:#fff;" href="prevention.php">Prevention</a>
               </li>
            </ul>
            <div>
               <a class="sharp_btn" style="text-decoration: none; color: #fff;" data-toggle="modal" data-target="#registerModal">
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
               <div class="modal-header" style="background-color: #123;">
                  <h3 class="modal-title text-light" id="exampleModalLabel">
                     Register Here<br>
                     <p style=" color:#f23; font-size: 1rem;">Register for getting latest COVID news</p>
                  </h3>
                  <button type="button" class="close btn-outline-primary" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true" style="color: #f23; font-weight: bold;">&times;</span>
                  </button>
               </div>
               <div class="modal-body ">
                  <form action="register.php" method="post">
                     <div class="form-group">
                        <input type="text" name="Name" placeholder="Enter your Name" class="form-control" id="name" aria-describedby="name">
                     </div>
                     <div class="form-group">
                        <input type="text" name="Phone" placeholder="Enter your phone no." class="form-control" id="Ph" aria-describedby="emailHelp">
                     </div>
                     <div class="form-group">
                        <input type="email" name="Email" placeholder="Enter your email id" class="form-control" id="exampleInputEmail1" autosave="off" autocomplete="off" aria-describedby="emailHelp">
                     </div>
                     <div class="form-group">
                        <input type="password" name="Pass" placeholder="Enter a unique Password" class="form-control" id="exampleInputPassword1">
                     </div>
                     <div class="form-group">
                        <input type="password" name="Cpass" placeholder="Confirm Password" class="form-control" id="exampleInputPassword2">
                     </div>
                     <button type="submit" name="submit" class="btn bg-primary"><b class="text-light">Submit</b></button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- .....................................overlay.................................... -->
      <?php
      $data = file_get_contents('https://api.covid19api.com/summary');

      $country = json_decode($data, true);

      // echo "<pre>";
      // print_r($daywise) ; 

      $no = count($country['Countries']);
      // echo $num . "<br>";
      ?>
      <!-- .....................marquee.......................................................... -->
      <marquee>
         <div class="container-fluid">
            <span style="display: inline-flex;">
               <h4 class=" mx-2" style="font-weight:bold; color:#fb0;">New Confirmed cases : <?php echo $country['Countries'][76]['NewConfirmed']; ?> </h4>
               <h4 class=" mx-3" style="font-weight:bold; color:#222;">New Death : <?php echo $country['Countries'][76]['NewDeaths']; ?> </h4>
               <h4 class=" mx-3" style="font-weight:bold; color:#5f0;">New Recovered : <?php echo $country['Countries'][76]['NewRecovered']; ?> </h4>
            </span>
         </div>
      </marquee>
      <!-- .................................................................................-->
      <div class="container hero-text text-center mt-4 w-lg-50 w-sm-100 p-4" style="">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
               <h2 style=" font-size: 40px; color:#fed; font-weight:bold; ">We can together stop the spread of COVID-19</h2>
               <h5 class="py-3" style="color: #0fb; font-weight: 500;">If you are not feeling well, then contact us immediately, our support<br> team will conatct you as soon as possible.</h5>
               <!-- Button trigger modal -->
               <button type="button" class="btn btn-primary btn-lg p-2" data-toggle="modal" data-target="#exampleModal">
                  CONTACT US
               </button>

            </div>
         </div>
      </div>
      <!-- Modal -->
      <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content" style="background-color: rgba(6,8,8,.8); color:#fff;">
               <div class="modal-header">
                  <h3 class="modal-title text-primary font-weight-bold" id="exampleModalLabel">Tell us your health condition</h3>
                  <button type="button" class="close bg-light" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class=" my-3 p-3  border  rounded-lg shadow-lg">
                     <!--<h3 class="mb-4  p-2"  style="border-bottom-style: ridge;">Tell us your health condition</h3>-->
                     <form class="" action="mailto:harshtiwari.dtg2015@gmail.com" method="POST" enctype="text/plain">
                        <div class="form-row ">
                           <div class="col-md-6 mb-3 ">
                              <label for="validationServer01">First name</label>
                              <input type="text" class="form-control  " name="Fname" id="validationServer01" required>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationServer02">Last name</label>
                              <input type="text" class="form-control " name="lname" id="validationServer02" required>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="col-md-12 mb-3">
                              <label for="address">Full Address</label>
                              <input type="text" class="form-control  " name="address" id="address" required>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="col-md-6 mb-3">
                              <label for="city">City</label>
                              <input type="text" class="form-control " id="city" required>
                           </div>
                           <div class="col-md-3 mb-3">
                              <label for="state">State</label>
                              <input type="text" class="form-control " id="state" required>
                           </div>
                           <div class="col-md-3 mb-3">
                              <label for="zip">Zip</label>
                              <input type="text" class="form-control " id="zip" required>
                           </div>
                        </div>
                        <div class="form-row ">
                           <div class="col-md-6 mb-3">
                              <label for="email">E-mail</label>
                              <input type="email" class="form-control  " name="email" id="email" required>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="phone">Phone</label>
                              <input type="text" class="form-control " id="phone" name="phone" required>
                           </div>
                        </div>
                        <fieldset class="form-group">
                           <div class="row">
                              <legend class="col-form-label col-sm-2 pt-0 ">Symptoms</legend>
                              <div class="col-sm-10">
                                 <div class="form-check my-2">
                                    <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1">
                                    <label class="form-check-label" for="gridRadios1">
                                       Fever or chills
                                    </label>
                                 </div>
                                 <div class="form-check my-2">
                                    <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios2" value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                       Dry Cough
                                    </label>
                                 </div>
                                 <div class="form-check my-2 ">
                                    <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios3" value="option3">
                                    <label class="form-check-label" for="gridRadios3">
                                       Shortness of breath or difficulty breathing
                                    </label>
                                 </div>
                                 <div class="form-check my-2">
                                    <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios4" value="option4">
                                    <label class="form-check-label" for="gridRadios4">
                                       Fatigue, loss of taste or smell
                                    </label>
                                 </div>
                                 <div class="form-check my-2">
                                    <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios5" value="option5">
                                    <label class="form-check-label" for="gridRadios5">
                                       Headache & Sore throat
                                    </label>
                                 </div>
                                 <div class="form-check my-2">
                                    <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios6" value="option6">
                                    <label class="form-check-label" for="gridRadios5">
                                       Others
                                    </label>
                                 </div>
                              </div>
                           </div>
                        </fieldset>
                        <div class="form-row ">
                           <div class="col-md-12 mb-3">
                              <label for="description">Describe Your health condition</label>
                              <textarea class="form-control" id="description" rows="3"></textarea>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="form-check">
                              <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                              <label class="form-check-label" for="invalidCheck3">
                                 Agree to terms and conditions
                              </label>
                              <div class="invalid-feedback">
                                 You must agree before submitting.
                              </div>
                           </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit form</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- ..........................end of header div..................................... -->
   <div class="topnav" id="myTopnav">
      <a href="india.php">Daywise Report</a>
      <a href="statewise.php">State Wise Report</a>
      <a href="MHAOrder.pdf" target="_blank">Guidelines For Re-opening</a>
      <a href="mygov_redZone.pdf" target="_blank">Hotspot Areas</a>
      <a href="mygov_help.pdf" target="_blank">Contacts & Help</a>
      <a href="FAQ.pdf" target="_blank">FAQ</a>
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
   </div>
   <!--............................. Corona Live Tracker......................................... -->
   <div class="container-fluid mt-3">
      <div class="row shadow-lg d-flex">
         <div class="col-lg-6 col-md-6 col-sm-12 ">
            <div class="world_class container-lg">
               <h2 class="pt-3  text-primary  " style="font-weight: bold;">India Overview</h2>
               <div class="row col_wrap d-flex justify-content-around ">
                  <div class="col-lg-4 col-md-4 col-sm-4 " id="maincounter-wrap" style="margin-top:15px">
                     <h3 class=" text-danger">Confirmed </h3>
                     <div class="maincounter-number">
                        <span style="color:#fa0" class="numup"><?php echo $country['Countries'][76]['TotalConfirmed']; ?> </span>
                        <h6 class="text-danger">New :<?php echo $country['Countries'][76]['NewConfirmed']; ?> </h6>
                     </div>
                  </div>
                  <!-- ......................Deaths............................. -->
                  <div class="col-lg-4 col-md-4 col-sm-4 overflow-auto" id="maincounter-wrap" style="margin-top:15px">
                     <h3 class="text-secondary">Deceased</h3>
                     <div class="maincounter-number">
                        <span style="color:#f00" class="numup"><?php echo $country['Countries'][76]['TotalDeaths']; ?></span>
                        <h6 class="text-secondary">New :<?php echo $country['Countries'][76]['NewDeaths']; ?> </h6>
                     </div>
                  </div>
                  <!-- ................................Recovered...................... -->
                  <div class="col-lg-4 col-md-4 col-sm-4 d-block" id="maincounter-wrap" style="margin-top:15px; ">
                     <h3 class="text-success">Recovered</h3>
                     <div class="maincounter-number" style="color:#8ACA2B ">
                        <span class="numup"><?php echo $country['Countries'][76]['TotalRecovered']; ?></span>
                        <h6 class="text-success">New :<?php echo $country['Countries'][76]['NewRecovered']; ?> </h6>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12  ">
            <div class="container-fluid world_class">
               <h2 class="pt-3 text-primary " style="font-weight: bold;">Worldwide Overview</h2>
               <div class="row col_wrap d-flex justify-content-between ">
                  <div class="col-lg-4 col-md-4 col-sm-4" id="maincounter-wrap" style="margin-top:15px">
                     <h3 class="text-danger ">Confirmed </h3>
                     <div class="maincounter-number">
                        <span style="color:#fa0" class="numup"><?php echo $country['Global']['TotalConfirmed']; ?> </span>
                        <h6 class="text-danger">New :<?php echo $country['Global']['NewConfirmed']; ?> </h6>
                     </div>
                  </div>
                  <!-- ......................Recovered............................. -->
                  <div class="col-lg-4 col-md-4 col-sm-4" id="maincounter-wrap" style="margin-top:15px">
                     <h3 class="text-secondary">Deaths</h3>
                     <div class="maincounter-number">
                        <span style="color:#f00" class="numup"><?php echo $country['Global']['TotalDeaths']; ?></span>
                        <h6 class="text-secondary">New :<?php echo $country['Global']['NewDeaths']; ?> </h6>
                     </div>
                  </div>
                  <!-- ............Deaths...................... -->
                  <div class="col-lg-4 col-md-4 col-sm-4" id="maincounter-wrap" style="margin-top:15px;">
                     <h3 class=" text-success">Recovered</h3>
                     <div class="maincounter-number" style="color:#8ACA2B ">
                        <span class="numup"><?php echo $country['Global']['TotalRecovered']; ?></span>
                        <h6 class="text-success">New :<?php echo $country['Global']['NewRecovered']; ?> </h6>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- active and close cases -->
   <div class="container fluid_style">
      <div class="row p-3 active_closed ">
         <div class="col-lg-5 col-md-5 col-sm-12  active_style">
            <div class="panel panel-default">
               <div class="active-panel-heading " style="text-align:center">
                  <span class="panel-title" style="font-size:20px; text-transform:uppercase; font-weight:bold;">
                     Active Cases Worldwide
                  </span>
               </div>
               <div class="panel-body" style="text-align:center; height:200px;">
                  <div class="panel_flip">
                     <div class="panel_front" style="width:100%;height:100%;">
                        <div class="number-table-main"><?php echo $country['Global']['TotalConfirmed'] - ($country['Global']['TotalDeaths'] + $country['Global']['TotalRecovered']); ?></div>
                        <div style="font-size:16px; font-weight:bold;">Currently Infected Patients</div>
                        <div style="padding-top:20px;position:relative;text-align:center; ">
                           <div style="float:left; text-align:center">
                              <span class="number-table" style="color:#8080FF">2,417,259</span> (<strong>98</strong>%)
                              <div style="font-size:16px ; font-weight: bold;">in Mild Condition</div>
                              <br>
                           </div>
                           <div style="float:right; text-align:center">
                              <span class="number-table" style="color:red ">46,120</span> (<strong>2</strong>%)
                              <div style="font-size:16px ; font-weight: bold;">Serious or Critical</div>
                              <br>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-2 col-md-2 col-sm-12"></div>
         <div class="col-lg-5 col-md-5 col-sm-12 closed_style">
            <div class="panel panel-default">
               <div class="closed-panel-heading" style="text-align:center;">
                  <span class="panel-title" style="font-size:20px; text-transform:uppercase; font-weight:bold">
                     Closed Cases Worldwide</span>
               </div>
               <div class="panel-body" style="text-align:center;height:200px;">
                  <div class="panel_flip">
                     <div class="panel_front" style="width:100%;height:100%;">
                        <div class="number-table-main">
                           <?php echo $country['Global']['TotalDeaths'] + $country['Global']['TotalRecovered']; ?>
                        </div>
                        <div style="font-size:16px; font-weight: bold; ">Cases which had an outcome:</div>
                        <div style="padding-top:20px ">
                           <div style="float:left; text-align:center">
                              <span class="number-table" style="color:#8ACA2B">1,634,369</span>
                              (<strong>85</strong>%)
                              <div style="font-size:16px ; font-weight: bold;">Recovered / Discharged</div>
                              <br>
                           </div>
                           <div style="float:right; text-align:center">
                              <span class="number-table">
                                 295,445</span>
                              (<strong>15</strong>%)
                              <div style="font-size:16px ; font-weight: bold;">Deaths</div>
                              <br>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- ....................Countrywise Updates.......................................................... -->
   <!-- ..............acccordion.................... -->
   <button class="accordion">
      <span style="font-size:1.5rem;">Click here for Countrywise updates</span>
   </button>
   <div class="panel_acc">
      <div class="container-fluid mt-4 mb-5">
         <h1 align="center" class="m-4 ">Countrywise Corona Updates</h1>

         <div class="input-group input-group-md">
            <input type="text" class="form-control btn-outline-primary bg-dark my-2" id="myInput" placeholder="Enter Country name.." aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
         </div>
         <table class="table-responsive-sm  table-bordered table-dark table-hover text-center" id="myTable" width="100%">
            <thead class="bg-primary text-light shadow-lg ">
               <th class="pt-3 pb-3">Date</th>
               <th>Country</th>
               <th>Total Confirmed</th>
               <th>New Confirmed</th>
               <th>New Deaths</th>
               <th>Total Deaths</th>
               <th>New Recovered</th>
               <th>Total Recovered</th>
            </thead>
            <!-- .....................php for countrywise.................... -->
            <?php
            $i = 0;
            while ($i < $no) {

            ?>
               <tr>
                  <td class="pt-2 pb-2"><?php echo $country['Countries'][$i]['Date']; ?></td>
                  <td><?php echo $country['Countries'][$i]['Country']; ?></td>
                  <td class="text-primary"><?php echo $country['Countries'][$i]['TotalConfirmed']; ?></td>
                  <td class="text-primary"><?php echo $country['Countries'][$i]['NewConfirmed']; ?></td>
                  <td class="text-danger"><?php echo $country['Countries'][$i]['NewDeaths']; ?></td>
                  <td class="text-danger"><?php echo $country['Countries'][$i]['TotalDeaths']; ?></td>
                  <td class="text-success"><?php echo $country['Countries'][$i]['NewRecovered']; ?></td>
                  <td class="text-success"><?php echo $country['Countries'][$i]['TotalRecovered']; ?></td>
               </tr>
            <?php
               $i++;
            }

            ?>
         </table>
      </div>
   </div>

   <!--................................ Latest News ..............................................-->
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-12">
            <h1 class="m-3 text-primary">Latest News </h1>
            <?php
            $data = file_get_contents('http://newsapi.org/v2/top-headlines?country=in&apiKey=d1edce91034b4a3abc9ea0a138954ec8');
            $news = json_decode($data, true);

            // echo "<pre>";
            // print_r($news) ; 

            $num = count($news['articles']);
            // echo $num;

            ?>
            <div class="container-fluid ">
               <?php
               $i = 0;
               while ($i < $num) {

               ?>
                  <div class="row shadow-lg " style="background-color: #123;">
                     <div class="col-lg-6 col-md-6 col-sm-6  p-3" style="background-size: auto; ">
                        <a href="<?php echo $news['articles'][$i]['url']; ?>" target="_blank"> <img class="rounded img-fluid " style=" transition: box-shadow .3s;  " src="<?php echo $news['articles'][$i]['urlToImage']; ?>"> </a>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 py-3 ">
                        <a href="<?php echo $news['articles'][$i]['url']; ?>" target="_blank">
                           <h4 style="color: #f62;"><?php echo $news['articles'][$i]['title']; ?> </h4>
                        </a>
                     </div>
                     <div class="row px-3">
                        <div class="col-lg-12 col-md-12 col-sm-12  ">
                           <h6 class="text-light"><?php echo $news['articles'][$i]['description']; ?> </h6>
                           <p class="text-secondary"> <?php echo $news['articles'][$i]['content']; ?> </p>
                           <h6 class="text-light"><?php echo $news['articles'][$i]['author']; ?> </h6>
                           <h6 class="text-light"><?php echo $news['articles'][$i]['publishedAt']; ?> </h6>
                        </div>
                     </div>
                  </div>
               <?php
                  echo "<br>";
                  $i++;
               }
               ?>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12">
            <h1 class="text-primary m-3">Videos</h1>
            <?php
            $key = "AIzaSyBo4GaxmbGg5eDePdQmGS2wsNg2t7wnr6g";
            $baseUrl = "https://www.googleapis.com/youtube/v3/";
            $channelId = "UCTJpJk8bqQQEqeX58z8eimA";
            $maxResult = "25";

            $APIurl = $baseUrl . "search?order=date&part=snippet&channelId=" . $channelId . "&maxResults=" . $maxResult . "&key=" . $key;

            // echo $APIurl;

            $data = file_get_contents($APIurl);
            $videos = json_decode($data, true);

            // echo "<pre>" ; 
            // print_r($videos) ; 

            $num = count($videos['items']);

            $i = 0;
            while ($i < $num) {

            ?>
               <div class="conatainer d-flex justify-content-start">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6 p-2 d-flex">
                        <a href="https://www.youtube.com/embed/<?php echo $videos['items'][$i]['id']['videoId']; ?>" target=""> <img class="rounded img-fluid " style=" transition: box-shadow .3s;  " src="<?php echo $videos['items'][$i]['snippet']['thumbnails']['medium']['url']; ?>"> </a>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 p-2">
                        <a href="https://www.youtube.com/embed/<?php echo $videos['items'][$i]['id']['videoId']; ?>" target="">
                           <h4 class="m-2"><?php echo $videos['items'][$i]['snippet']['title']; ?></h4>
                        </a>
                        <h6 class="mx-2"><?php echo $videos['items'][$i]['snippet']['publishedAt']; ?></h6>
                     </div>
                  </div>
               </div>
            <?php
               $i++;
            }


            ?>
         </div>
      </div>
   </div>
   <!-- ..........................footer...................................................................... -->
   <footer class="text-center p-5" style="background-color:#a61625 ; color: #fff ; ">
      <div class="container-fluid">
         <div class="row vertical-align-center">
            <div class="col-lg-4 ">
               <div class="LI-profile-badge" data-version="v1" data-size="medium" data-locale="en_US" data-type="vertical" data-theme="dark" data-vanity="harsh-kumar-03a8a611b"><a class="LI-simple-link" href='https://in.linkedin.com/in/harsh-kumar-03a8a611b?trk=profile-badge'>Harsh Kumar</a></div>
            </div>
            <div class="col-lg-4 ">
               <p>Copyright Reserved 2020 : Harsh Kumar</p>
            </div>
            <div class="col-lg-4 ">
               <nav class="nav justify-content-end mr-5 pr-5">
                  <a class="fa ficon fa-facebook" href="https://www.facebook.com/Stop-covid-19-112551350513817/?modal=admin_todo_tour"></a>
                  <a class="fa ficon fa-twitter" href="https://twitter.com/explore/tabs/covid-19"></a>
                  <a class="fa ficon fa-instagram" href="https://www.instagram.com/"></a>
               </nav>
            </div>
         </div>
      </div>


   </footer>
   <!--...............................JAVASCRIPT..................................................................................  -->
   <script type="text/javascript">
      function myFunction() {
         var x = document.getElementById("myTopnav");
         if (x.className === "topnav") {
            x.className += " responsive";
         } else {
            x.className = "topnav";
         }
      }
   </script>
   <!-- javascript -->
   <script>
      //Get the button
      var mybutton = document.getElementById("myBtn");

      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {
         scrollFunction()
      };

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
   <script>
      var acc = document.getElementsByClassName("accordion");
      var i;

      for (i = 0; i < acc.length; i++) {
         acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
               panel.style.maxHeight = null;
            } else {
               panel.style.maxHeight = panel.scrollHeight + "px";
            }
         });
      }
   </script>

   <script type="text/javascript">
      $('.numup').counterUp({
         delay: 20,
         time: 1000
      });
   </script>

   <!-- ///////////Search Table//////////////////////////// -->

   <script type="text/javascript">
      $("#myTable").searcher({
         inputSelector: "#myInput"
      });
   </script>
</body>

</html>