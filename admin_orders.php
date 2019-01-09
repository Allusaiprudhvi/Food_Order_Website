
<html>
        <h1 style="text-align:center">ORDERS</h1>

</html>
<?php
/*$servername="localhost";
$username="b160865cs";
$password="omshiridisai";
$database="db_b160865cs";

   */
$servername="localhost";
$username="root";
$password="omshiridisai";
$database="food_order";
$port=3300; 
$page = $_SERVER['PHP_SELF'];
$sec = "10";

   
    

$conn=new mysqli($servername,$username,$password,$database,3300);
if(!$conn)
{
die("connectioin not established".$conn->error);

}

$sql1="select * from Products";
$res=$conn->query($sql1);
if($res==false)
{
    die("connectioin not established".$conn->error);

}
echo "<table>";
echo "<tr>";
echo "<th>Sno</th>";

echo "<th>Name</th>";
echo "<th>Place</th>";
echo "<th>Phone Number</th>";
echo "<th>Double Egg Chicken Pulao</th>";
echo "<th>Chicken Pulao</th>";
echo "<th>Egg Pulao</th>";
echo "<th>Paneer Pulao</th>";
echo "<th>Chicken Tikka(4 pcs)</th>";
echo "<th>Chicken Tikka(8 pcs)</th>";
echo "<th>Chicken Pulao(1)+Chic.Tikka(4 pcs)</th>";
echo "<th>Chicken Pulao(2)+Chic.Tikka(6 pcs)</th>";
echo "<th>Chicken Pulao(3)+Chic.Tikka(10 pcs)</th>";
echo "</tr>";

while($row=$res->fetch_array())
{
    echo "<tr>";
    echo "<td>".$row['sno']."</td>";
  echo "<td>".$row['name']."</td>";
    echo "<td>".$row['place']."</td>";
      echo "<td>".$row['phone_number']."</td>";
        echo "<td>".$row['i1']."</td>";
        echo "<td>".$row['i2']."</td>";
        echo "<td>".$row['i3']."</td>";
        echo "<td>".$row['i4']."</td>";
        echo "<td>".$row['i5']."</td>";
        echo "<td>".$row['i6']."</td>";
        echo "<td>".$row['i7']."</td>";
        echo "<td>".$row['i8']."</td>";
        echo "<td>".$row['i9']."</td>";
echo "</tr>";


}
echo "</table>";

?>
<html>
    <head>
            <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">

        <style>
            body{
                background-color: gray;
            }
             table{
                margin-top: 100px;

            }
            th,td
            {
                                                             background-color:white;

                border-radius:20px;
                border:2px solid white;
                padding:5px;
                border-collapse: collapse;
                text-align: center;
            }
            </style>
    </head>
</html>