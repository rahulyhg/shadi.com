<?php 
 
include_once('connectioncore.php'); 
$sqlprofile = "select * from registration ";
	 $rsprofile = mysql_query($sqlprofile);
	 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Look For Me</title>
<link rel="stylesheet" type="text/css" href="svstylesheet.css" />
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.2-dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/javascript" href="bootstrap-3.3.2-dist/js/bootstrap.min.js" />
</head>

<body>
<?php 
include ('headermain.php');
include_once('uppermenu.php'); ?>
<div class="container" id="pmatch">
<div id="preferred">
<p style="background-color:#cc0000; height:30px; color:#FFFFFF"><b>Looking for Me</b></p>
<p align="right"><a href="shubhvivahhomepage.php">Home</a> >> <i>Looking for Me</i></p>
<p style="background-color:#666666; height:30px; color:#FFFFFF"><b><i><label></label> Profile Match Found</i></b></p>
<?php
while($rowprofile = mysql_fetch_array($rsprofile))
	 {
		$user_id = $rowprofile['user_id'];
		  
		 $aboutmyself = $rowprofile['aboutMyself'];
		$Path=$rowprofile['Path'];
		
		
		?>
<div id="profile1">
<p><b>Profile Id: <label><?php echo $user_id;?></label></b></p>
<div id="preferredimage">
<?php echo '<img src  = "'.$Path.'" height = "160" width = "140"/>';?>
</div><hr id="hr" />
<label><?php 

echo substr($aboutmyself,0,25).'<a href="#">Read More...</a>';
?> </label>
</div>
<?php } ?>
<p align="right"><input type="button" value="Pre" /><input type="button" value="Next" /></p>

</div>

</div>
</body>
</html>
