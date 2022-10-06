<?php
include('dbcon.php');

    if(!empty($_REQUEST ['add-cart']))
    {
        echo"cart";

        $name=$_REQUEST['name'];
        $price=$_REQUEST['price'];
        $description=$_REQUEST['description'];
        $quantity=$_REQUEST['quantity'];
        echo $price;

        $image=$_REQUEST['image1'];

        echo $image;
    

        $query="insert into cart (name,price,description,image1,quantity) values('$name',$price,'$description','$image',$quantity)";
        if(mysqli_query($conn,$query)) 
        {
            echo"<script>
            alert('Item Added to Cart');
            window.location.href='managecart.php';
            </script>";
        }


      
}

   

?>