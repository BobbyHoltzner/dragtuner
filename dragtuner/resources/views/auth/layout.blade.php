<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DragTuner | Drag Racing Tuner Application | Online Logbook</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" media="screen" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link href="//gitcdn.github.io/bootstrap-toggle/2.2.0/css/bootstrap-toggle.min.css" rel="stylesheet">
	<script src="//gitcdn.github.io/bootstrap-toggle/2.2.0/js/bootstrap-toggle.min.js"></script>
	<link href='//fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/dropzone.css">
	<link rel="stylesheet" href="/css/dashboard.css">
	<link rel="stylesheet" href="/icons.css">
</head>
<body>
	<div class="flex-container" id="auth">
    <img src="images/logo.png" width="350" alt="" />
    <div class="panel panel-default">
      <div class="panel-heading">
        <p>
          @yield('title')
        </p>
      </div>
      <div class="panel-body">
        @yield('content')
      </div>
    </div>
	</div>
	<script src="/js/main.js"></script>

</body>
</html>
