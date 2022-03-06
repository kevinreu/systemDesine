<!DOCTYPE html>
<?php
$servername = "localhost";
$database = "u557606075_School";
$username = "u557606075_user";
$password = "Smooth1!";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
if (isset($_POST['Login'])) {
	$emailAddress=$_POST['emailAddress'];
	$password=$_POST['password'];
	$role=$_POST['userRole'];
	$query = "SELECT * FROM `admin` WHERE emailAddress='".$emailAddress."' and password='".$password."' and role='".$usertype."'";
	$result = mysqli_query($conn, $query);
	if($result){
		while($row=mysqli_fetch_array($result)){
			echo'<script type ="text/javascript">alert("sucsess ' .$row['role'].'")</script>';
		}
		if($usertype=="admin"){
			?>
			<script type="text/javascript">
			window.location.href="admin.php"</script>
			<?php
			if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
		}
		else{
			?>
			<script type="text/javascript">
			window.location.href="user.php"</script>
			<?php
			if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
		}
	}else{
		echo 'no result';
	}
}
?>
<html>



<title>login</title>

<body>
	<form>method="post"</form>
		<table>
			<tr>
				<td>Username:<input type="text" name="user" placeholder="Enter Login info here">
				</td>
			</tr>
			<tr>
				<td>Password:<input type="text" name="pass" placeholder="Enter password here">
			</tr>
			<tr>
				<td>
					select user type: <select name="usertype">
						<option value="admin">admin</option>
						<option value="user">user</option>

				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="Login" value="Login">
				</td>
			</tr>
		</table>
</body>

</html>
