<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	include 'connection.php';
//$r=$_REQUEST['job'];
$in=$_REQUEST['in'];
//echo $r."<br>".$in;
if ($in==1)
{
function randomDigits($length){
$numbers = range(0,5);
shuffle($numbers);
$digits = "";
for($i = 0;$i < $length;$i++)
$digits .= $numbers[$i];
return $digits;
}	
$b=$_POST['cat'];
$c=$_POST['cat1'];
$a=$_POST['price'];
//echo "<br>".$b."<br>".$c."<br>".$a."<br>";
for($i=0;$i<=count($_FILES["f"]["name"]);$i++)
{
  $ii=randomDigits(5);


$r='P0MD0'.$ii;

$allowedExts=array("gif","jpeg","jpg","png");
$temp=explode(".",$_FILES["f"]["name"][$i]);
$extension=end($temp);


if((($_FILES["f"]["type"][$i]=="image/gif")||
($_FILES["f"]["type"][$i]=="image/jpeg")||
($_FILES["f"]["type"][$i]=="image/jpg")||
($_FILES["f"]["type"][$i]=="image/pjpeg")||
($_FILES["f"]["type"][$i]=="image/png")||
($_FILES["f"]["type"][$i]=="image/x-png")&&($_FILES["f"]["size"][$i]<2000000)
&& in_array($extension,$allowedExts)))
   {
if($_FILES["f"]["error"][$i]>0)
{
	echo"Error".$_FILES["f"]["error"][$i];
}
else
{
	
if(file_exists("img/". $_FILES["f"]["name"][$i]))
{
	?>
      <script language="javascript">
	window.alert("Image Already Exits You cannot insert image with same name as existing!!!!");
	window.location='item.php';
	</script>
    <?php
}
else
{
	move_uploaded_file ($_FILES["f"]["tmp_name"][$i],"img/".$_FILES["f"]["name"][$i]);
	$img="img/".$_FILES["f"]["name"][$i];
//echo "<br>".$b."<br>".$c."<br>".$a."<br>";		
//echo $img;
$sql="INSERT INTO `product`( `item_no`, `category`, `subcat`, `image`, `price`) VALUES ('$r','$b','$c','img/".$_FILES['f']['name'][$i]."',$a)";


	
	if(mysqli_query($con,$sql))
	{
		?>
          <script language="javascript">
	window.alert("New record inserted successfully");
	window.location='item.php';
	</script>
        <?php
	}
	else
{
	?>
      <script language="javascript">
	window.alert("Error In inserting");
	window.location='item.php';
	</script>
    <?php
}
	
}
	
}
   }
}
}
else if($in==2)
{
	$a=$_POST['name'];
	
	
	$sql="INSERT INTO `cat`(  `category`) VALUES ('$a')";


	
	if(mysqli_query($con,$sql))
	{
		?>
          <script language="javascript">
	window.alert("New record inserted successfully");
	window.location='cat.php';
	</script>
        <?php
	}
	else
{
	?>
      <script language="javascript">
	window.alert("Error In inserting");
	window.location='cat.php';
	</script>
    <?php
}
}
if($in==3)
{
	$a=$_POST['occ'];
	$b=$_POST['price'];
	$sql = "UPDATE `product` SET `offer_occation`='$a',`offer_price`=$b,`offer_bit`=1 ";

if ($con->query($sql) === TRUE) {
   ?>
          <script language="javascript">
	window.alert("Offer Inserted");
	window.location='offer.php?job=1';
	</script>
        <?php
	}
	else
{
	?>
      <script language="javascript">
	window.alert("Error In inserting offer");
	window.location='offer.php?job=1';
	</script>
    <?php
}
}
if($in==4)
{

	$a=$_POST['occ'];
	$c=$_POST['cat'];
	$b=$_POST['price'];
	$sql = "UPDATE `product` SET `offer_occation`='$a',`offer_price`=$b,`offer_bit`=1 where  `category`='$c' ";

if ($con->query($sql) === TRUE) {
   ?>
          <script language="javascript">
	window.alert("Offer Inserted for <?php echo $c;?>");
	window.location='offer.php?job=2';
	</script>
        <?php
	}
	else
{
	?>
      <script language="javascript">
	window.alert("Error In inserting offer for <?php echo $c;?>");
	window.location='offer.php?job=2';
	</script>
    <?php
}	
}
else if($in==6)
{
	$a=$_REQUEST['r'];
	$sql = "UPDATE `product` SET `del`=1 where  `item_no`='$a'";

if ($con->query($sql) === TRUE) {
   ?>
          <script language="javascript">
	window.alert("Deleted");
	window.location='list.php';
	</script>
        <?php
	}
	else
{
	?>
      <script language="javascript">
	window.alert("Error In Deleting");
	window.location='list.php';
	</script>
    <?php
}	
}
else if($in==7)
{
	$sql = "UPDATE `product` SET `offer_occation`='null',`offer_price`=0,`offer_bit`=0";

if ($con->query($sql) === TRUE) {
   ?>
          <script language="javascript">
	window.alert("Removed Offer");
	window.location='offer.php?job=3';
	</script>
        <?php
	}
	else
{
	?>
      <script language="javascript">
	window.alert("Error In Removing Offer");
	window.location='offer.php?job=3';
	</script>
    <?php
}	
	
}else if($in==8)
{
	$a=$_POST['cat'];
	$sql = "UPDATE `product` SET `offer_occation`='null',`offer_price`=0,`offer_bit`=0 where  `category`='$a'";

if ($con->query($sql) === TRUE) {
   ?>
          <script language="javascript">
	window.alert("Offer Removed");
	window.location='offer.php?job=4';
	</script>
        <?php
	}
	else
{
	?>
      <script language="javascript">
	window.alert("Error In Removing Offer");
	window.location='offer.php?job=4';
	</script>
    <?php
}	
}



