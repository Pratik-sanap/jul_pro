<?php

$conn=new mysqli("localhost","root","","acme24_jul",3306);

if (isset($_POST[`username`]))  {
mysqli_query($conn,"insert into user (username,password,usertype) values (`$_POST[username]`,`$_POST[password1]`,`$_POST[usertype]`)");
}

?>