<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<title>雞排菜單</title> 
<html xmlns:fb="http://ogp.me/ns/fb#"><HTML xmlns="http://www.w3.org/1999/xhtml">
	<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>
</head> 
<body>
<!-- //2010 method
<?php
require 'facebook.php';
$facebook = new Facebook(array(
  'appId'  => '253496031362340',
  'secret' => '2444cbed01a8d28813fbb68629ce831d',
  'cookie' => true,
));

$login_url = $facebook->getLoginUrl(array(
    'fbconnect' => 1,
    'canvas' => 0,
    'req_perms' => 'email,publish_stream',
    'next' => 'http://www.google.com',
    'redirect_uri' => 'http://www.yahoo.com.tw/',
));
?>
<ul>
<li><a href="<?php echo $login_url; ?>">測試連結</a></li>
</ul>
--> 

<div data-role="page">

	<div data-role="header">
		<h1>我的雞排政府菜單</h1>
	</div><!-- /header -->

	<div data-role="content">	
	<ul data-role="listview" data-inset="true" data-filter="true">
	<li><a href="#">博士雞排</a></li>
	<li><a href="#">紅海雞排</a></li>
	<li><a href="#">台雞店雞排</a></li>
	<li><a href="#">紅達店雞排</a></li>
	<li><a href="#">蓮花科雞排</a></li>
</ul>	
	</div><!-- /content -->

</div><!-- /page -->

</body>
</html>