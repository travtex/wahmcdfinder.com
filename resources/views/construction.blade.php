<!doctype html>
<html lang="en">
  <head>
  	<meta charset="utf-8" />
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
      <meta name="viewport" content="width=device-width" />
      
      <title>WAHM CD Finder </title>
      
      <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" />
  	  <link href="{{ URL::asset('css/coming-soon.css') }}" rel="stylesheet" />  
      
      <!--     Fonts     -->
      <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
  </head>

  <body>
    <nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          
          <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#"> 
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
                 <li>
                    <a href="#"> 
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                 <li>
                    <a href="#"> 
                        <i class="fa fa-pinterest"></i>
                    </a>
                </li>
           </ul>
          
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

    <div class="main" style="background-image: url('img/babyfeet.MOV')">
            <video id="video_background" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0"> 
                <source src="img/babyfeet.MOV"> 
                Video not supported 
            </video>
    <!--    Change the image source '/images/video_bg.jpg')" with your favourite image.     -->
        <div class="cover blue" data-color="blue"></div>  
    <!--   You can change the black color for the filter with those colors: blue, green, red, orange       -->
        <div class="container">
            <h1 class="logo cursive">
                WAHM CD Finder
            </h1>
    <!--  H1 can have 2 designs: "logo" and "logo cursive"           -->         
            <div class="content">
                <h4 class="motto">Coming Soon.</h4>
                <div class="subscribe">
                    <h5 class="info-text">
                      Join the mailing list. We keep you posted. 
                    </h5>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 ">
                            <form class="form-inline" role="form">
                              <div class="form-group">
                                <label class="sr-only" for="joinMailingList">Email address</label>
                                <input type="email" class="form-control transparent" placeholder="Your email here..." style="width:100%;">
                              </div>
                              <button type="submit" class="btn btn-warning btn-fill">Notify Me</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
          <div class="container">
                 Made with <i class="fa fa-heart heart"></i> by <a href="#">Flatt Design</a>.
          </div>
        </div>
     </div>
   <script src="js/vendor.js"></script>
   <script src="js/app.js"></script>
  </body>
   
</html>