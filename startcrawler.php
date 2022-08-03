<html>
	<head>
		<title>Visual Studio Code Remote :: PHP</title>
	</head>
	<body>
		<?php 
	   
		include './crawler.php';
		  $startURL=$_REQUEST["w3review"];
		 $depth = 6;
		 $username = 'YOURUSER';
		 $password = 'YOURPASS';
		 $crawler = new crawler($startURL, $depth);
		  $crawler->setHttpAuth($username, $password);
		 // Exclude path with the following structure to be processed 
		 $crawler->addFilterPath('customer/account/login/referer');
		 $crawler->run();
		//phpinfo(); 
		// USAGE
		//php -S 0.0.0.0:8000	
		?>
	</body>
</html>