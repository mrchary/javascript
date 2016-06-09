<?php include("header.php"); ?>
<h1>JavaScript Can Change Images</h1>

<img id="myImage" onclick="changeImage()" src="images/pic_bulboff.gif" width="100" height="180">

<p>Click the light bulb to turn on/off the light.</p>

<script>
function changeImage() {
    var image = document.getElementById('myImage');
    if (image.src.match("bulbon")) {
        image.src = "images/pic_bulboff.gif";
    } else {
        image.src = "images/pic_bulbon.gif";
    }
}
</script>


<?php include("footer.php"); ?>