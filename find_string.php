<?php include("header.php"); ?>
<p id="p1">Please locate where 'locate' occurs!.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
    var str = document.getElementById("p1").innerHTML;
    var pos = str.indexOf("locate");
    document.getElementById("demo").innerHTML = pos;
}
</script>
<?php include("footer.php"); ?>