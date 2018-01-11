<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head><title><?php echo $site_name; ?>, New candidate registration!</title></head>
<body>
<div style="max-width: 800px; margin: 0;">
<div style="width:800px; border-bottom:solid 1px #CCC; text-align:right; padding: 15px 0; margin-bottom:5px;"><img src="http://www.supportsages.com/img/logo.jpg" alt="Supportsages"/></div>	
<table width="80%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="5%"></td>
<td align="left" width="95%" style="font: 13px/18px Arial, Helvetica, sans-serif;">
<h2 style="font: normal 20px/23px Arial, Helvetica, sans-serif; margin: 0; padding: 0 0 18px; color: black;">New user registered on <?php echo $site_name; ?>!</h2>
Check the details below.<br />
<br />
<br />
Name: <?php echo $name; ?><br />
Email address: <?php echo $email; ?>
<br />
<br />
Alternatively login to the <a href="<?php echo site_url('/login'); ?>" style="color: #3366cc;">administration</a> section to manage the candidate.</a>
<br/>
<br/>
- <?php echo $site_name; ?>
</td>
</tr>
</table>
</div>
</body>
</html>