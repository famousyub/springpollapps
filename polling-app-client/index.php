<?php 



echo "hello there";


?>


<html lang=en-US>

<head>
  <title>Angel Company</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="courses,tutorials,web developements" />
  <meta name="auther" content="victor" />
  <meta http-equiv="content-type" content="text/html:charset=utf-8" />
  <link rel="shortcut icon" href="favicon.icon" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' />
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css' />
  <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
body {
  background-color: #f0f0f0 !important;
}
/*search box style*/
	#tfheader{
		background-color:#fff;
	}
	#tfnewsearch{
		padding:20px;
	}
	.tftextinput2{
		margin: 0;
		padding: 5px 15px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		color:#666;
		border:1px solid #0076a3; 
    border-right:0px;
		border-top-left-radius: 5px 5px;
		border-bottom-left-radius: 5px 5px;
	}
	.tfbutton2 {
		margin: 0;
		padding: 5px 7px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		font-weight:bold;
		outline: none;
		cursor: pointer;
		text-align: center;
		text-decoration: none;
		color: #ffffff;
		border: solid 1px #0076a3; border-right:0px;
		background: #0095cd;
		background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
		background: -moz-linear-gradient(top,  #00adee,  #0078a5);
		border-top-right-radius: 5px 5px;
		border-bottom-right-radius: 5px 5px;
	}
	.tfbutton2:hover {
		text-decoration: none;
		background: #007ead !important;
		background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
		background: -moz-linear-gradient(top,  #0095cc,  #00678e);
	}
	/* Fixes submit button height problem in Firefox */
	.tfbutton2::-moz-focus-inner {
	  border: 0;
	}
	.tfclear{
		clear:both;
	}
/*find your car*/
#search{
  margin:auto;
  width:400px;
	box-shadow:0px 0px 10px #000;
  	-webkit-box-shadow:0px 0px 10px #000;

}
/*slider style*/
#sliderPic{
  height:800px;
  width:100%;
}
#blueBar{
  background-color:#0973ba;
  height:11.34px;
  width:100%;
}
#bgcolor{
  background-color:#fff;
}
#logo{
  width:291px;
  color:#0973ba;
    font-family: Microsoft Uighur;
  text-align:center;
  padding-left:30px;
  padding-top:1px;
  marging-top:0px;
}
#logo1 {
  height: 50px;
  font-size: 70px;
}
#sublogo {
  font-size: 25px;
  height: 20px;
}
a.navbar-brand{
  margin:0px;
  padding:0px;
}
#nav1{
  font-weight:bold;
}
#nav2{
  color:#555;
}
.navbar-nav>li>a{
  color:#555;
}
.navbar-nav>li>a:hover{
  color:#0973ba;
}
.carousel-caption{
  text-align:right !important;
}
#blueBG{
  background-color:#0973ba;
    font-size:24px;
  width:30%;
  text-align:center;
}
#blackBG{
    background-color:#000;
  opacity:0.8;
    font-size:35px;
  width:55%;
  text-align:center;
}
button.btn.btn-default {
    width: 100%;
  padding-top: 5px;
  margin-top: 7px;
  padding-botton:12px ;
  margin-botton:12px;
}
#last-page{
  background-color:#075a92;
}
input:hover {
    border: 2px solid #DB805A;
    border-radius: 5px;
}
button:hover{
  border: 2px solid #DB805A;
    border-radius: 5px;
}
input{
  height:30px;
}
textarea{
  width:182px;
  height:70px;
  padding-top:10px;
}
textarea:hover{
  border: 2px solid #DB805A;
    border-radius: 5px;
}
.font{
  color:#fff !important;
}
hr {
  display: block;
  margin-top: 0.5em;
  margin-bottom: 0.5em;
  margin-left: auto;
  margin-right: auto;
  border-style: inset;
  border-width: 1px;
}
span.glyphicon.glyphicon-envelope{
  color:#397ba8 !important;
}
span.glyphicon-home{
  color:#397ba8 !important;
}
span.glyphicon-earphone{
  color:#397ba8 !important;
}
#font-color{
  color:#f58428;
  font-size:25px;
}
ul{
  padding-right:50px;
}
img#pic1.img-thumbnail{
  width:782.4px !important;
  height:500 !important;
}
img#pic.img-thumbnail{
width:391.2px !important;
  height:250 !important;  
}
#tbl{
    border:1px solid #676666;
}
#th{
   background-color:#0973ba;
  color:white;
}
#td{
  background-color:#f7f7f7 !important;
    height:200px !important;
}
.icon-bar{
background-color:#0973ba !important;
}
#pad-space{
  padding-right:50px;
  padding-left:50px;
}
#newbg{
background-color:#0973ba;  
 color:#fff;
}
#certifiedbg{
  background-color:#f58428; 
  color:#fff;
}
#usedbg{
  background-color:#963d81;  
  color:#fff;
}
#selling{
  width:300.2px !important;
  margin:auto;
}
#sell-your-car{
  background-color:#0973ba;
  height:262px;
  margin-top:15px;
}
#sign-in{
  background-color:#f58428;
  height:262px;
  margin-top:15px;
}
.btnWide{
   margin: auto;
  width: 200px !important;
}
footer{
  padding-bottom:20px;
  padding-left:50px;
  color:#fff;
}
  </style>
