<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>proodos</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
	<div class="header">
		
		<img src="images/carrent.png" class="car-rent">
		
		<div class="search-div">
			<div class="search-up">
				<img src="images/pin.png" class="pin">
				<form name="destination" method="get" onsubmit="validate(event)">
					<input type="text" class="dest-input" id="dest" name="dest-input" placeholder="Destination">
					<input type="submit" value="Search" class="search-btn" name="submit">
				</form>
			</div>
			<div class="search-down">
				<input type="checkbox" id="age" name="age" checked>
				<label for="age">Driver age between 30-65</label>
			</div>
		</div>
		
		<select class="lang">
			<option>English</option>
			<option>Greek</option>
		</select>
	</div>
	
	
	<?php
		include_once 'content.php';
		if (isset($_GET['destination']) || isset($_GET['submit']))
		{
			//$dest = $_GET['dest-input'];
			$dest = filter_input(INPUT_GET, 'dest-input', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $sub = filter_input(INPUT_GET, 'submit', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
			showCars($dest);
		}
	
	?>
	
	<div class="footer">
		<p>This website was made for educational purposes and is not a real car rentals site.</p>
		<a href="https://www.flaticon.com/free-icons/car-rental" title="car rental icons">Car rental icons created by Eucalyp - Flaticon</a>
	</div>
	<script>
		function age()
		{
			var status = document.getElementById("age-box");
			//alert(status);
			//alert("test");
			if (status.style.display != 'inline' )
			{
				status.style.display = 'inline';
			}
			else
			{
				status.style.display = 'none';
			}
		}
		
		function validate(event)
		{
			var found = 0;
			var locations = ['Heraklion', 'Chania'];
			var input = document.getElementById("dest").value;
			for (i=0; i<locations.length ; i++)
			{
				if (input == locations[i])
				{
					found = 1;
				}
			}
			if (found == 1)
			{
				found = 0;
				return true;
			}
			else
			{
				alert(input + " is not a valid destination");
				event.preventDefault();
			}
		}
		
		function book()
		{
			carnames = document.getElementsByClassName("car-name").innerHTML;
			//not working yet
		}
	</script>
  </body>
</html>
