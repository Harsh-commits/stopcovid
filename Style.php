<Style type = "text/css"> 
	*{margin: 0 ;  padding: 0 ;box-sizing: border-box; font-family: 'Roboto', sans-serif; }



	.ul_style{
		font-size: 1.5rem ; 
	}
	.head_style{
		font-size: 2rem ;
		color: #ff22ff ;
		font-weight: bold; 
	}
	
	.nav-style{
		/*background: linear-gradient(150deg, #0fb8ad 0%, #fab 51%, #2cb5e8 85%); */
    background-color: rgba(6,8,8,.6);
    height: 20%;
	}

  .image {
  
    -webkit-animation:spin 4s linear infinite;
    -moz-animation:spin 4s linear infinite;
    animation:spin 4s linear infinite;
}
@-moz-keyframes spin { 100% { -moz-transform: rotate(360deg); } }
@-webkit-keyframes spin { 100% { -webkit-transform: rotate(360deg); } }
@keyframes spin { 100% { -webkit-transform: rotate(360deg); transform:rotate(360deg); } }

	 .left{
	 	text-align: center;
	 }
	 .right{
	 	text-align: center;
	 }

   html{
      scroll-behavior: smooth;

   }



   /*..............back to top button..............*/

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: rgba(200,30,0,.9);
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
  /*opacity: 0.8 ; */
}



/*.......................pop up form ..........................*/

.topnav {
  overflow: hidden;
  background-color: #123;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #222;
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}







/*...............................................................................................*/




#myBtn:hover {
  background-color: #555;
}

/*.............................header............................................................*/


/*body, html {
  height: 100%;
}*/

/** {
  box-sizing: border-box;
}*/

.bg-img {
  /* The image used */
    background: linear-gradient( rgba(500, 50, 0, 0.8), rgba(10, 5, 3, 0.5) ), url(images/c19.jpg);

  /*background-image: url("images/c19.jpg");*/

  /* Control the height of the image */
  min-height: 500px ; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  /*position: relative ;*/
  line-height: 0.8;
}




/*..................................................................................................................*/


body {margin:0;}

.icon-bar {
  /*position: fixed;*/
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.icon-bar a {
  display: block;
  /*text-align: center;*/
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ACEE;
  color: white;
}

.google {
  background: #dd4b39;
  color: white;
}

.linkedin {
  background: #007bb5;
  color: white;
}

.youtube {
  background: #bb0000;
  color: white;
}

.content {
  margin-left: 75px;
  font-size: 30px;
}



/*.........```````````````````````````````````````````````@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/








/*......................Corona LIve Tracker.......................................................*/

.box {
  transition: box-shadow .3s;
  width: 300px;
  height: 500px;
  margin: 50px;
  border-radius:10px;
  border: 1px solid #ccc;
  background: #fff;
  float: left;
  
}

.world_class:hover {
  /*box-shadow: 0 0 11px rgba(33,33,33,.2); */
  box-shadow: 0px 0px 10px 2px #161625;
}

.world_class{
      transition: box-shadow .3s;
}



.col_wrap{
    display:inline-flex;
    /*padding-left: 20px;*/

}

#maincounter-wrap {
    margin: auto;
    text-align: center;
    /*padding: 10px;*/
    
   
}
.maincounter-number {
    font-weight: 700;
    color: #696969;
    font-size: 24px;
}


/*Active and closed cases*/

.active_closed{
  

}

.active_style{
	/*background-color: #fa5;*/
  box-shadow: 0px 0px 5px 5px #222;
  /*margin: 10px ; */
   
}

.closed_style{
  /*background-color: #28313e ; */
  box-shadow: 0px 0px 5px 5px #222;
  /*margin: 10px ; */
}


.fluid_style{
	margin-top: 30px ;

	/*margin-bottom: 20px ;*/
}


.panel {
	
    margin-bottom: 20px;
    background-color: #fed;
    border: 1px solid transparent;
    border-radius: 2px;
    /*-webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);*/
    /*box-shadow: 0 1px 1px rgba(0,0,0,.05);*/
}

.active-panel-heading {
    /*box-shadow: 0px 0px 5px 5px #fff;*/
    margin-top: 5px ; 
    background-color:#28313e ;  
    padding: 10px 15px;
    color: #f86 ; 
    border-bottom: 2px solid transparent;
    border-bottom-width: 2px;
    border-bottom-style: solid;
    border-bottom-color: transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    
}

.closed-panel-heading {
    /*box-shadow: 0px 0px 5px 5px #fff;*/
    margin-top: 5px ; 
    background-color:#28313e ;  
    padding: 10px 15px;
    color: #8f6 ; 
    border-bottom: 2px solid transparent;
    border-bottom-width: 2px;
    border-bottom-style: solid;
    border-bottom-color: transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    
}


.number-table-main {
    font-size: 24px;
    font-weight: bold;
}

.number-table {
	color: #8080ff ; 
    font-size: 20px;
    font-weight: bold;
}
.number-table {
    font-size: 20px;
    font-weight: bold;
}

/*..............closed cases........................*/


.site-update{
	-webkit-tap-highlight-color: rgba(50,0,0,0.7);
	font-weight: normal;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
	line-height: 1.42857143;
	color: #333;
	-webkit-font-smoothing: antialiased;
	box-sizing: border-box;
	display: block;
	background-color: #eef3f7;
	position: relative;
	padding: 30px 0 20px;
}
.row_style{
	display: flex;
	flex-wrap: wrap;
	margin-right: -15px;
	margin-left: -15px;
    display: flex;
	
}

