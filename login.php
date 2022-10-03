<?php

$connect=mysqli_connect("localhost","root","","hello")
    or
die("Connection failed");

if(!empty($_POST['login']))
{
    if(empty($_REQUEST['username']  && $_REQUEST['email'] && ($_REQUEST['phone'])))
    {
        echo"<script>
        alert('Please enter All the fields')
        window.location.href='register.php';
        </script>";
    }
    else{

    $username=$_POST['username'];
    $email= $_POST['email'];
    $phone=$_POST['phone'];

    $_SESSION['username']=$_POST['username'];

   

    $query="INSERT INTO register(name,email,phone) values('$username','$email',$phone,)";
    if($query)
    {
        echo "ok";
    }
    else{
        echo "not";
    }

    if($result=mysqli_query($connect,$query)) 
    {
     echo"<script>
     alert('Welcome');
     window.location.href='register.php';
     </script>";
    }
  if($result)
  {
    echo "so";
  }
    else 
    {
        echo"<script>
        alert('Can't login Something wents wrong !');
        window.location.href='register.php';
        </script>";
    }	
}   
}

?>