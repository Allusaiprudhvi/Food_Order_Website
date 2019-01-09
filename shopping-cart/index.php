
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
if(isset($_POST['order']))
{
    $name=$_POST['name'];
    $place=$_POST['place'];
    $number=$_POST['number'];
    $i1=$_POST['i1'];
        $i2=$_POST['i2'];
    $i3=$_POST['i3'];
    $i4=$_POST['i4'];
    $i5=$_POST['i5'];
    $i6=$_POST['i6'];
    $i7=$_POST['i7'];
    $i8=$_POST['i8'];
    $i9=$_POST['i9'];

    
   $sql="insert into Products(name,place,phone_number,i1,i2,i3,i4,i5,i6,i7,i8,i9) values('$name','$place','$number','$i1','$i2','$i3','$i4','$i5','$i6','$i7','$i8','$i9')";  
   if($conn->query($sql)==false)
       die("error in inserting".$conn->error);
   
echo "<script>
alert('order placed successful');
window.history.go(-2);
</script>";
$value1=0;
$value2=0;
$value3=0;
$value4=0;
$value5=0;
$value6=0;
$value7=0;
$value8=0;
$value9=0;
$value11=0;
$value22=0;
$value33=0;
$value44=0;
$value55=0;
$value66=0;
$value77=0;
$value88=0;
$value99=0;
 
}


$value1=0;
$value2=0;
$value3=0;
$value4=0;
$value5=0;
$value6=0;
$value7=0;
$value8=0;
$value9=0;
$value11=0;
$value22=0;
$value33=0;
$value44=0;
$value55=0;
$value66=0;
$value77=0;
$value88=0;
$value99=0;
 

if(isset($_POST['i1']))
{
    $value1=1;
    $value11=200;
}
if(isset($_POST['i2']))
{
    $value2=1;
        $value22=180;

}
if(isset($_POST['i3']))
{
    $value3=1;
        $value33=170;

}
if(isset($_POST['i4']))
{
    $value4=1;
        $value44=160;

}
if(isset($_POST['i56']))
{
    $value5=1;
        $value55=120;

}
if(isset($_POST['i7']))
{
    $value7=1;
        $value77=280;

}
if(isset($_POST['i8']))
{
    $value8=1;
            $value88=500;

    
}
if(isset($_POST['i9']))
{
    $value9=1;
        $value99=750;

}



?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopping Cart</title>

    <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
    <script src="https://code.jquery.com/jquery-2.2.4.js" charset="utf-8"></script>
    <meta name="robots" content="noindex,follow" />
  </head>
  <body>
    <div class="shopping-cart">
      <!-- Title -->
      <div class="title">
        Delivery Bag
      </div>
      
      <form method="post"   action="#"  >
          <h1 style="color:black">Delivery available only for NITC, KERALA</h1>
<input type="text" class="in" name="name" placeholder="Enter Your Full Name" required>
<input type="text" class="in" name="number" placeholder="Enter Your Mobile Number" required>
<input type="text" class="in" name="place" placeholder="Enter Place" required>

      <!-- Product #1 -->
      <div class="item">
        <div class="buttons">
          <span class="delete-btn"></span>
          <span class="like-btn"></span>
        </div>

        <div class="image">
          <img src="../images/chicken_1.jpeg" alt="" />
        </div>

        <div class="description">
          <span>Double Egg </span>
          <span>Chicken Pulao</span>
        </div>

        <div class="quantity">
          <button class="plus-btn" type="button" name="button" onclick="add1()">
            <img src="plus.svg" alt="" />
          </button>
          <input type="text" name="i1" id="i1" value=<?=$value1?>>
          <button class="minus-btn" type="button" name="button" onclick="sub1()">
            <img src="minus.svg" alt="" />
          </button>
        </div>

        <div class="total-price"><span>&#x20B9;</span> <p id="v1"><?=$value11?></p></div>
      </div>

      <!-- Product #2 -->
      <div class="item">
        <div class="buttons">
          <span class="delete-btn"></span>
          <span class="like-btn"></span>
        </div>

        <div class="image">
          <img src="../images/chicken2_1.jpg" alt=""/>
        </div>

        <div class="description">
          <span>Chicken Pulao</span>
          <span></span>
          <span></span>
        </div>

        <div class="quantity">
          <button class="plus-btn" type="button" name="button" onclick="add2()">
            <img src="plus.svg" alt="" />
          </button>
          <input type="text" name="i2" id="i2" value=<?=$value2?>>
          <button class="minus-btn" type="button" name="button" onclick="sub2()">
            <img src="minus.svg" alt="" />
          </button>
        </div>

        <div class="total-price"><span>&#x20B9;</span> <p id="v2"><?=$value22?></p></div>
      </div>

      <!-- Product #3 -->
      <div class="item">
        <div class="buttons">
          <span class="delete-btn"></span>
          <span class="like-btn"></span>
        </div>

        <div class="image">
          <img src="../images/eggb_1.jpg" alt="" />
        </div>

        <div class="description">
          <span>Egg Pulao</span>
          <span></span>
         <span></span>
        </div>

        <div class="quantity">
          <button class="plus-btn" type="button" name="button" onclick="add3()">
            <img src="plus.svg" alt="" />
          </button>
          <input type="text" name="i3" id="i3" value=<?=$value3?>>
          <button class="minus-btn" type="button" name="button" onclick="sub3()">
            <img src="minus.svg" alt="" />
          </button>
        </div>

        <div class="total-price"><span>&#x20B9;</span> <span id="v3"><?=$value33?></span></div>
      </div>
   
