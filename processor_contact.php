<?php

//$where_form_is="http://".$_SERVER['SERVER_NAME'].strrev(strstr(strrev($_SERVER['PHP_SELF']),"/"));
//$chechme = "65";
if(isset($_POST['email'])) 

{ 
	$to = "info@dkgenterprise.com" ;
	$name = $_REQUEST['name'] ;
    $email = $_REQUEST['email'] ;
	$telnumber = $_REQUEST['contact'] ;
	$company = $_REQUEST['company'] ;
	$msg = $_REQUEST['msg'] ;
	$ip=$_SERVER['REMOTE_ADDR'];
	$headers = "From: $email \r\n";
	$headers .= "Content-type: text/html\r\n";
    $subject = 'DKG Contact Form Submitted' ;
	$body = <<<EOD
<table width="400" border="0">
  <tr>
    <td width="79" align="right">Name: </td>
    <td width="10">&nbsp;</td>
    <td width="197">$name</td>
  </tr>
  <tr>
    <td align="right">Email:</td>
    <td>&nbsp;</td>
    <td>$email</td>
  </tr>
  <tr>
    <td align="right">Telephone:</td>
    <td>&nbsp;</td>
    <td>$telnumber</td>
  </tr>
  <tr>
    <td align="right">Service:</td>
    <td>&nbsp;</td>
    <td>$company</td>
  </tr>
  <tr>
    <td align="right">Message</td>
    <td>&nbsp;</td>
    <td>$msg</td>
  </tr>
  <tr>
    <td align="right">IP Address</td>
    <td>&nbsp;</td>
    <td>$ip</td>
  </tr>
</table>
EOD;
	
   mail($to,$subject,$body,$headers);

include("confirm.html");
}
else {
echo "<center>Oops..... Something Went Wrong<br /><a href=\"javascript: history.go(-1)\">back to form</a></center>";
}

?>