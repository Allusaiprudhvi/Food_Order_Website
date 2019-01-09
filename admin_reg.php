
<html><h1 style="text-align: center">REGISTRATIONS</h1></html>
<?php
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

$sql1="select * from reg";
$res=$conn->query($sql1);
if($res==false)
{
    die("connectioin not established".$conn->error);

}
echo "<table>";
echo "<tr>";

echo "<th>Contest 1</th>";
echo "<th>Number 1</th>";

echo "<th>Contest 2</th>";
echo "<th>Number 2</th>";

while($row=$res->fetch_array())
{
    echo "<tr>";
    echo "<td>".$row['f1']."</td>";
  echo "<td>".$row['p1']."</td>";
    echo "<td>".$row['f2']."</td>";
      echo "<td>".$row['p2']."</td>";
       
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