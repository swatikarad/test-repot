


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

$name1= $_POST['username'];
$name2= $_POST['address'];
$name3= $_POST['country'];
$name4= $_POST['zip'];
$name5= $_POST['email'];
$name6= $_POST['hairstyle'];

$query="Insert into hairstyle".
"(username,address,country,zip,email,hairstyle)
 ".
"VALUES"."('$name1','$name2','$name3','$name4','$name5','$name6')";
mysql_select_db('Beautyparlour');
$result = mysql_query($query,$conn);
if(! $result )
{
  die('Could not enter data: ' . mysql_error());
}


echo "Appointment Fixed\n";
mysql_close($conn);
}

?>

  
    <title>Appointment Form</title>  
      
      
     
    
    </head>  
    <body bgcolor="#F5F5F5">  
    
    <center><h2><u>Appointment Form</u></h2></center><br><br>  
    <p>Use tab keys to move from one input field to the next.</p>  
     <form id="form1" name="form" method="post" action="<?php $_PHP_SELF?>">

     <ul>
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
    <label for="hairstyle">Hair Style<span>*</span>:</label> 
    <select name="hairstyle">
    <option selected="" value="Default">(Please select a hairstyle)</option>
    <option value="SSB">Side Swept Blunt Bangs</option>
    <option value="LB">Long Bob</option>
    <option value="LPC">Long Pin-up curls</option>
    <option value="BC">Blunt Cut</option>
    <option value="LSS">Long side Swept Bangs</option>  
    <option value="BU">Bob Cut</option>
   <option value="FT">French Twist</option>
   <option value="FB">French Braid</option>
   <option value="FG">Fringe</option>
</select><br><br>

     
     
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="submit" name="add" value="Submit" id="add" />&nbsp;&nbsp;
  <input type="reset" name="reset" value="Cancel" id="reset">  
    </ul>
    </form>  <br><br><br>
    <div id="footer">
<img src="voucher.png" alt="Gift voucher"></img>
<p>10% discount free coupon</p>
<p><center><strong>&copy allrights reserved</strong></center></p>
</div>
    </body>  
    </html>  
