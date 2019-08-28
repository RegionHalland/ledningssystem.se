<?php
	
	// the message
	$MyMessage = "Skickat av PHP mail-funktion";

	// send email
 	$myMail = mail("Roland.Hyden@RegionHalland.se","Ha en bra dag",$MyMessage);
 	var_dump($myMail);

?> 