<!--Product 4-->
 <div class="item">
        <div class="buttons">
          <span class="delete-btn"></span>
          <span class="like-btn"></span>
        </div>

        <div class="image">
          <img src="../images/paneer_1.jpg" alt="" />
        </div>

        <div class="description">
          <span>Paneer Pulao</span>
         <span></span>
        </div>

        <div class="quantity">
          <button class="plus-btn" type="button" name="button" onclick="add4()">
            <img src="plus.svg" alt="" />
          </button>
          <input type="text" name="i4" id="i4" value=<?=$value4?>>
          <button class="minus-btn" type="button" name="button" onclick="sub4()">
            <img src="minus.svg" alt="" />
          </button>
        </div>

        <div class="total-price"><span>&#x20B9;</span> <span id="v4"><?=$value44?></span></div>
      </div>
    
<!--Product 5-->
 <div class="item">
        <div class="buttons">
          <span class="delete-btn"></span>
          <span class="like-btn"></span>
        </div>

        <div class="image">
          <img src="../images/tikka_1.jpeg" alt="" />
        </div>

        <div class="description">
          <span>Chicken Tikka</span>
         <span>4 pieces</span>
        </div>

        <div class="quantity">
          <button class="plus-btn" type="button" name="button" onclick="add5()">
            <img src="plus.svg" alt="" />
          </button>
          <input type="text" name="i5" id="i5" value=<?=$value5?>>
          <button class="minus-btn" type="button" name="button" onclick="sub5()">
            <img src="minus.svg" alt="" />
          </button>
        </div>

        <div class="total-price"><span>&#x20B9;</span> <span id="v5"><?=$value55?></span></div>
      </div>
      <!-- Product #6-->

<div class="item">
        <div class="buttons">
          <span class="delete-btn"></span>
          <span class="like-btn"></span>
        </div>

        <div class="image">
          <img src="../images/tikka_1.jpeg" alt="" />
        </div>

        <div class="description">
          <span>Chicken Tikka</span>
         <span>8 pieces</span>
        </div>

        <div class="quantity">
          <button class="plus-btn" type="button" name="button" onclick="add6()">
            <img src="plus.svg" alt="" />
          </button>
          <input type="text" name="i6" id="i6" value=<?=$value6?>>
          <button class="minus-btn" type="button" name="button" onclick="sub6()">
            <img src="minus.svg" alt="" />
          </button>
        </div>

        <div class="total-price"><span>&#x20B9;</span> <span id="v6"><?=$value66?></span></div>
      </div>

      <!-- Product #7-->

<div class="item">
        <div class="buttons">
          <span class="delete-btn"></span>
          <span class="like-btn"></span>
        </div>

        <div class="image">
          <img src="i6.jpg" alt="" />
        </div>

        <div class="description">
          <span>Chicken Pulao</span>
          <span></span>
         <span>1 FULL</span>
         <span>+</span>
         <span>Chicken Tikka</span>
         <span>4 pieces</span>
        </div>

        <div class="quantity">
          <button class="plus-btn" type="button" name="button" onclick="add7()">
            <img src="plus.svg" alt="" />
          </button>
          <input type="text" name="i7" id="i7" value=<?=$value7?>>
          <button class="minus-btn" type="button" name="button" onclick="sub7()">
            <img src="minus.svg" alt="" />
          </button>
        </div>

        <div class="total-price"><span>&#x20B9;</span> <span id="v7"><?=$value77?></span></div>
      </div>

<div class="item">
        <div class="buttons">
          <span class="delete-btn"></span>
          <span class="like-btn"></span>
        </div>

        <div class="image">
          <img src="i6.jpg" alt="" />
        </div>

        <div class="description">
          <span>Chicken Pulao</span>
          <span></span>
         <span>2 FULL</span>
         <span>+</span>
         <span>Chicken Tikka</span>
         <span>6 pieces</span>
        </div>

        <div class="quantity">
          <button class="plus-btn" type="button" name="button" onclick="add8()">
            <img src="plus.svg" alt="" />
          </button>
          <input type="text" name="i8" id="i8" value=<?=$value8?>>
          <button class="minus-btn" type="button" name="button" onclick="sub8()">
            <img src="minus.svg" alt="" />
          </button>
        </div>

        <div class="total-price"><span>&#x20B9;</span> <span id="v8"><?=$value88?></span></div>
      </div>

