<?php
session_start();
$connect=mysqli_connect("localhost  ","root","","roshni") 
or 
die("Not connected");
if(!empty($_REQUEST['signin']))
{
    if(empty($_REQUEST['username'] && $_REQUEST['password']))
    {
        echo"<script>
        alert('Please enter all the field')
        window.location.href='signin.php'
        </script>";
    }
    else{
        $username=$_REQUEST['username'];
        $password=$_REQUEST['password'];
        $query="SELECT * FROM roshni1 where name='$username' and password='$password'";
        $result=mysqli_query($connect,$query);
        $count=mysqli_num_rows($result);

    if($count>0)
    {
        echo"<script>
        alert('Login Successful')
        alert('Welcome to Pixer')
        window.location.href='nav.php'
        </script>"; 
    }
    else{
        echo"<script>
        alert('User not found')
        window.location.href='signin.php'
        </script>"; 
    }
    }
}

?>