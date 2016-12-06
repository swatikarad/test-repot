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


$name1= $_POST['userid'];
$name2= $_POST['passid'];
$name3= $_POST['username'];
$name4= $_POST['address'];
$name5= $_POST['country'];
$name6= $_POST['zip'];
$name7= $_POST['email'];



$query="Insert into Registration".
"(userid,passid,username,address,country,zip,email)
 ".
"VALUES"."('$name1','$name2','$name3','$name4','$name5','$name6','$name7')";
mysql_select_db('Beautyparlour');
$result = mysql_query($query,$conn);
if(! $result )
{
  die('Could not enter data: ' . mysql_error());
}

//$row= mysql_fetch_array($result, MYSQL_ASSOC);
echo "User Succuessfully registered\n";
mysql_close($conn);
}

?>

  
    <title>Registration Form</title>  
      
   </head>  
    <body>  
    
    <h2><center><u>Registration Form</u></center></h2><br><br>  
    <p>Use tab keys to move from one input field to the next.</p>  
     <form id="form1" name="form1" method="post" action="<?php $_PHP_SELF?>">
   <ul>
        <label for="userid">USerID<span>*</span>:</label>
    <input type="text" name="userid" size="30" required="required" /> <br><br>
    <label for="address">Password<span>*</span>:</label>  
    <input type="text" name="passid" size="30" required="required"/><br><br>
        <label for="username">Name<span>*</span>:</label>
    <input type="text" name="username" size="30" required="required" /> <br><br>
    <label for="address">Address<span>*</span>:</label>  
    <input type="text" name="address" size="30" required="required"/><br><br>  
    <label for="country">Country<span>*</span>:</label>  
    <select name="country">  
    <option selected="" value="Default">(Please select a country)</option>  
    <option value="AF">Australia</option>  
    <option value="AL">Canada</option>  
    <option value="DZ">India</option>  
    <option value="AS">Russia</option>  
    <option value="AD">USA</option>  
    </select>  <br><br>
    <label for="zip">ZIP Code<span>*</span>:</label>  
    <input type="text" name="zip" size="10" required="required"/><br><br>  
    <label for="email">Email<span>*</span>:</label>  
    <input type="text" name="email" size="30" required="required" /><br><br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="submit" name="add" value="Submit" id="add" />&nbsp;&nbsp;
  <input type="reset" name="reset" value="Cancel" id="reset">  

    <h3> <a href = "home.html">LOG IN</a> </h3>
    </ul>  
    </form>  
    </body>  
    </html>  
