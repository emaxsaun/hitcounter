<?php
$filename = "counter.txt" ;
$fd = fopen ($filename , "r") or die ("Can't open $filename") ;
$fstring = fread ($fd , filesize ($filename)) ;
fclose($fd) ;
$fd = fopen ($filename , "w") or die ("Can't open $filename") ;
$fcounted = $fstring + 1 ;
$fout = fwrite ($fd , $fcounted ) ;
fclose($fd) ;
?>
<center>
<div id="counter">
<h4 style="margin-top:12px;"><?php echo "$fstring"; ?></h4>
</div>
</center>
<script type='text/javascript'>
var theCounter = document.getElementById('counter');
theCounter.style.display = 'none';
theCounter.style.color = '#ff0000';
theCounter.style.zIndex = '999';
theCounter.style.fontSize = '18px';
theCounter.style.fontWeight = 'bold';
theCounter.style.backgroundColor = '#999';
theCounter.style.width = '50px';
theCounter.style.height = '50px';
theCounter.style.textAlign = '#center';
theCounter.style.fontFamily = 'arial,sans';
theCounter.style.cursor = 'pointer';
theCounter.style.position = 'absolute';
jwplayer().onReady(function(){
	theCounter.style.display = 'inline';
	theCounter.style.top = jwplayer().getHeight() - jwplayer().getHeight() + 15 + 'px';
	theCounter.style.left = jwplayer().getWidth() - 50 + 'px';
});
</script>