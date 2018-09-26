<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include 'connection.php';
$a=$_REQUEST['job'];
if($a==1)
{
	$a=$_POST['name'];
	$b=$_POST['email'];
	$c=$_POST['review'];
	$sql="INSERT INTO `review`( `name`, `email`, `review`) VALUES ('$a','$b','$c')";


	
	if(mysqli_query($con,$sql))
	{
		?>
          <script language="javascript">
	window.alert("Thankyou For Your Valuable Review");
	window.location='shop.php';
	</script>
        <?php
	}
	else
{
	
}
}
//////////////////////////for sign in//////////////////
else if($a==2)
{
	$a=$_POST['name'];
	$b=$_POST['email'];
	$c=$_POST['pass'];
	$sql="INSERT INTO `login`( `name`, `email`, `password`) VALUES ('$a','$b','$c')";


	
	if(mysqli_query($con,$sql))
	{
		?>
          <script language="javascript">
	window.alert("New Admin User Inserted");
	window.location='list.php';
	</script>
        <?php
	}
	else
{
	?>
          <script language="javascript">
	window.alert("Sorry ");
	window.location='login.php';
	</script>
        <?php
}
}
/////////////////////////////////////for login/////////////////
if($a==3)
{
	$a=$_POST['name'];
	$b=$_POST['pass'];
	
	
	$qz = "SELECT name FROM login where name='".$a."' and password='".$b."'" ; 
   
 
    $result = mysqli_query($con,$qz);
   if($row=mysqli_fetch_array($result))
   {
	   ?>
          <script language="javascript">
	window.alert("Welcome Admin");
	window.location='list.php';
	</script>
        <?php
   }
   else
   {
	  ?>
          <script language="javascript">
	window.alert("Wrong username or password");
	window.location='login.php';
	</script>
        <?php	
   }

	

}

?>
</body>
</html>