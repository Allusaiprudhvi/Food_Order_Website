<?php
session_start();
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
$conn=new mysqli($servername,$username,$password,$database,$port);
if(!$conn)
{
die("connectioin not established".$conn->error);

}
if(isset($_POST['reg']))
{
    $f1=$_POST['f1'];
        $f2=$_POST['f2'];
    $p2=$_POST['p2'];
    $p1=$_POST['p1'];

$sql1="insert into reg values('$f1','$p1','$f2','$p2')";
$res=$conn->query($sql1);

if($res==false)
{
    die("registration problem".$conn->error);
}


echo "<script>
alert('registration is successful');
window.location.href=index.html;
</script>";

}
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Contest Registration</title>
        <h1 style="color:black;text-align: center;font-family: Parisienne;" id="header-text">Beat the Biryani</h1>

  
  <link rel='stylesheet' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <body> 
<h1>Contest registration Form</h1>
  
<div class="content">
	<div class="container">
		    <img width="auto" height="auto" class="bg-img" style="opacity:1"src="../images/i1.jpg" alt="">
			<div class="menu">
				<a href="#connexion" class="btn-connexion"><h2>RULES</h2></a>
				<a href="#enregistrer" class="btn-enregistrer active"><h2>REGISTER</h2></a>
				
			</div>
			<div class="connexion">
				<div class="contact-form" style="color:white;font-size:20px;font-style:bold">
                                    <b>
                                        1)You can Battle out and conquer the biryani in teams of two.<br>
                                        2)Relish the biryani cherish the moments with just a minimal entry fee of 450/-.<br>
                                        3)The ultimate biryani eating competition starts at <b>11 am on 12th October</b> and 
                                         it will be a 45 min long tasty journey!Don't forget to be on time.<br>
                                        4)Participants who report late will not be given any extra time.<br>
                                        5)The winner would be given coupons to treat their taste buds at every food
                                         stall at tathva and that is something none of would let go off!<br>
                                        6)Dont miss this chance, for you never know you might regret it later!<br>
                                        7)Grab this Oppurtunity and register your team before<b> 12 am of 11th October!!</b> 
                                    </b>   
                                        
                                    
                                        
					
					
					
					<div class="check">
						<label>				
							<input id="check" type="checkbox" class="checkbox">
						</label>
					</div>
					
				</div>
				
				<hr>
			</div>
			
			
			<div class="enregistrer active-section">
	
				<div class="contact-form">
                                        <form action="index.php" method="post" >
					<label>FOODIE 1</label>
					<span><input name="f1" placeholder="Name of foodie1" type="text"></span>
					
					<label>CONTACT NUMBER</label>
					<input name="p1" placeholder="MOBILE NUMBER" type="text">	
					
					<label>FOODIE 2</label>
					<input name="f2" placeholder="Name of foodie2" type="text">
					
					<label>CONTACT NUMBER</label>
					<input name="p2" placeholder="MOBILE NUMBER" type="text">
					
					
					
					<input class="submit" name="reg" value="REGISTER" type="submit">	
                                        </form>
						
				</div>
			</div>



			
			
			
	</div>

</div>


</body>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
