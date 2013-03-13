<?php 
//set-up to strip out the user agent for the iFamily of devices
$user_agent = $_SERVER['HTTP_USER_AGENT'];

$iPod = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
//if its an iFamily then throw it to the itunes page no need to pass which device, itunes handles that
	if($ipod || $iPhone || $iPad){
			header('Location:https://itunes.apple.com/us/app/hurricane-by-american-red/id545689128?mt=8');
	}
	else{
			header('Location:https://play.google.com/store/apps/details?id=com.cube.arc.hfa');
	}
//now we track this using GA so that you can analyze what the flow to each store is like
?>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Campaign Task</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" user-scale="no">
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-00000000-1']);
  _gaq.push(['_setDomainName', 'yourdomain.com']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_setCampNameKey', 'App splitter']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
</body>
</html>