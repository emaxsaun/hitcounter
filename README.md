Hit Counter
==========

This is a small piece of PHP for use with the JW Player. It will show how hits a particular video has as a counter over the player. The number of hits is stored in a text file.

### [Demo](http://www.pluginsbyethan.com/github/hitcounter.php)

Implementation:
==========

The file counter.php simply needs to be loaded unerneath the closing script tag for your JW Player embed as a PHP include It is that simple. Like so:

<pre>
&lt;?php include 'counter.php'; ?&gt;
</pre>

You also need to make sure that the file counter.txt exists in the same directory as counter.php, that is all.

Example:
==========
<pre>
&lt;script type=&quot;text/javascript&quot; src=&quot;jwplayer.js&quot;&gt;&lt;/script&gt;
&lt;div id=&quot;player&quot;&gt;&lt;/div&gt;
&lt;script type=&quot;text/javascript&quot;&gt;
jwplayer('player').setup({
&nbsp;&nbsp;'width': '575',
&nbsp;&nbsp;'height': '400',
&nbsp;&nbsp;'file': 'video.mp4'
&nbsp;&nbsp;'image': &quot;video.jpg&quot;
});
&lt;/script&gt;
&lt;?php include 'counter.php'; ?&gt;
</pre>

The source code is available for this script. There is just a .php file for PHP. Publishing the PHP can be simply done with any text editor. Enjoy~! :)