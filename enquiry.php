<?php
// send email 

//if(isset($_POST['button1']) && $_POST['Name']!="" && $_POST['Contact']!="" && $_POST['Email']!="" && $_POST['Enquiry']!="") {
	
	$uid = md5(uniqid(time()));
	if($_POST['Name']=="") {
		$header = "From: Global Technical Solutions <".$_POST['Email'].">\r\n";
	}
	else {
		$header = "From: ".$_POST['Name']." <".$_POST['Email'].">\r\n";
	}
	$header .= "Reply-To: ".$_POST['Email']."\r\n";
//	$header .= "CC: gitaconventschool@yahoo.co.in \r\n";
	$header .= "BCC: swati.abacus@gmail.com \r\n";
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
	$header .= "This is a multi-part message in MIME format.\r\n";
	$header .= "--".$uid."\r\n";
	$header .= "Content-type:text/html; charset=iso-8859-1.\r\n";
	$header .= "Content-Transfer-Encoding: 7bit\r\n\r\n";        
	
	 
	$message='<table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-family:Trebuchet MS; font-size:13px; color:#333333;">
	
	  <tr><td style="font-family:Trebuchet MS; font-size:14px; color:#FF0000;"><strong>Name</strong></td></tr>
	  <tr><td>--------------------------------------</td></tr>
	  <tr><td>'.$_POST['Name'].'</td></tr>
	  
	  <tr><td style="font-family:Trebuchet MS; font-size:14px; color:#FF0000;"><br/><strong>E-mail</strong></td></tr>
	  <tr><td>-----------------------------------</td></tr>
	  <tr><td>'.$_POST['Email'].'</td></tr>
	  
	  <tr><td style="font-family:Trebuchet MS; font-size:14px; color:#FF0000;"><br/><strong>Company</strong></td></tr>
	  <tr><td>-----------------------------------</td></tr>
	  <tr><td>'.$_POST['Company'].'</td></tr>
	  
	  <tr><td style="font-family:Trebuchet MS; font-size:14px; color:#FF0000;"><br/><strong>Phone</strong></td></tr>
	  <tr><td>-----------------------------------</td></tr>
	  <tr><td>'.$_POST['Phone'].'</td></tr>
	  
	 <tr><td style="font-family:Trebuchet MS; font-size:14px; color:#FF0000;"><br/><strong>Message</strong></td></tr>
	  <tr><td>-----------------------------------</td></tr>
	  <tr><td>'.$_POST['Message'].'</td></tr>
	 
	  <tr><td style="font-family:Trebuchet MS; font-size:14px; color:#FF0000;"><br/><strong>Attach Files</strong></td></tr>
	  <tr><td>-----------------------------------</td></tr>
	  <tr><td>'.$_POST['Browse'].'</td></tr>
	  
	
	</table>
	';
	
	
	$to = "swati@abacusdesk.co.in"; 
	$subject = "Enquiry - Global Technical Solutions";
	
	//redirect to success page 
	if (mail( $to, $subject, $message, $header, $_FILES["file"])){
	  print "<meta http-equiv=\"refresh\" content=\"0;URL=thank_you.html\">";
	}
	else{
	  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
	}
  {
  echo "Upload: " . $_FILES["file"]["Browse"] . "<br />";
  echo "Type: " . $_FILES["file"]["file"] . "<br />";
  echo "Size: " . ($_FILES["file"]["50"] / 1024) . " Kb<br />";
  echo "Stored in: " . $_FILES["file"]["Browse"];
  }

//}
//else {
//	print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
//}
?>