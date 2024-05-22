<?php

if(isset($_POST['submit'])){
//SUCCES
} 


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPROJECT</title>
</head>
<body>
    <style>
     *{
        font-family: sans-serif;
     }
     .container{
       height: 24rem;
       width: 100%; 
       display:flex ;
       justify-content: center;
       align-items: center;
     }
     .holder{
        display: flex;
        flex-direction: column;
      
     }
     .holder input[type="text"]{
        height: 30px;
        background:transparent;
        border: none;
        outline:none;
        font-size: 20px;
        border-bottom: 2px solid red;
     }
     .holder input[type="submit"]{
       display:flex;
       height: 32px;
       font-size: 15px;
       color:beige;
       background: maroon;
       margin-right: 150px;
     }
     .hero{
        position:relative;
        left:30%;
        top:30px;
     }
     .footer{
        position: relative;
        left: 550px;
        top:50px;
     }
    </style>
    <h1 class="hero"><?php echo "Hello " . $_POST['name'] . "👌❤🙌"; ?>
    </h1>
        <div class="container">
            <div class="holder">
          <form action="index.php"method="POST">
            <div class="wrapper">
                <input type="text"placeholder ="Enter username"name= "name" />
            </div>
            <br>
            <br>
            <div class="wrapper">
                <input type="submit"value="submit">
            </div>
            </form>
            </div>
        </div>
<h4 class="footer">made with <span>😍❤😍</span> by nyairoe</h4>
</body>
</html>