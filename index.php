<?php
include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>table tst</title>
</head>
<style>
	
	input{
		text-align:center;
		display : none;
	}

</style>
<body>

	
	<form action="index.php" method='post'>
    <table class='tab' border="1" style='margin:auto;'>
        <tr>
            <th>name</th>
            <th>fname</th>
            <th>number</th>
            <th>email</th>
            <th><button onclick='edit(event)'>edit</button></th>
        </tr>
        <tr>
            <td><input id='inp1' type="text" name='name' required></td>
            <td><input id='inp2' type="text" name='fname' required></td>
            <td><input id='inp3' type="text" name='number' required></td>
            <td><input id='inp4' type="text" name='email'required> </td>
            <td><button type='submit' value='Send' name='submit'required>save</button></td>
        </tr>
    </table>
</form>
<?php
if(isset($_POST ['submit'])){
$n=$_POST ['name'];
$fn=$_POST ['fname'];
$nu=$_POST ['number'];
$em=$_POST ['email'];
$insert = "insert into tsttable (name, fname, number , email ) values ('$n','$fn','$nu','$em')";
$run_insert = mysqli_query($con,$insert);
header('location: index.php');
};
?>
<script>
function edit(event) {
    event.preventDefault(); 
    document.getElementById('inp1').style.display = 'block';
    document.getElementById('inp2').style.display = 'block';
    document.getElementById('inp3').style.display = 'block';
    document.getElementById('inp4').style.display = 'block';
}
</script>
<br>
</body>
</html>