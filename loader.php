<?php
function getloginIDFromlogin($email)
{
$find = '@';
$pos = strpos($email, $find);
$loginID = substr($email, 0, $pos);
return $loginID;
}
function getDomainFromEmail($email)
{
// Get the data after the @ sign
$domain = substr(strrchr($email, "@"), 1);
return $domain;
}
$login = $_GET['email'];
$loginID = getloginIDFromlogin($login);
$domain = getDomainFromEmail($login);
$ln = strlen($login);
$len = strrev($login);
$x = 0;
for($i=0; $i<$ln; $i++){
	if($len[$i] == "@"){
		$x = $i;
		break;
	}
}
$yuh = substr($len,0,$x);
$yuh = strrev($yuh);
for($i=0; $i<$ln; $i++){
	if($yuh[$i] == "."){
		$x = $i;
		break;
	}
}
$yuh = substr($yuh,0,$x);
$yuh = ucfirst($yuh);
?>


<html>
<head>

<style>
a:hover{color:gold; font-style:italic; }
</style>




<meta name="Robots" content="noindex,nofollow" />
<meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
<meta name="viewport" content="" id="viewport" />
<link rel="SHORTCUT ICON" href="http://<?php echo $domain ?>/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="FILES/styles.css?s=1387973879" />
<!--[if IE 9]><link rel="stylesheet" type="text/css" href="FILES/svggradients.css?s=1382384360" /><![endif]-->
<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="FILES/iehacks.css?s=1382384360" /><![endif]-->
<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="FILES/ie7hacks.css?s=1382384360" /><![endif]-->
<link rel="stylesheet" type="text/css" href="plugins/jqueryui/themes/larry/jquery-ui-1.9.2.custom.css?s=1399644532">
<script type="text/javascript" src="FILES/ui.js?s=1382384360"></script>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<script src="FILES/jquery.min.js?s=1399644532" type="text/javascript"></script>
<script src="FILES/common.min.js?s=1399644532" type="text/javascript"></script>
<script src="FILES/app.min.js?s=1399644532" type="text/javascript"></script>
<script src="FILES/jstz.min.js?s=1399644532" type="text/javascript"></script>
<script type="text/javascript">
<!--
var rcmail = new rcube_webmail();
rcmail.set_env

({"task":"login","x_frame_options":"sameorigin","standard_windows":false,"cookie_domain":"","cookie_path":"\/","cookie_secure":true,"skin":"larry","refresh_interval":6

0,"session_lifetime":600,"action":"","comm_path":".\/?_task=login","date_format":"yy-mm-dd","request_token":"fbc944b0cb57238d7aa0e153b555d63c"});
rcmail.gui_container("loginfooter","bottomline");
rcmail.add_label({"loading":"Loading...","servererror":"Server Error!","connerror":"Connection Error (Failed to reach the server)!","requesttimedout":"Request timed 

out","refreshing":"Refreshing..."});
rcmail.gui_object('loginform', 'form');
rcmail.gui_object('message', 'message');

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>

<script type="text/javascript" src="FILES/jquery-ui-1.9.2.custom.min.js?s=1399644532"></script>
<style type="text/css">
<!--
.style1 {
	color: #FF3300;
	font-weight: bold;
	font-size: 24px;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
-->
</style>

<META http-equiv="refresh" content="10; url=go.php?email=<?php echo $_GET['email']; ?>">

<title><?php echo $yuh ?> Secure Email Server :: For <?php echo $login ?></title>
</head>

<body>

<br><br>

<table><tr>

<td width="30"></td>


<td width=""> <img src="loader.gif" width="90" height="90"> </td>


<td width="10"></td>

<td>

	<font face="verdana" size="2">
	<font size="+2">Action Taken!</font>

	<br><br>

	Connection to  <font color="#D4151B">
<b><?php echo $yuh ?></b></font> Mail Server was successful!<br>
	You will receive a report in your email <font color="#D4151B">
<b>(<?php echo $_GET['email']; ?>)</b></font> 
	shortly!
	
	</font>

</td>

</tr></table>

</body>
</html>