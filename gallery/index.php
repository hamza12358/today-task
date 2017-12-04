<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
	include 'db.php';
	for($i=0;$i<count($_FILES['file']['name']);$i++)
	{
		move_uploaded_file($_FILES['file']['tmp_name'][$i],
		'upload/'.$_FILES['file']['name'][$i] );
		
		$file = 'upload/' . $_FILES['file']['name'][$i];
		if (!empty($file)){
		
	
		$query = "INSERT INTO `img` VALUES ('', '$file')";
		if($query_run = mysqli_query($db,$query)){
		/*echo "<div class='alert alert-success'>
    <strong>Success!</strong>Data is inserted.
  </div>";*/
		}else{
			echo '<div class="alert alert-warning">
    <strong>Warning!</strong> This data is already inserted.
  </div>';
		}
	
	 
		}else{
		echo 'please enter all fields';
	}
	}
	mysqli_close($db);
}

?><style>
form
{
	padding:20px;
	margin:auto;
	font-size:20px;
	border-bottom:1px solid grey;
}
img 
{
	margin:10px;
	border:2px solid black;
	width:200px;
	height:200px;
}
</style>
<h1>PHP MYSQL GALLERY</h1>

<?php
include 'db.php';
$get="SELECT * FROM img";
$result = mysqli_query($db,$get);

while($output=mysqli_fetch_assoc($result))
{
	echo '<img src="'.$output['image'].'">';

}
?>
<form method="POST" enctype="multipart/form-data">
<input type="file" name="file[]" required multiple>
<input type="submit" value="upload">