.site-update .update_box {
    /* width: 100%; */
    box-shadow: 0 0 4px rgba(0, 0, 0, 0.45);
    /* border-radius: 4px; */
    /* background-color: #fff; */
    padding: 18px;
    margin: 0 0 30px;
    /* -webkit-transition: all 0.5s ease; */
    transition: all 0.5s ease;



     outline: -webkit-focus-ring-color auto 1px;
    outline-color: -webkit-focus-ring-color;
    outline-style: auto;
    outline-width: 1px;
}

.update_box{
	width: 100%;
	box-shadow: 0 0 4px rgba(0, 0, 0, 0.45);
	border-radius: 4px;
	background-color: #fff;
	padding: 18px;
	margin: 0 0 30px;
	transition: all 0.5s ease;
}

.update_box p{
	margin: 0 0 10px;
	-webkit-transition: all 0.3s ease-in-out;
	margin-bottom: 0 !important;
	overflow:hidden;
	line-height: 20px;


}

.update_box a{
	background-color: transparent;
	text-decoration: none;
	-webkit-transition: all 0.3s ease-in-out;
	float: left;
	display: block;
	width: calc(100% - 85px);
	color: #000;
}
.update_box strong{
	box-sizing: border-box;
	font-weight: 700;
	-webkit-transition: all 0.3s ease-in-out;
	width: 85px;
	float: left;
	display: block;
	color: #0f70ce;
}

.col_style{
	position: relative;
	min-height: 1px;
	padding-right: 15px;
	padding-left: 15px;
	float: left;
	width: 50%;
	display: flex;
}

.container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

.row {
    margin-right: -15px;
    margin-left: -15px;
}

.col-xs-12 {
    width: 100%;
    float: left ; 
}
.col-xs-12 h2{
	margin-top: 20px;
    margin-bottom: 10px;
	font-size: 30px;
    font-family: inherit;
    font-weight: 500;
    line-height: 1.1;
    color: inherit;
}




/*................................countryWise updtes.................................... */



.countrywise_Style{

    margin-right: 25px;
    margin-left: 45px;
}
 .countrywise_Style h3 {
    padding-top: 25px;
    padding-bottom: 15px;
    font-size: 2rem ; 
}
 .para {
    margin-top: 0;
    margin-bottom: 1rem;
}

.col-md-8{
    position: absolute;
    min-height: 1px;
    padding-right: 50px;
    padding-left: 20px;
    max-width: 100% ; 
}



.row {
    margin-right: -15px;
    margin-left: -15px;
}

div.dataTables_wrapper div.dataTables_filter input {
    margin-left: 0.5em;
    display: inline-block;
    width: auto;
}

.nav-pills>li {
    float: left;
}

.nav>li {
    position: relative;
    display: block;
}
.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    color: #fff;
    background-color: #337ab7;
    border-radius: 4px ; 
}
.mt_buttons {
    margin-bottom: 16px !important;
}

.col-sm-9 {
    position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
    float: left;
    width: 75% ; 
}

.accordion {
  background-color: #123;
  color: #f22;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  border-color: #fff;
  border-style: solid;
}

.active, .accordion:hover {
  background-color: #ccc;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel_acc {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}

  .sharp_btn {
      /*position: relative;*/
      display: inline-block;
      padding: 15px 20px ; 
      color: #2196f3 ; 
      cursor: pointer;
      letter-spacing: 4px;
      font-size: 20px;
      overflow: hidden;
      transition: 0.2s ; 
      -webkit-box-reflect: below 1px linear-gradient(transparent , #0005);

    }

    .sharp_btn:hover{
      color: #fed ; 
      background: #2196f3 ; 
      box-shadow: 0 0 5px #031954 , 0 0 25px #031954  ;
      /*transition-delay: 1s ; */
    }

    .sharp_btn span {

      position: absolute;
      display: block;
    }

    .sharp_btn span:nth-child(1){
      top: 0;
      left: -100% ; 
      width: 100% ; 
      height: 2px ; 
      background: linear-gradient(90deg ,transparent , #2196f3); 
      animation: animate1 1s linear infinite ;

    }

    @keyframes animate1{
      0%{
        left: -100% ;
      }
      50%,100%{
        left: 100% ;
      }

    }

    .sharp_btn:nth-child(1){
      filter: hue-rotate(290deg);
    }

    .sharp_btn:nth-child(3){
      filter: hue-rotate(110deg);
    }

  

    .sharp_btn span:nth-child(3){
      bottom:0;
      right: -100% ; 
      width: 100% ; 
      height: 2px ; 
      background: linear-gradient(270deg ,transparent , #2196f3); 
      animation: animate3 1s linear infinite ;
      animation-delay: 0.5s ; 
    }

    @keyframes animate3{
      0%{
        right: -100% ;
      }
      50%,100%{
        right: 100% ;
      }

    }


    .sharp_btn span:nth-child(2){
      top: -100%;
      right: 0 ; 
      width: 2px ; 
      height: 100% ; 
      background: linear-gradient(180deg ,transparent , #2196f3); 
      animation: animate2 1s linear infinite ;
      animation-delay:0.25s ; 
    }

    @keyframes animate2{
      0%{
        top: -100% ;
      } 
      50%,100%{
        top: 100% ;
      }

    }

    .sharp_btn span:nth-child(4){
      bottom: -100%;
      left: 0 ; 
      width: 2px ; 
      height: 100% ; 
      background: linear-gradient(360deg ,transparent , #2196f3); 
      animation: animate4 1s linear infinite ;
      animation-delay: 0.75s ;
    }

    @keyframes animate4{
      0%{
        bottom: -100% ;
      }
      50%,100%{
        bottom: 100% ;
      }

    }

    .ficon {
  padding: 10px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.ficon:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-instagram {
  background: #fa2233;
  color: white;
}



</Style>