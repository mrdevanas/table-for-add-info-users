<?php
include('conn.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	

<table class='tab' border="1" style='margin:auto;'>
		<tr>
		<th>name</th>
		<th>fname</th>
		<th>number</th>
		<th>email</th>
		<th>date</th>
	</tr>
	<?php
	$query ="select * from tsttable ORDER BY id DESC";
	$run =  mysqli_query($con,$query);
	while ($row = mysqli_fetch_array($run)) {
        $name = $row['name'];
        $fname = $row['fname'];
        $number = $row['number'];
        $email = $row['email'];
        $date = $row['date'];

	
	?>
		<tr>
			<td><p id='inpr1' type="text" ><?php echo $name; ?></td>
			<td><p id='inpr2' type="text" name='fname'><?php echo $fname; ?></td>
			<td><p id='inpr3' type="number" name='number'><?php echo $number; ?></td>
			<td><p id='inpr4' type="text" name='email'><?php echo $email; ?></td>
			<td><p><?php echo $date; ?></p></td>
		</tr><?php
};
?>
	</table>
	
</body>
</html>