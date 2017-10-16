<?php 

	include "SocialThing.php";

	class Message extends SocialThing { }

	$message = new Message("De, mas sudah siap untuk nikah. Besok mau ke rumah ketem\ u Bapak. Do'akan ya.. ");
	$message->share();

 ?>