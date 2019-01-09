<?php
$servername="localhost";
$username="b160865cs";
$password="omshiridisai";
$database="db_b160865cs";
$conn=new mysqli($servername,$username,$password,$database);
if(!$conn)
{
die("connectioin not established".$conn->error);

}
$sql="delete from reg where f1='Dham biryani'";
if($conn->query($sql)==false)
{
    die("problem in adding column".$conn->error);
}

?>