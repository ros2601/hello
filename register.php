<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <style>
        *{
            margin: 0;padding: 0;
        }
        body {
    height: 90vh;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);

}
        form {
        
    width: 400px;
    height: 600px;
    display: flex;
    margin: auto;
    /*so that each input box takes its full space of line     */
    flex-direction: column;
    /*for setting element in a column style  */
    border-radius: 20px;
    outline: 1px solid white;
    background: transparent;


    margin-top: 10%;
}


/*designing of input box*/

input {
    width: 80%;
    margin: auto;
    /*places input boxes in center  */
    margin-bottom: 3%;
    /*tooks 7% margin from bottom */
    border: none;
    /*removes border */
    outline: none;
    border-bottom: 1px solid white;
    font-size: 20px;
    background: transparent;
}

button {
    width: 50%;
    margin: auto;
    border-bottom: none;
    color: white;
    font-size: 20px;
    background: red;
    padding: 10px 30px;
    border: 1px solid rgba(255, 255, 255, .3);
    border-radius: 10px;
}

input::placeholder {
    color: white;
    font-size: 20px;
}


/*designing of login button on hover    */

button:hover {
    color: white;
    background: brown;
}


/*designing of forget password*/

a {
    font-size: 18px;
    text-align: center;
    color: black;
    margin-bottom: 6%;
}

a:hover {
    color: blue;
}


/*designing of signIN h1*/

h1 {
    font-size: 40px;
    text-align: center;
    color: white;
    margin-bottom: 5%;
    margin-top: 5%;
}       

    
    </style>
</head>
  <body>

  <div class="form" >
    <form method="post" action="login.php" enctype ="multipart/form-data"> 
    
        <h1>LOGIN</h1>
    

        <input type="text" name="username" placeholder="Username"/> 
        <input type="email" name="email" placeholder="E-mail Address">
        <input type="text" maxlength="10" id="phonenumber" name="phone"  placeholder="Phone Number"/>
        
  
        <button type="submit" value="login" name="login">Login</button>
        <a href="signin.php">Already have an account? Sign in</a>

    </form>
</div>
  </body>
</html>