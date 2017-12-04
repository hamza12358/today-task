<?php ?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>vidoe upload</title>

   </head>
    <body>
	
	  <form action="upload.php" method="post" enctype="multipart/form-data">
	    <h2>upload video </h2>
		<input type="file" name="files[]" required multiple ><br/>
		<input type="submit" name="submit" value="submit">
		</form>
		<?php