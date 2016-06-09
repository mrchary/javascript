<?php include("header.php"); ?>
<h1>JavaScript Can Validate Input</h1>

<p>Please input a number between 1 and 10:</p>

<input class="form-control" id="numb">

<button class="btn btn-primary" type="button" onclick="myFunction()">Submit</button>

<p id="demo"></p>
<script type="text/javascript">
	function myFunction(){
		var x , text ; 
		x = document.getElementById('numb').value;
		if(isNaN(x) || x <1 || x >10){
			text = "Not valide";
		} else {
			text = "Input Ok";
		}

		document.getElementById("demo").innerHTML = text;
	}
</script>
<?php include("footer.php"); ?>