
<?php

if (isset($_POST['login'])) 
{
    include('dbcon.php');

    $uname = $_POST['uname'];
    $password = $_POST['pass'];

    $query = "SELECT * FROM `user` WHERE `email` = '$uname' AND `password` = '$password'";
    $run = mysqli_query($conn, $query);

    $row = mysqli_num_rows($run);

    if ($row < 1) 
    {
        ?>

        <script>
            alert("Username & Password not match!");
            window.open('login.php','_self');
        </script>

        <?php
    }
    else
    {
        $data = mysqli_fetch_assoc($run);
        $id = $data['id'];

        $_SESSION['uid'] = $id;

        ?>
            <script>
                window.open('index.php?uid=<?php echo $id ?>','_self');
            </script>
        <?php

    }
}

?>