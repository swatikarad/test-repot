<!DOCTYPE html>
<html>
<head>
<?php
if(isset($_POST['add']))
{
$conn=mysql_connect('localhost', 'root', 'root123');
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}


$name1= $_POST['name'];
$name2= $_POST['email'];
$name3= $_POST['comment'];


$query="Insert into Feedback".
"(name,email,comment)
 ".
"VALUES"."('$name1','$name2','$name3')";
mysql_select_db('Beautyparlour');
$result = mysql_query($query,$conn);
if(! $result )
{
  die('Could not enter data: ' . mysql_error());
}

//$row= mysql_fetch_array($result, MYSQL_ASSOC);
echo "Entered data successfully\n";
mysql_close($conn);
}

?>


<?php
Session_write_close();
mysql_close($conn)
?>
<br><br>
<p> <a href="home.html">HOME</a></p>


</body>
</html>

