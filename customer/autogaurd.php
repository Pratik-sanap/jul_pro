<?php

session_start();

if(!isset($_SESSION["login_status"])){

    echo "Illegal attempt by skiping login";
}




if($_SESSION["login_status"]==false){

    echo "unautorised access";
    die;
}
if($_SESSION['usertype']!="customer"){
    echo "Forbidden access";
    die;
}
?>