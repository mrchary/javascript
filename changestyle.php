<?php include("header.php"); ?>
<h1>What Can JavaScript Do?</h1>

<p id="demo">JavaScript can change the style of an HTML element.</p>

<button type="button" onclick="myFunction()">Click Me!</button>

<script type="text/javascript">
	function myFunction() {
	var x = document.getElementById('demo');
	x.style.fontSize = "25px";
	x.style.color = "red";
}
</script>
<?php include("footer.php"); ?>