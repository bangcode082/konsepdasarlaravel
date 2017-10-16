<?php 

	include "SocialThing.php";
	include "Shareable.php";

	class Status extends SocialThing{
		use Shareable;
	}

	$status = new Status("Menikah itu mendewasakan. Bukan menunggu dewasa. Berhentilah mencari alasan. Move On! \n");
	$status->share();

 ?>