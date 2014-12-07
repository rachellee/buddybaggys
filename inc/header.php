<html>
<head>
	<meta name="viewport" content="width=device-width">
 	<title><?php echo $pageTitle; ?></title>
	<meta content="doggy poop bag holders" name="description" />
	<meta content="poo bag, poop bag, dog poo bag holder, dog poop bag holder, poo bag holder, poop bag holder, doo dogs, doo" name="keywords" />
	<link href="style.css" media="all" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" media="screen">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">

	<script src="//use.typekit.net/qdq8opi.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

	<!--[if lt IE 9]> <script src="//html5shiv.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script><![endif]-->
	
</head>

<body>
	<header id="main-header">

		<div id="main-header-text">
			Doo <img src="images/pawprint2.png" class="pawprint" alt="Paw Print"> Dogs
		</div>
		
		<div role="navigation" class="nav">
			<span id="nav-link" class="home"><a href="index.php">Home</a></span>
			<span id="nav-link" class="shop <?php if ($section == "shop") {echo "on";} ?>"><a href="shop.php">Shop</a></span>
			<span id="nav-link" class="about <?php if ($section == "about") {echo "on";} ?>"><a href="about.php">About</a></span>
			<span id="nav-link" class="contact <?php if ($section == "contact") {echo "on";} ?>"><a href="contact.php">Contact</a></span>
		</div>
	</header>