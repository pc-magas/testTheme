</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#nav-dropdown').click(function(){
		console.log("CLicked");
		$('#sidebar').hide();
		$('#mobile-nav .nav').toggle();
	});

	$('#sidebar-dropdown').click(function(){
		$('#mobile-nav .nav').hide();
		$('#sidebar').toggle();
	});

	//An idea on how to always show sidebar when widnow gwts resided to its original width
	$( window ).resize(function() {
		if ($('#mobile-nav').css('display') == 'none') {
			$('#sidebar').show();
		} else {
			$('#sidebar').hide();
		}
	});
});
</script>

<footer>
	<span>Credits:</span>
	<ul>
		<li>Color selection from <a href="http://www.colourlovers.com/palette/1122576/Honey_Bee" target="_blank">"HoneyBEE"</a> by <a href="http://www.colourlovers.com/lover/LJK" target="_blank">LJK</a> from COLOURlovers licenced under CC-BY-NC-SA</li>
		<li>Wordpress theme provided by <a href="www.linkedin.com/in/ddesillas" target="__blank" >pc-magas</a></li>
	</ul>
</footer>
</body>
</html>