</head>

<body data-spy="scroll" data-target="spy-scroll-id">
  <nav id="bgcolor" class="navbar navbar-fixed-top">
    <!--blue bar at the top-->
    <div id="blueBar"></div>
    <!--toggle button-->
    <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="collapseExample">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
     </button>
          </div>
    <!--logo-->
    <div class="row">
      <div class="col-sm-3 col-md-3">
    <div id="logo" class="navbar-header">
      <a href="#home" class="navbar-brand"><h1 id="logo1">LOGO</h1>
  <p id="sublogo">will be placed here</p></a>
    </div>
    </div>
    <!--navbar 2-->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="col-sm-9 col-md-9">
    <ul id="nav2" class="nav navbar-nav  navbar-right">
      <li><a href="http://mecapromajdi.kesug.com/online_store/">COMPANY</a></li>
      <li><a href="http://mecapromajdi.kesug.com/online_store/">SERVICES</a></li>
      <li><a href="http://mecapromajdi.kesug.com/online_store/">HOW IT WORKS</a></li>
      <li><a href="http://mecapromajdi.kesug.com/online_store/">LISTING</a></li>
      <li><a href="http://mecapromajdi.kesug.com/online_store/">AUTHERIZED DEALERS</a></li>
    </ul>
    <!--navbar 1-->
    <ul id="nav1" class="nav navbar-nav navbar-right">
      <li><a href="http://mecapromajdi.kesug.com/online_store/home">HOME</a></li>
      <li><a href="http://mecapromajdi.kesug.com/online_store/search">FIND A CAR</a></li>
      <li><a href="http://mecapromajdi.kesug.com/online_store/new-cars">NEW CARS</a></li>
      <li><a href="http://mecapromajdi.kesug.com/online_store/used-cars">USED CARS</a></li>
      <li><a href="http://mecapromajdi.kesug.com/online_store/certified-cars">CERTIFIED CARS</a></li>
      <li><a href="http://mecapromajdi.kesug.com/online_store/contact">CONTACT US</a></li>
            <li><a href="http://mecapromajdi.kesug.com/online_store/sign">SIGN IN</a></li>

    </ul>
    </div>
    </div>
      
    </div>
  </nav>

  <!--Slider-->
  <section id="home"></section>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="http://mecapromajdi.kesug.com/online_store/myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="http://mecapromajdi.kesug.com/online_store/myCarousel" data-slide-to="1"></li>
      <li data-target="http://mecapromajdi.kesug.com/online_store/myCarousel" data-slide-to="2"></li>
      <li data-target="http://mecapromajdi.kesug.com/online_store/myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img id="sliderPic" src="http://media.caranddriver.com/images/15q4/662479/2016-toyota-prius-first-drive-review-car-and-driver-photo-662992-s-429x262.jpg" alt="pic1">
        <div class="carousel-caption">
          <p id="blueBG">Used Cars Deals</p>
          <h3 id="blackBG">Everything In One Place</h3>
        </div>
      </div>

      <div class="item">
        <img id="sliderPic" src="http://www.independent.ie/life/motoring/car-news/article34210502.ece/ALTERNATES/h342/2015-11-18_lif_14645416_I5.JPG" alt="pic2">
        <div class="carousel-caption">
          <p id="blueBG">Used Cars Deals</p>
          <h3 id="blackBG">Everything In One Place</h3>
        </div>
      </div>

      <div class="item">
        <img id="sliderPic" src="https://cdn2.autoexpress.co.uk/sites/autoexpressuk/files/styles/insert_main_image/public/5/57/2244_0.jpg?itok=UEC4b6is" alt="pic3">
        <div class="carousel-caption">
          <p id="blueBG">Used Cars Deals</p>
          <h3 id="blackBG">Everything In One Place</h3>
        </div>
      </div>

      <div class="item">
        <img id="sliderPic" src="https://2.bp.blogspot.com/-IadjhujIdII/VGqqEfl89sI/AAAAAAAAZxU/BN46-BJQNQA/w800/2016-Toyota-Mirai-415.jpg" alt="pic4">
        <div class="carousel-caption">
          <p id="blueBG">Used Cars Deals</p>
          <h3 id="blackBG">Everything In One Place</h3>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="http://mecapromajdi.kesug.com/online_store/myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="http://mecapromajdi.kesug.com/online_store/myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!--find your car-->
  <section id="search">
        <div id="tfheader">
    <h1 class="text-center" style="padding-top:20px"> Find Your Car</h1>
    <ul class="nav navbar-nav">
      <li><a href="http://mecapromajdi.kesug.com/online_store/">New</a></li>
      <li><a href="http://mecapromajdi.kesug.com/online_store/">Used</a></li>
      <li><a href="http://mecapromajdi.kesug.com/online_store/">Certified Pre-Owned</a></li>
      <li><a href="http://mecapromajdi.kesug.com/online_store/">All</a></li>
    </ul>
    <!--search box-->
      <form id="tfnewsearch" method="get" action="https://www.google.com" align="center">
        <input type="text" id="tfq2b" class="tftextinput2" name="q" size="21" maxlength="120" value="Example:Toyota"><input type="submit" value=">" class="tfbutton2">
      </form>
      <div class="tfclear"></div>
    </div>
  </section>
  <!--new cars-->
  <section id="new-cars">
    <h1 id="newbg"class="text-center">Featured new cars</h1>
    <div id="pad-space" class="row">
      <div id="img1" class="col-lg-6 col-md-6 col-sm-6">
        <img id="pic1" class="img-thumbnail" src="http://www.magic4walls.com/wp-content/uploads/2015/08/alfa-romeo-4c-silver-car-on-the-sunset-road-694x417.jpg">
      </div>
      <div id="img2" class=" col-lg-3 col-md-3 col-sm-3">
        <img id="pic" class="img-thumbnail" src="http://digitalresult.com/wp-content/uploads/2015/08/bugatti-car-wallpapers-20.jpeg">
      </div>
      <div id="img3" class=" col-lg-3 col-sm-3 col-md-3">
        <img id="pic" class="img-thumbnail" src="https://i.ytimg.com/vi/PCRj3F99mFs/maxresdefault.jpg">
      </div>
      <div id="img4" class=" col-lg-3 col-sm-3 col-md-3">
        <img id="pic" class="img-thumbnail" src="https://practicalmotoring.com.au/wp-content/uploads/2015/09/15HiLux_04hr-2.jpg">
      </div>
      <div id="img5" class=" col-lg-3 col-md-3 col-sm-3">
        <img id="pic" class="img-thumbnail" src="http://www.blogcdn.com/cars.aol.co.uk/media/2013/02/gtbycitroen.jpg">
      </div>
      <a href="https://www.google.com.eg/search?q=cars&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjOh9WG0_LNAhXmBcAKHXmhCh4Q_AUICCgB&biw=1360&bih=643http://mecapromajdi.kesug.com/online_store/tbm=isch&q=cars+2016" target="blanck">
        <div class=" col-lg-12 col-sm-12 col-md-12 col-xs-12">
          <center><button class="btn btn-block btn-default">Load More...</button></center>
        </div>
      </a>
    </div>
  </section>
  <!--used cars-->
  <section id="used-cars">
    <h1 id="usedbg"class="text-center">Featured used cars</h1>
    <div id="pad-space" class="row">
      <div id="img1" class="col-lg-6 col-md-6 col-sm-6">
        <img id="pic1" class="img-thumbnail" src="http://www.magic4walls.com/wp-content/uploads/2015/08/alfa-romeo-4c-silver-car-on-the-sunset-road-694x417.jpg">
      </div>
      <div id="img2" class=" col-lg-3 col-md-3 col-sm-3">
        <img id="pic" class="img-thumbnail" src="http://digitalresult.com/wp-content/uploads/2015/08/bugatti-car-wallpapers-20.jpeg">
      </div>
      <div id="img3" class=" col-lg-3 col-sm-3 col-md-3">
        <img id="pic" class="img-thumbnail" src="https://i.ytimg.com/vi/PCRj3F99mFs/maxresdefault.jpg">
      </div>
      <div id="img4" class=" col-lg-3 col-sm-3 col-md-3">
        <img id="pic" class="img-thumbnail" src="https://practicalmotoring.com.au/wp-content/uploads/2015/09/15HiLux_04hr-2.jpg">
      </div>
      <div id="img5" class=" col-lg-3 col-md-3 col-sm-3">
        <img id="pic" class="img-thumbnail" src="http://www.blogcdn.com/cars.aol.co.uk/media/2013/02/gtbycitroen.jpg">
      </div>
      <a href="https://www.google.com.eg/search?q=cars&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjOh9WG0_LNAhXmBcAKHXmhCh4Q_AUICCgB&biw=1360&bih=643http://mecapromajdi.kesug.com/online_store/tbm=isch&q=cars+2016" target="blanck">
        <div class=" col-lg-12 col-sm-12 col-md-12 col-xs-12">
          <center> <button class="btn btn-block btn-default">Load More...</button></center>
        </div>
      </a>
    </div>
  </section>
  <!--certified cars-->
  <section id="certified-cars">
    <h1 id="certifiedbg"class="text-center">Featured certified cars</h1>
    <div id="pad-space" class="row">
      <div id="img1" class="col-lg-6 col-md-6 col-sm-6">
        <img id="pic1" class="img-thumbnail" src="http://www.magic4walls.com/wp-content/uploads/2015/08/alfa-romeo-4c-silver-car-on-the-sunset-road-694x417.jpg">
      </div>
      <div id="img2" class=" col-lg-3 col-md-3 col-sm-3">
        <img id="pic" class="img-thumbnail" src="http://digitalresult.com/wp-content/uploads/2015/08/bugatti-car-wallpapers-20.jpeg">
      </div>
      <div id="img3" class=" col-lg-3 col-sm-3 col-md-3">
        <img id="pic" class="img-thumbnail" src="https://i.ytimg.com/vi/PCRj3F99mFs/maxresdefault.jpg">
      </div>
      <div id="img4" class=" col-lg-3 col-sm-3 col-md-3">
        <img id="pic" class="img-thumbnail" src="https://practicalmotoring.com.au/wp-content/uploads/2015/09/15HiLux_04hr-2.jpg">
      </div>
      <div id="img5" class=" col-lg-3 col-md-3 col-sm-3">
        <img id="pic" class="img-thumbnail" src="http://www.blogcdn.com/cars.aol.co.uk/media/2013/02/gtbycitroen.jpg">
      </div>
      <a href="https://www.google.com.eg/search?q=cars&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjOh9WG0_LNAhXmBcAKHXmhCh4Q_AUICCgB&biw=1360&bih=643http://mecapromajdi.kesug.com/online_store/tbm=isch&q=cars+2016" target="blanck">
        <div class=" col-lg-12 col-sm-12 col-md-12 col-xs-12">
          <center> <button class="btn btn-block btn-default">Load More...</button></center>
        </div>
      </a>
    </div>
  </section>
  <!--sell your car-->
  <div class="row">
    <div id="sell-your-car"class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
  <h1 class="text-center font">SELL YOUR CAR</h1>
  <p id="selling" class="text-center font">Start selling your car/s using our powerful platform and enjoy our services and features. We are here to help you</p>
  <center><button class="btn btn-block btn-default btnWide">Create Your Listing</button></center>
      </div>
  <!--sign in-->
    <section id="sign">
        <div id="sign-in" class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
  <h1 class="text-center font">SIGN IN</h1>
  <form align="center">
    <input type="text" placeholder="Email" class="form-control btnWide" /><br>
    <input type="text" placeholder="Password" class="form-control btnWide" />
  </form>
  <p class="font text-center">forget your password?</p>
  <center><button class="btn btn-block btn-default btnWide">Sign In</button></center>
  </div>
  </div>
    </section>
  <!--subscribe-->
  <h1 class="text-center">Subscribe To Our Newsletter</h1>
  <p class="text-center">Keep updated with latest news and offers by subscribing our periodic newsletter</p>
  <form id="center" align="center">
    <input type="text" placeholder="Enter your email address" /><button style="background-color:http://mecapromajdi.kesug.com/online_store/0973ba" class="btn btn-sm font">subscribe</button>
  </form>
  <hr>
  <!-- Tables-->
  <h1 class="text-center">Plans & Pricing</h1>
  <div id="space" class="row">
    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
      <table id="tbl" class="table">
        <tr>
          <th id="th">individuals plan</th>
        </tr>
        <tr>
          <td id="td">30 days duration Ad Total 5 photos upload (1 main photo + 4 additional photos) $5 for 15 days extension $10 for 30 days extension $15 for 60 days extension</td>
        </tr>
        <tr>
          <td>
            <center> <button class="btn btn-warning font">Choose This Plan</button></center>
          </td>
        </tr>
      </table>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
      <table id="tbl" class="table">
        <tr>
          <th id="th">Dealer Single Ad</th>
        </tr>
        <tr>
          <td id="td">31 vehicle listing. Self-service and management. Total 15 photos upload (1 main photo + 14 additional photos). 30 days duration Ad. Ad traffic report (Weekly).</td>
        </tr>
        <tr>
          <td>
            <center> <button class="btn btn-warning font">Choose This Plan</button></center>
          </td>
        </tr>
      </table>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
      <table id="tbl"class="table">
        <tr>
          <th id="th">Dealer Multi Ad</th>
        </tr>
        <tr>
          <td id="td">10 vehicles listing for $500 (with same conditions of single dealer ad package) 15 vehicles listing for $675 (with same conditions of single dealer ad package) 20 vehicles listing for $800 (with same conditions of single dealer ad package and
            daily ad traffic report) 30 vehicles listing for $1,050 (with same conditions of single dealer ad package and daily ad traffic report)</td>
        </tr>
        <tr>
          <td>
            <center> <button class="btn btn-warning font">Choose This Plan</button></center>
          </td>
        </tr>
      </table>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
      <table id="tbl"class="table">
        <tr>
          <th id="th">Dedicated Dealer Page</th>
        </tr>
        <tr>
          <td id="td">30 vehicles listing for $2,000 (90 days page duration, 8 photos upload per vehicle, self-service and management, daily traffic report) 50 vehicles listing for $2,750 (90 days page duration, 10 photos upload per vehicle, self-service and management,
            daily traffic report)</td>
        </tr>
        <tr>
          <td>
            <center> <button class="btn btn-warning font">Choose This Plan</button></center>
          </td>
        </tr>
      </table>
    </div>
  </div>
  <!--last page-->
  <div id="last-page">
  <div id="pad-space"class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <table class="table">
        <tr>
          <th id="font-color">Site Maps</th>
        </tr>
        <tr>
          <td>
            <a href="http://mecapromajdi.kesug.com/online_store/" class="font">About Us</a><br>
            <a href="http://mecapromajdi.kesug.com/online_store/"class="font">New Cars</a><br>
            <a href="http://mecapromajdi.kesug.com/online_store/"class="font">Used Cars</a><br>
            <a href="http://mecapromajdi.kesug.com/online_store/"class="font">Certified Cars</a><br>
            <a href="http://mecapromajdi.kesug.com/online_store/"class="font">Dealers</a><br>
            <a href="http://mecapromajdi.kesug.com/online_store/"class="font">Plans & Pricing</a><br>
            <a href="http://mecapromajdi.kesug.com/online_store/"class="font">Services</a><br>
            <a href="http://mecapromajdi.kesug.com/online_store/"class="font">How It Works</a><br>
            <a href="http://mecapromajdi.kesug.com/online_store/"class="font">Contact Us</a><br>
          </td>
          <td>
            <a href="http://mecapromajdi.kesug.com/online_store/"class="font">Sell A Car</a><br>
            <a href="http://mecapromajdi.kesug.com/online_store/"class="font">Become A Dealer</a><br>
            <a href="http://mecapromajdi.kesug.com/online_store/"class="font">Upgrade Plan</a><br>
            <a href="http://mecapromajdi.kesug.com/online_store/"class="font">Register</a><br>
            <a href="http://mecapromajdi.kesug.com/online_store/"class="font">Login</a><br>
            <a href="http://mecapromajdi.kesug.com/online_store/"class="font">Cities</a><br>
            <a href="http://mecapromajdi.kesug.com/online_store/"class="font">Services</a><br>
            <a href="http://mecapromajdi.kesug.com/online_store/"class="font">How It Works</a><br>
            <a href="#"class="font">Carears</a><br>
          </td>
        </tr>
      </table>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <table class="table">
        <tr>
          <th id="font-color">About Us</th>
        </tr>
        <tr>
          <td class="font">CARVEGO once tellus a odio tincidunt ipsum velit. Nam nec tellus a odio tincidunt lass aptent taciti sociosqu ad litora torquent per a odio ncidunt ipsum velit conubia</td>
        </tr>
        <tr>
          <td class="font"><span class="glyphicon glyphicon-home"></span> lorem ipsum street</td>
        </tr>
        <tr>
          <td class="font"><span class="glyphicon glyphicon-envelope font"></span> +962 (06) 420 3587</td>
        </tr>
        <tr>
          <td class="font"><span class="glyphicon glyphicon-earphone"></span> info@carvego.com</td>
        </tr>
      </table>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <table class="table">
        <tr>
              <section id="contact"> <th id="font-color">Contact Us</th>
        </tr>
        <tr>
          <td>
            <input type="text" placeholder="Name">
          </td>
          <td> <input type="text" placeholder="Email"></td>
        </tr>
        <tr>
<td> <textarea placeholder="Massage"></textarea></td>
        </tr>
        <tr>
          <td> </td>
          <td><button class="btn btn-warning pull-right font">send</button></td>
        </tr>
      </table>
      </section>
    </div>
  </div>
  <footer>
    &copy; 2016 All rights are reserved.
  </footer>
        </div>

<script>

/*search box*/
$(function() {
	$("#tfq2b").click(function() {
		if ($("#tfq2b").val() == "Search our website"){
			$("#tfq2b").val(""); 
		}
	});
});
/*smooth scrolling*/
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});


</script>

</body>

</html>