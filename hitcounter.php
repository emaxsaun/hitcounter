<!DOCTYPE html>
<html>
<head>
<title>Hit Counter</title>
</head>
<body>
<script type="text/javascript" src="http://p.jwpcdn.com/6/8/jwplayer.js"></script>
<div id="player"></div>
<script type="text/javascript">
jwplayer("player").setup({
	image: "http://content.bitsontherun.com/thumbs/i8oQD9zd-640.jpg",
    file: "http://content.bitsontherun.com/videos/i8oQD9zd-kNspJqnJ.mp4",
	primary: 'html5'
});
</script>
<?php 
	include 'counter.php'; 
?>
</body>
</html>