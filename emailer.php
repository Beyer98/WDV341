<?php

include("emailerClass.php");

$testEmail = new emailer();

$testEmail->setSender("shanebeyer98@gmail.com");

$testEmail->setTo("albeyer2@dmacc.edu");

$testEmail->setSubject("Testing 123");

$testEmail->setMessage("Hi.");

if ($testEmail->sendMessage()){

  	echo "Sent <br />";

} 

else {

  	echo "Failure to send <br />";

}


$clientEmail = new emailer();

$clientEmail->setSender("shanebeyer98@gmail.com");

$clientEmail->setTo("slbeyer2@dmacc.edu");

$clientEmail->setSubject("Testing 123");

$clientEmail->setMessage("Hi.");


if ($clientEmail->sendMessage()){

  	echo "Sent <br />";

} else {

  	echo "Failure to send <br />";

}

?>

<p>Sender Name: <?php echo $testEmail->getSender();?></p>

<p>To Name: <?php echo $testEmail->getTo();?></p>

<p>Subject: <?php echo $testEmail->getSubject();?></p>

<p>Message: <?php echo $testEmail->getMessage();?></p>
