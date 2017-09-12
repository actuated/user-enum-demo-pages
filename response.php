<!--
User Enumeration PHP Pages
Ted R (github: actuaTed)
response.php - v1.2 - 9/9/2017
-->
<?php
$user = $_POST['username'];
$pass = $_POST['password'];
if(($user == "demo")|
($user == "admin")||
($user == "asmith")|
($user == "csmith")|
($user == "esmith")) { 
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
<style type="text/css" media="screen">
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
			<form method=post action=response.php name=myform>
<?php
if($usergood == 1){
    echo "Please log in<br><font color=red>Password incorrect</font><br>Username:<br><input type=text name=username size=50 autocomplete=off><br>\n";
} elseif($usergood ==2) {
    echo "Please log in<br><font color=red>User not found</font><br>Username:<br><input type=text name=username size=50 autocomplete=off><br>\n";
} else {
    echo "Please log in<br><br>Username:<br><input type=text name=username size=50 autocomplete=off><br>\n";
}
?>
			Password:<br><input type=password name=password value="" size=50 autocomplete=off><br><br><center>
			<input type=submit name=button value=Login>		
		</td>
	</tr>
</table>
</body>
</html>
