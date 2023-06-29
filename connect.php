<?php
$s ="localhost";
$u="root";
$p="";
$d="test1";

$c = new mysqli ($s,$u,$p,$d);
if($c->connect_error)
{
    die("Connection Failed");
}
else
{
    $r = $c->prepare("insert into registration(name,email,number,person,date,time) values(?,?,?,?,?,?)");
    $r -> bind_param("ssiiii",$n,$e,$nu,$p,$d,$t);
    $n = $_POST["name"];
    $e = $_POST["email"];
    $nu = $_POST["number"];
    $p = $_POST["person"];
    $d = $_POST["date"];
    $t = $_POST["time"];
    $r -> execute();
    echo "Order Placed Successfully !";
}
?>