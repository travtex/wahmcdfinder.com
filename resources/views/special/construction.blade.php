@extends('layouts.wahm')

@section('title')
  Under Construction: WAHM CD Finder
@stop

@section('top-links')
  <link href="{{ URL::asset('css/coming-soon.css') }}" rel="stylesheet" />  
@stop

@section('content')
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
                <a href="https://www.facebook.com/wahmcdfinder" target="_blank">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-square fa-stack-1x" style="color:transparent; font-size:22px;"></i>
                    <i class="fa fa-facebook-square fa-stack-1x"></i>
                  </span>
                </a>
            </li>
             <li>
                <a href="#"> 
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-1x" style="color:transparent; font-size:22px;"></i>
                    <i class="fa fa-twitter fa-stack-1x"></i>
                  </span>
                </a>
            </li>
             <li>
                <a href="#"> 
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-1x" style="color:transparent; font-size:22px;"></i>
                    <i class="fa fa-pinterest fa-stack-1x"></i>
                  </span>
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
    <div class="cover green" data-color="green"></div>  
<!--   You can change the black color for the filter with those colors: blue, green, red, orange       -->
    <div class="container">
        <h1 class="logo cursive">
            WAHM CD<br/>Finder
        </h1>
<!--  H1 can have 2 designs: "logo" and "logo cursive"           -->         
        <div class="content">
            <h4 class="motto">Coming Soon.</h4>
            <div class="subscribe">
                <h5 class="info-text">
                  Join the mailing list. We'll keep you posted. 
                </h5>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 ">
                        <form class="form-inline" role="form">
                          <div class="form-group">
                            <label class="sr-only" for="joinMailingList">Email address</label>
                            <input type="email" class="form-control transparent" placeholder="Your email here..." style="width:100%;">
                          </div>
                          <button type="submit" class="btn btn-success btn-fill">Notify Me</button>
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
@stop

@section('bottom-scripts')
<script>
  $('.navbar-nav li a').hover(
    function() {
      var link = $(this).find('i:nth-child(2)');
      var stackIcon = link.prev();
      var color;
      var bgColor;
      if (link.hasClass('fa-facebook-square')) {
        color = "#3b5998";
        bgColor = "#ffffff";
      } else if (link.hasClass('fa-twitter')) {
        color = "#00aced";
        bgColor = "transparent";
      } else if (link.hasClass('fa-pinterest')) {
        color = "#cb2027";
        bgColor = "#ffffff";
      };
      link.css('color', color);
      stackIcon.css('color', bgColor);
    }, function() {
      var link = $(this).find('i');
      var stackIcon = link.prev();
      link.css('color', '#ffffff');
      stackIcon.css('color', 'transparent');
    }
  );
</script>
@stop
