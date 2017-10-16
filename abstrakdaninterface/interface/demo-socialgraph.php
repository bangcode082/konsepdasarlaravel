<?php 

	// include "Facebook.php";
	// include "SocialGraph.php";

	// $fbTukul=new Facebook("Tukul Arwana","Kembali ke laptop!");
	// $fbTukul->like();
	// $fbTukul->like();

	// $fbJokowi = new Facebook("Joko Widodo", "Aku Rapopo...");
	// $fbJokowi->like();
	// $fbJokowi->like();
	// $fbJokowi->like();
	// $fbJokowi->like();

	// $socialGraph = new SocialGraph();
	// $socialGraph->compareLike($fbTukul,$fbJokowi);

	include "Facebook.php";
	include "Twitter.php";
	include "SocialGraph.php";

	$fbTukul=new Facebook("Tukul Arwana ", "Kembali ke Laptop");
	$fbTukul->like();
	$fbTukul->like();
	$fbTukul->like();
	$fbTukul->like();


	$twJokowi=new Twitter("Joko Widodo","Aku Rapopo");
	$twJokowi->favorite();
	$twJokowi->favorite();
	$twJokowi->favorite();

	$socialGraph= new SocialGraph();
	$socialGraph->compareLike($fbTukul,$twJokowi);

 ?>