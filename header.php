<head>
	<meta charset="UTF-8">
	<title>Shyan Kashani</title>
	<link rel="stylesheet" type="text/css" media="screen and (min-device-width: 770px)" href="css/style.css">
	<link rel="stylesheet" type="text/css" media="screen and (max-device-width:770px)" href="css/style-small.css">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="img/favicon.png">
</head>
<body>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-46819695-1', 'auto');
	  ga('send', 'pageview');
	</script>
	<span class='ball'></span>
	<header>
		<ul>
			<li><a href='/index.php' alt='Home' class='name'>Shyan Kashani</a></li>
			<li><a href='/index.php' alt='Home' id='about'>About</a></li>
			<li><a href='/engineering-ui.php' alt='Engineering' id='engineering-ui'>Engineering/UI</a></li>
			<li><a href='/design.php' alt='Design' id='design'>Design</a></li>
		</ul>
	</header>
	<script>
		if (window.location.pathname === '/index.php' || window.location.pathname === '/' ) {
			document.getElementById('about').style.borderBottom = '2px solid black';
		} else if (window.location.pathname === '/engineering-ui.php') {
			document.getElementById('engineering-ui').style.borderBottom = '2px solid black';
		} else if (window.location.pathname === '/design.php') {
			document.getElementById('design').style.borderBottom = '2px solid black';
		};
	</script>
