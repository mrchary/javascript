<?php include("header.php"); ?>
<h2>JavaScript Can Change Images</h2>
<img id="myImage" src="images/pic_bulboff.gif" width="100px" height="180px" onclick="changeImage()">
<p>Click the light bulb to turn on/off the light.</p>
<script type="text/javascript">
	function changeImage() {
		var image = document.getElementById('myImage');
		if(image.src.match("bullbon")) {
			image.src = "images/pic_bulboff.gif";
		} else {
			image.src = "images/pic_bulbon.gif";
		}
	}
</script>


<?php include("footer.php"); ?>