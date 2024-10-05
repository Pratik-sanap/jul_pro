<?php

session_start();
$_SESSION["login_status"]=false;




$conn=new mysqli("localhost","root","","acme24_jul",3306);
$query="select * from user where username='$_POST[username]' and password='$_POST[password]'";
echo  $query;
$sql_request=mysqli_query($conn,$query);



echo"<hr>";
print_r($sql_request);
echo "<br>";
if(
    $sql_request->num_rows>0
)
{
    echo"Login success";
   

    $dbrow=mysqli_fetch_assoc($sql_request);
    $_SESSION["login_status"]=true;
    $_SESSION["usertype"]=$dbrow['usertype'];
    $_SESSION["userid"]=$dbrow['userid'];

    echo "<hr>";
    print_r($dbrow);

    if($dbrow['usertype']=='vendor'){

        header("location:../vendor/home.php");

    }
    else if ($dbrow['usertype']=='customer'){

        header("location:../customer/home.php");
    }
}
?>