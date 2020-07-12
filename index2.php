

<!DOCTYPE html>
<html>


<head>

<title>Login</title>

<link rel="stilesheet" type="text.css" ref="style.css">

<style>
    .btn {
       background-color: DodgerBlue;
       border: none;
       color: white;
       padding: 18px 45px;
       font-size: 15px;
       cursor: pointer;
      }

    .btn:hover {
        background-color: RoyalBlue;
    }
 </style>

 <button class="btn"><a href="index.php">Home</button></a>

</head>


<style>
    body {
        background-image: url(imagini/service.jpg);
        }
    p {
        font-family: verdana;
        font-size: 20px;
      }
</style>

    
<body>
<br><br><br>

<div class="options">

    <h1 style="font-size:200%;text-align:center">Autentificare</h1>

</div>

<br><br>


<h3 style="text-align:center">
    <form class="myform" action="process.php" method="POST">
       <label> Email:</label><br><br>
       <input type="text" id="email" name="email" />
    <br><br>
        Parola:<br><br>
         <input type="password" name="password"/>
   <br><br>
        <input type="submit" id="btn" value="Autentificare"/>
    </form>
</h3>>



</body>
</html>