else if($in==9)
{
$b=$_POST['cat'];
$c=$_POST['cat1'];
$a=$_POST['price'];
$r=$_REQUEST['job'];
//echo "<br>".$b."<br>".$c."<br>".$a."<br>";


$allowedExts=array("gif","jpeg","jpg","png");
$temp=explode(".",$_FILES["f"]["name"]);
$extension=end($temp);


if((($_FILES["f"]["type"]=="image/gif")||
($_FILES["f"]["type"]=="image/jpeg")||
($_FILES["f"]["type"]=="image/jpg")||
($_FILES["f"]["type"]=="image/pjpeg")||
($_FILES["f"]["type"]=="image/png")||
($_FILES["f"]["type"]=="image/x-png")&&($_FILES["f"]["size"]<2000000)
&& in_array($extension,$allowedExts)))
   {
if($_FILES["f"]["error"]>0)
{
	echo"Error".$_FILES["f"]["error"];
}
else
{
	

	move_uploaded_file ($_FILES["f"]["tmp_name"],"img/".$_FILES["f"]["name"]);
	$img="img/".$_FILES["f"]["name"];
//echo "<br>".$b."<br>".$c."<br>".$a."<br>";		
//echo $img;
$sql="UPDATE `product` SET `category`='$b',`subcat`='$c',`image`='img/".$_FILES['f']['name']."',`price`=$a WHERE `item_no`='$r' ";


	
	if(mysqli_query($con,$sql))
	{
		?>
          <script language="javascript">
	window.alert("Updated successfully");
	window.location='list.php';
	</script>
        <?php
	}
	else
{
	?>
      <script language="javascript">
	window.alert("Error In updating");
	window.location='list.php';
	</script>
    <?php
}
	
}
	
}
   }
   else if ($in==10)
{
$a=$_POST['name'];
$b=$_POST['add'];
$c=$_POST['phone'];
$d=$_POST['item'];
$e=$_POST['desc'];
$f=$_POST['price'];
$g=$_POST['order'];
$h=$_POST['del'];

//echo "<br>".$b."<br>".$c."<br>".$a."<br>";


$sql="INSERT INTO `record`( `c_name`, `c_address`, `c_contact`, `t_products`, `t_desc`, `t_price`, `order_date`, `del_date`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h')";


	
	if(mysqli_query($con,$sql))
	{
		?>
          <script language="javascript">
	window.alert("New record inserted successfully");
	window.location='recordin.php';
	</script>
        <?php
	}
	else
{
	?>
      <script language="javascript">
	window.alert("Error In inserting");
	window.location='recordin.php';
	</script>
    <?php
}
	


}
?>
</body>
</html>