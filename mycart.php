<?php
include("dbcon.php");

if(!empty($_REQUEST['did']))
{
    $id=$_REQUEST['did'];
    $query="delete from cart where id=$id";
    mysqli_query($conn,$query);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cart</title>
    <link rel="stylesheet" href="gardeners.css">
</head>
<body>
  
    <h1>MY  CART</h1>
    <table border=1px>
        <tr>
        <th>Item Name</th>
        <th>Image</th>
        <th>Item Price</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Total</th>
        <th>Remove</th>
        </tr>
     </thead>

      <?php
        $query="select * from cart";
        $result=mysqli_query($conn,$query);
        $total=0;
       while($row=mysqli_fetch_assoc($result))
		{		
      ?>
        <form action='manage cart.php' method='POST'>
        <tr>
            <td><?php echo $row['name']  ?></td>    
            <td><img width=250px height=250px  alt="Image not found"  src="images/<?php echo $row['image1']  ?>"></td>
            <td><?php echo $row['price']  ?><input type='hidden' class='iprice' value="<?php $row['price']?>">  </td>
            <td><?php echo $row['description']  ?> </td>

            <td><input  onchange='subTotal();' type='number'  value='$value[quanity]' min='1' max='20'></td>

            <td class='itotal'></td>

            <td><a href="mycart.php?did=<?php echo $row['id'] ?>">Remove</td>
        </tr>
        </form>
        <?php
}?>
    </table>
<!------------------------------------->



  <h4>Total:</h4>
  <h5  class="text-right" id="gtotal"></h5>
  <br>
     <form method="POST">
         <div class="cash">
             <input type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
             <label >Cash on delivery</label>       
         </div>
         <div class="online" >
             <input type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
             <label>Pay Online</label>
         </div>
         <br>
        <button >Make Purchase</button>
     </form>
  </div>
</div>
         </div>
    </div>
    <!------------------------------------->





<script>

var gt=0; 
var iprice=document.getElementsByClassName('iprice');
var iquantity=document.getElementsByClassName('iquantity');
var itotal=document.getElementsByClassName('itotal');
var gtotal=document.getElementById('gtotal');

function subTotal()
{
    gt=0;
    for(i=0;i<iprice.length;i++)
    {
        itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
        gt=gt+(iprice[i].value)*(iquantity[i].value);
    }
    gtotal.innerText=gt;
}

subTotal();
</script>