<div class="item">
        <div class="buttons">
          <span class="delete-btn"></span>
          <span class="like-btn"></span>
        </div>

        <div class="image">
          <img src="i6.jpg" alt="" />
        </div>

        <div class="description">
          <span>Chicken Pulao</span>
          <span></span>
         <span>3 FULL</span>
         <span>+</span>
         <span>Chicken Tikka</span>
         <span>10 pieces</span>
        </div>

        <div class="quantity">
          <button class="plus-btn" type="button" name="button" onclick="add9()">
            <img src="plus.svg" alt="" />
          </button>
          <input type="text" name="i9" id="i9" value=<?=$value9?>>
          <button class="minus-btn" type="button" name="button" onclick="sub9()">
            <img src="minus.svg" alt="" />
          </button>
        </div>

        <div class="total-price"><span>&#x20B9;</span> <span id="v9"><?=$value99?></span></div>
      </div>
<input type="submit" id="button" name="order" value="Confirm Order">

</form>


    </div>

  </body>
</html>
<script type="text/javascript">
    function order()
    {
 alert("Orders will be taken soon");
        return false;
    }
  function add1()
      {
       
        var v=document.getElementById("i1").value;
        v=(parseInt(v)+1)*200;
                document.getElementById("v1").innerHTML=v;
        
      }   
 function sub1() 
     {
       
        var v=document.getElementById("i1").value;
        v=(parseInt(v)-1)*200
        if(v<0)
            v=0;

        document.getElementById("v1").innerHTML=v;
        
      }


  function add2()
      {
       
        var v=document.getElementById("i2").value;
        v=(parseInt(v)+1)*180;
        document.getElementById("v2").innerHTML=v;
        
      }   
 function sub2() 
     {
       
        var v=document.getElementById("i2").value;
        
        v=(parseInt(v)-1)*180;
        if(v<0)
            v=0;

        document.getElementById("v2").innerHTML=v;
        
      }
function add3()
      {
       
        var v=document.getElementById("i3").value;
        v=(parseInt(v)+1)*170;
        document.getElementById("v3").innerHTML=v;
        
      }   
 function sub3() 
     {
       
        var v=document.getElementById("i3").value;
        v=(parseInt(v)-1)*170;
        if(v<0)
            v=0;

        document.getElementById("v3").innerHTML=v;
        
      }
function add4()
      {
       
        var v=document.getElementById("i4").value;
        v=(parseInt(v)+1)*160;
        document.getElementById("v4").innerHTML=v;
        
      }   
 function sub4() 
     {
       
        var v=document.getElementById("i4").value;
        v=(parseInt(v)-1)*160;
        if(v<0)
            v=0;

        document.getElementById("v4").innerHTML=v;
        
      }
function add5()
      {
       
        var v=document.getElementById("i5").value;
        v=(parseInt(v)+1)*120;
     
        document.getElementById("v5").innerHTML=v;
        
      }   
 function sub5() 
     {
       
        var v=document.getElementById("i5").value;
        v=(parseInt(v)-1)*120;
        if(v<0)
            v=0;

        document.getElementById("v5").innerHTML=v;
        
      }
function add6()
      {
       
        var v=document.getElementById("i6").value;
        v=(parseInt(v)+1)*200;
        document.getElementById("v6").innerHTML=v;
        
      }   
 function sub6() 
     {
       
        var v=document.getElementById("i6").value;
        v=(parseInt(v)-1)*200;
        if(v<0)
            v=0;

        document.getElementById("v6").innerHTML=v;
        
      }
function add7()
      {
       
        var v=document.getElementById("i7").value;
        v=(parseInt(v)+1)*280;
        document.getElementById("v7").innerHTML=v;
        
      }   
 function sub7() 
     {
       
        var v=document.getElementById("i7").value;
        v=(parseInt(v)-1)*280;
        if(v<0)
            v=0;

        document.getElementById("v7").innerHTML=v;
        
      }
function add8()
      {
       
        var v=document.getElementById("i8").value;
        v=(parseInt(v)+1)*500;
        document.getElementById("v8").innerHTML=v;
        
      }   
 function sub8() 
     {
       
        var v=document.getElementById("i8").value;
        v=(parseInt(v)-1)*500;
        if(v<0)
            v=0;

        document.getElementById("v8").innerHTML=v;
        
      }
function add9()
      {
       
        var v=document.getElementById("i9").value;
        v=(parseInt(v)+1)*750;
        document.getElementById("v9").innerHTML=v;
        
      }   
 function sub9() 
     {
       
        var v=document.getElementById("i9").value;
        v=(parseInt(v)-1)*750;
        if(v<0)
            v=0;

        document.getElementById("v9").innerHTML=v;
        
      }



    </script>
    <script type="text/javascript">
      
      $('.minus-btn').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $input = $this.closest('div').find('input');
        var value = parseInt($input.val());

        if (value > 1) {
          value = value - 1;
        } else {
          value = 0;
        }

        $input.val(value);

      });

      $('.plus-btn').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $input = $this.closest('div').find('input');
        var value = parseInt($input.val());

        if (value < 100) {
          value = value + 1;
        } else {
          value =100;
        }

        $input.val(value);
      });

      $('.like-btn').on('click', function() {
        $(this).toggleClass('is-active');
      });
    </script>