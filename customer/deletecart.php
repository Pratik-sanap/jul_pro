<?php

    $pid=$_GET['pid'];
    echo "received pid=$pid";

    include "../shared/connection.php";

    mysqli_query($conn,"delete from product where pid=$pid");

    header("location:viewcart.php");
    


?>
