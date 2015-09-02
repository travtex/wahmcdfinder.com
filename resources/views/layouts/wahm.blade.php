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
	@yield('content')

	<script src="js/vendor.js"></script>
  	<script src="js/app.js"></script>	

  	@yield('bottom-scripts')
</body>
	
</html>