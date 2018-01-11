<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head><title>Welcome to <?php echo $site_name; ?>!</title></head>
<body>
<div style="max-width: 800px; margin: 0;">
<div style="width:800px; border-bottom:solid 1px #CCC; text-align:right; padding: 15px 0; margin-bottom:5px;"><img src="http://www.supportsages.com/img/logo.jpg" alt="Supportsages"/></div>	
<table width="80%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="5%"></td>
<td align="left" width="95%" style="font: 13px/18px Arial, Helvetica, sans-serif;">
<h2 style="font: normal 20px/23px Arial, Helvetica, sans-serif; margin: 0; padding: 0 0 18px; color: black;">Welcome to <?php echo $site_name; ?>!</h2>
Thanks for your applying with <?php echo $site_name; ?>. We listed your sign in details below, make sure you keep them safe.<br />
To open your <?php echo $site_name; ?> homepage, please follow this link:<br />
<br />
<big style="font: 16px/18px Arial, Helvetica, sans-serif;"><b><a href="<?php echo site_url('/login'); ?>" style="color: #3366cc;">Go to <?php echo $site_name; ?> now!</a></b></big><br />
<br />
Link doesn't work? Copy the following link to your browser address bar:<br />
<nobr><a href="<?php echo site_url('/login'); ?>" style="color: #3366cc;"><?php echo site_url('/login/'); ?></a></nobr><br />
<br />
<br />
Your email address: <?php echo $email; ?><br />
Your password: <?php echo $password; ?><br />
<br />
<br />
We will get back to you shortly after reviewing your application. We appreciate your patience.<br/><br/> 
Have fun!<br />
HR - <?php echo $site_name; ?>
</td>
</tr>
</table>
</div>
</body>
</html>