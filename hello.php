<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="style.css" />
   <title>Document</title>
   <style>
* {
 margin: 0;
 padding: 0;
 box-sizing: border-box;
}
body {
 font-family: cursive;
}
a {
 text-decoration: none;
}
li {
 list-style: none;
}
/* NAVBAR STYLING STARTS */
.navbar {
 display: flex;
 align-items: center;
 justify-content: space-between;
 padding: 20px;
 background-color:#2e8b57;
 color: #fff;
}
.nav-links a {
 color: #fff;
}
/* LOGO */
.logo {
 font-size: 32px;
}
/* NAVBAR MENU */
.menu {
 display: flex;
 gap: 1em;
 font-size: 18px;
}
.menu li:hover {
 background-color: #4c9e9e;
 border-radius: 5px;
 transition: 0.3s ease;
}
.menu li {
 padding: 5px 14px;
}
/* DROPDOWN MENU */
.services {
 position: relative; 
}
.dropdown {
 background-color: #2e8b57;
 padding: 1em 0;
 position: absolute; /*WITH RESPECT TO PARENT*/
 display: none;
 border-radius: 8px;
 top: 35px;
}
.dropdown li + li {
 margin-top: 10px;
}
.dropdown li {
 padding: 0.5em 1em;
 width: 8em;
 text-align: center;
}
.dropdown li:hover {
 background-color: #4c9e9e;
}
.services:hover .dropdown {
 display: block;
}
.head{  
 
    padding-top:30px;
    padding-bottom:30px;
    display:flex;
    background-color:lightyellow;

}
.text{
    width: 50%;
}
.head button{
 
    padding:15px 12px 15px 12px;
    background:green;
    border:none;
    color:white;
    font-size:20px;
    border-radius:15px;
}
.button{
    width: 50%;
    text-align:right;
    padding-right:240px;
    margin-top:1 0px;
    
}
.button button:hover{
    background-color:darkgreen; 

}
.head h2{
   
    font-size:25px;
    color:black;
    margin-left:60px;
    
}
.main{
    padding-top:30px;  
    height: 500px; 
    width: 100%;
    background:grey;
}
.main h1{
    padding-left:30px;
}
.categories{
    margin:auto;
}
.cat1{
    float:left;
    text-align:center;
    padding-top:25px;
    width: 20%;
    background-color:pink;
}
.cat1 img{
    width: 260px;
    height: 300px;
    border-radius:50%;  
}
.cat1 h3{
    text-align:center;
    font-size:24px;
}
/**-------------- */
.main2{
    width: 100%;
    
    height: 500px; 
}
.main2 h1{
    padding-left:30px;
}
.categories2{
    margin:auto;
}
.cat2{
    float:left;
    text-align:center;
    padding-top:25px;
    width: 25%;
}
.cat2 img{
    width: 260px;
    height: 300px;
}
.cat2 h3{
    text-align:center;
    font-size:24px;
}
/**0----------------- */

/**-------------- */
.main3{
    width: 100%;
    background:grey;
    height: 500px; 
    background-color:green;
}
.main3 h1{
    padding-left:30px;
}
.categories3{
    margin:auto;
}
.cat3{
    float:left;
    text-align:center;
    padding-top:25px;
    width: 25%;
    background-color:blue;
}
.cat3 img{
    width: 260px;
    height: 300px;
}
.cat3 h3{
    text-align:center;
    font-size:24px;
}
/**0----------------- */
/**-------------- 
.nav{
    padding-top:50px;
    height: 300px; 
}
.nav h1{
    padding-left:30px;
}
.nav1 img{
    width: 100px;
    height: 100px;
    border-radius:50%;
}
.nav1 h3{
    text-align:center;
     font-size:24px;
}
/**----------------- */
.why{
    width: 100%;
    text-align:center;
    margin  -bottom:50px;    
}
.heading{
    font-size:25px;
}
.h2{
    width: 33.33%;
    background:lightgrey;
    float:left;
    padding-top :100px;  
    font-size:25px;
}
.why img{
    width: 120px;
    height: 120px;
    border-radius:50%;
}
/*------------------FOOTER-----------------------------------*/

footer {
    background-color: #121315;
    /*bg color for the whole footer */
    color: #a7a7a7;
    /*for text color*/
    font-size: 16px;
    width: 100%;
    display: flex;
    align-items: flex-end;
}

footer * {
    font-family: "Poppins", sans-serif;
    box-sizing: border-box;
    /*IMP TOOKS AUTO PADDING MARGIN ETC */
}

.row {
    width: 100%;
    height: 180px;
    display: flex;
}

.column {
    width: 70%;
    display: flex;
    flex-direction: column;
    /*places the each element in column style under down its heading */
    padding: 40PX 12px 30px 40px;
}

.column1 {
    width: 30%;
    display: flex;
    flex-direction: column;
    margin: 40PX 12px 30px 40px;
    text-align: left;
    /*places the each element in column style under down its heading */
    padding: 0px 12px;
}

h3 {
    width: 100%;
    color: white;
    font-size: 25px;
}

