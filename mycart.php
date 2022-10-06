<?php
include("dbcon.php");

if(!empty($_REQUEST['did']))
{
    $id=$_REQUEST['did'];
    $query="delete from cart where id=$id";
    mysqli_query($conn,$query);
}

if(!empty($_REQUEST['add']))
{
    $quantity=$_REQUEST['add'];
    $query="update cart set quantity=quantity+1 where id = $quantity ";
    mysqli_query($conn,$query);


    $id=$_REQUEST['add'];
    
    $query="update cart set total=price*quantity where id = $id ";
    mysqli_query($conn,$query); 


}

if(!empty($_REQUEST['minus']))
{
    $quantity=$_REQUEST['minus'];

    $query="update cart set quantity=quantity-1 where id = $quantity ";
    mysqli_query($conn,$query);
    $id=$_REQUEST['minus'];
    
    $query="update cart set total=price*quantity where id = $id ";
    mysqli_query($conn,$query); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://fonts.google.com/share?selection.family=Inter%7CPoppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,100">
    <link rel="stylesheet" href="gardeners.css" >
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
        <form >
        <tr>
            <td><?php echo $row['name']  ?></td>    
            <td><img width=250px height=250px  alt="Image not found"  src="images/<?php echo $row['image1']  ?>"></td>
            <td><?php echo $row['price']  ?><input type='hidden' class='iprice' value="<?php $row['price']?>">  </td>
            <td><?php echo $row['description']  ?> </td>

            <td><button type="submit" name="add" value="<?php echo $row['id'] ?>"><i  class="fa-regular fa-plus"></i></button> <?php echo $row['quantity']  ?> <button name="minus"  value="<?php echo $row['id']  ?>"><i class="fa-solid fa-minus"></i></button></td>

            <td><?php echo $row['total']  ?></td>

            <td><a href="mycart.php?did=<?php echo $row['id'] ?>">Remove</td>
        </tr>
        </form>
        <?php
}?>
    </table>
<!------------------------------------->



  <h4>Total:</h4>
 <?php
$query="select sum(total) as total from cart";
$result=mysqli_query($conn,$query);

$result=mysqli_fetch_assoc($result);

print_r($result);



 ?>
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



