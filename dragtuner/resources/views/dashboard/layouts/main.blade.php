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
	<div class="flex-container">
		<aside>
			<div class="logo">
				<img src="/images/logo-sm.png" alt="">
			</div>
			<div class="mobile-toggle visible-xs">
				<a class="menu-toggle closed"><i class="fa fa-reorder fa-2x"></i></a>
			</div>
			<div class="sidebar-navigation">
				<p class="navigation-header">Main Navigation</p>
				<ul class="nav">
					<li><a href="/admin" {{ (Request::is('*admin') ? 'class=active' : '') }}><i class="fa fa-dashboard"></i> Dashboard</a></li>
					<li><a href="/admin/runs" {{ (Request::is('*runs') ? 'class=active' : '') }}><i class="fa fa-folder-open-o"></i> Runs</a></li>
					<li><a href="/admin/tracks" {{ (Request::is('*tracks') ? 'class=active' : '') }}><i class="fa fa-map-o"></i> Tracks</a></li>
					<li><a href="/admin/tunes" {{ (Request::is('*tunes') ? 'class=active' : '') }}><i class="fa fa-wrench"></i> Tunes</a></li>
				</ul>
			</div>
		</aside>
		<section>
			<header>
				<div class="pull-right">
					<ul class="navbar-nav nav navbar-right">
						<li>
							<a href="#" title=""><span class="small">Settings</span><i class="fa fa-gear"></i></a>
						</li>
						<li>
							<a href="#" title=""><span class="small">Logout</span><i class="fa fa-sign-out"></i></a>
						</li>
					</ul>
				</div>
				<div class="clear"></div>
			</header>
			<div class="main-container">
				@yield('content')
			</div>
		</section>
	</div>
	<script src="/js/vue.min.js"></script>
	<script	src="/js/dropzone.js"></script>
	<script src="/js/main.js"></script>

	<script>
       $('.mobile-toggle a').click(function(){
       	if($(this).hasClass('open')){
   	    	$(this).toggleClass('open');
   			$(this).toggleClass('closed');
        	$('.sidebar-navigation').slideUp(750, function(){
        		$('.sidebar-navigation').animate({ opacity : 0 }, 300);
    		});
       	}
   		else{
   			$(this).toggleClass('open');
   			$(this).toggleClass('closed');
        	$('.sidebar-navigation').slideDown(500, function(){
         		$('.sidebar-navigation').animate({ opacity : 1 }, 750);
    	 	});
   		}
       });

	</script>
</body>
</html>
