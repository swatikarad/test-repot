


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
$name6= $_POST['bride'];




$query="Insert into bride".
"(username,address,country,zip,email,bride)
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
    <body>  
    
    <h2><center><u>Appointment Form</u></center></h2><br><br>  
    <p>Use tab keys to move from one input field to the next.</p>  
     <form id="form1" name="form3" method="post" action="<?php $_PHP_SELF?>">

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
    <label for="bride">Bridal Make Up<span>*</span>:</label> 
    <select name="bride">
    <option selected="" value="Default">(Please select a bridal make up)</option>
    
    
  
    <option value="BBM">Bengali Bridal Make Up </option>
    <option value="MBM">Maharashtrian Bridal Make Up</option>
    <option value="TBM">Tamil Bridal Make Up</option>
    <option value="KBM">Kashmirian Bridal Make Up</option>
   
</select><br><br>

     
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="submit" name="add" value="Submit" id="add" />&nbsp;&nbsp;
  <input type="reset" name="reset" value="Cancel" id="reset">  
    <ul>
    </form> <br><br><br>
    <div id="footer">
    <img src="voucher.png" alt="Gift voucher"></img>
    <p>10% discount free coupon</p>
    <p><center><strong>&copy allrights reserved</strong></center></p>
   </div> 
    </body>  
    </html>  