.column p {
    text-align: justify;
    line-height: 2;
    margin: 0;
}
/**--------------- */
.display{
    float:left; 
    text-align:center;
    width: 100%;
    height: 600px;
}
.dis1{
    width: 50%;
    background-color:white;
    float:left;     
}
.dis1 p{
    margin-top:200px;
    font-size:30px;
}
.display img{
    height: 500px;
    width: 600px;
    margin-left:100px;
}


    </style>
 </head>
 <body>
   <nav class="navbar">
     <!-- LOGO -->
     <div class="logo">Hello Gardeners</div>
     <!-- NAVIGATION MENU -->
     <ul class="nav-links">
       <!-- USING CHECKBOX HACK -->
     
    
       <!-- NAVIGATION MENUS -->
       <div class="menu">
         <li><a href="/">Home</a></li>
        
         <li class="services">
           <a href="/">Categories</a>
           <!-- DROPDOWN MENU -->
           <ul class="dropdown">
             <li><a href="/">Plants</a></li>
             <li><a href="/">Seeds</a></li>
             <li><a href="/">Pots</a></li>
             <li><a href="/">Fertilizers</a></li>
             <li><a href="/">Gardening Tools</a></li>
           </ul>
         </li>
          <li><a href="/">Special Offers</a></li>
         <li><a href="/">Contact</a></li>
         <li><a href="/">About</a></li>
       </div>
     </ul>
   </nav>
   <div class="bg">
    <div class="text"></div>
    <img src="bg.png" width=100% height=500px>
   </div>

   <div class="head">
    <div class="text">
    <h2>Our very new shades of green.</h2>
    <h2>Check out our latest sales and offers.</h2>
    </div>
  
   <div class="button">
    <button>View all offerrs</button>
   </div>

   </div>


  
   <!------------------------->
   <div class="main">
    <h1>What are you looking for?</h1>
    <div class="categories">
        <div class="cat1">
            <img src="p1.png"/>
            <h3>Plants</h3>
        </div>
        <div class="cat1">
            <img src="p2.png"/>
            <h3>Pots</h3>
        </div>
        <div class="cat1">
            <img src="p3.png"/>
            <h3>Gardening Accessories</h3>
        </div>
        <div class="cat1">
            <img src="p4.png"/>
            <h3>Seeds</h3>
        </div>
        <div class="cat1">
            <img src="p4.png"/>
            <h3>Fetilizers</h3>
        </div>
    </div>
   </div> 
      <!-------------------------->
      <div class="main3">
    
    <div class="categories3">
    <h1>Shop our latest Flowering Plants</h1>
        <div class="cat3">
            <img src="p1.png"/>
            <h3>Plants</h3>
        </div>
        <div class="cat3">
            <img src="p2.png"/>
            <h3>Pots</h3>
        </div>
        <div class="cat3">
            <img src="p3.png"/>
            <h3> Accessories</h3>
        </div>
        <div class="cat3">
            <img src="p4.png"/>
            <h3>Seeds</h3>
        </div>
    </div>
   </div> 
   
<!-------------------------->
<!-------------------------->
<div class="display">
    <div class="dis1">
    <img src="display1.png" />
    </div>
    <div class="dis1">
    <p>Hello Gardeners is here to inspire you to have plants around you. To look at life in a very different way, helping you connect with nature. 
</p>
</div>

   </div> 
   
<!-------------------------->
   <!-------------------------->
   <div class="main2">
    
    <div class="categories2">
    <h1>Shop our latest Indoor Plants</h1>
        <div class="cat2">
            <img src="p1.png"/>
            <h3>Plants</h3>
        </div>
        <div class="cat2">
            <img src="p2.png"/>
            <h3>Pots</h3>
        </div>
        <div class="cat2">
            <img src="p3.png"/>
            <h3> Accessories</h3>
        </div>
        <div class="cat2">
            <img src="p4.png"/>
            <h3>Seeds</h3>
        </div>
    </div>
   </div> 
   
<!-------------------------->



<div class="why">
    <div class="heading">
    <h1>Why hello Gardeners?</h1>
    </div>
   
    
    <div class="h2"> 
        <img src="icon1.png"/>
     <h2>Secure and Recyclable
Packaging</h2></div>
    <div class="h2">
    <img src="icon2.png"/>
    <h2>Free Replacements if
Damaged</h2>
    </div>
    <div class="h2">
    <img src="icon3.png"/>
    <h2>Pots with
Every Plant</h2></div>
  
 
</div>  
 <!---------------FOOTER------------->
 <footer>
      <div class="row">

        <div class="column">
          <h3>Hello Gardeners</h3>
         <p>lotreojlkjkljklklklklklklklkl   </p>
            <p>E-mail address:hellogardeners@gmail.com</p>
            <p>Copyright&copy; Hello Gardeners</p> 
        </div>
        <div class="column1">
          <h3>Some Links</h3>
          <ul>
          <li><a href="#">About Us</a></li>
          <li><a href="# ">Contact Us</a></li>
          </ul>  
        </div>

      </div>
    </footer>
 </body>
</html>