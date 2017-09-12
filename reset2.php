<!--
User Enumeration PHP Pages
Ted R (github: actuaTed)
reset2.php - v1.2 - 9/9/2017
-->
<?php
$user = $_POST['email'];
if(($user == "demo@example.com")|
($user == "admin@example.com")||
($user == "asmith@example.com")|
($user == "csmith@example.com")|
($user == "esmith@example.com")) { 
    $usergood = 1;
} elseif($user == "") {
    $usergood = 0;
} 
else {
    $usergood = 2;
}
?>
<html>
<head>
<script>
function setFocus(){
<?php
if($usergood == 1){
    echo "document.myform.pass.focus();\n";
} else {
    echo "document.myform.user.focus();\n";
}
?>
}
</script>
<title>User Enumeration</title>
<style type="text/css">
html, body {margin: 0; padding: 0; height: 100%;}
body {font: medium arial, sans-serif;}
#content {
text-align: center;
position: absolute;
left: 50%;
height: 150px;
margin-top: 50px;
width: 400px;
margin-left: -200px;
}
#content span {font-weight: bold;font-size: medium}
</style>
</head>
<body onLoad="setFocus()">
<table border=0 cellspacing=3 cellpadding=10 id=content bgcolor=336699>
	<tr>
		<td align=left bgcolor=FFFFFF>
			<form method=post action=reset2.php name=myform>
<?php
if($usergood == 1){
    echo "Please enter your email address:<br><font color=green>Instructions have been emailed to you</font><br>Email Address:<br><input type=text name=email size=50 autocomplete=off><br>\n";
} elseif($usergood ==2) {
    echo "Please enter your email address:<br><font color=green> Instructions have been emailed to you </font><br>Email Address:<br><input type=text name=email size=50 autocomplete=off><br>\n";
} else {
    echo "Please enter your email address:<br><br>Email Address:<br><input type=text name=email size=50 autocomplete=off><br>\n";
}
?>
			<br><center>
			<input type=submit name=button value="Reset Password">		
		</td>
	</tr>
</table>
</body>
</html>
