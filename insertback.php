<?php
require 'dbcon.php';

//--------------------insert-------------------
if(!empty($_REQUEST['add']))
{
  $name = $_REQUEST['name'];
  $description=$_REQUEST['description'];
  $price=$_REQUEST['price'];

  
    $filename=$_FILES['file']['name'];
    $filepath=$_FILES['file']['tmp_name'];
    $imagename=explode(".",$filename);
    $ext=$imagename[1];
 
    $query="show table  status like 'products'";
    $result=mysqli_query($connect,$query);
    $row=(mysqli_fetch_assoc($result)); 
    //print_r($row);
    $id=$row['Auto_increment'];
    //echo "$id";
    $newfilename=$id.".".$ext;
    //echo  "<br/>$newfilename";

    $query="INSERT INTO roshni1(name,password,email,phone,profile) values('$username','$password','$email',$phone,'$newfilename')";
    if(mysqli_query($connect,$query)) 
    {
     move_uploaded_file($filepath,"profile/".$newfilename);
     echo"<script>
     alert('Welcome to Pixer');
     window.location.href='nav.php';
     </script>";
    }
    else 
    {
        echo"<script>
        alert('Can't login Something wents wrong !');
        window.location.href='head.php';
        </script>";
    }	
}   

?>