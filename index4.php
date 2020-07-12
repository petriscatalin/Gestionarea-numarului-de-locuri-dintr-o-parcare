<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Inregistrare</title>

    <style type="text/css">

        body{
          background-image: url(imagini/userr.png);
          background-size: cover;
          background-attachment: fixed;
        }
      </style>
 

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




  </head>
  <body>    
  
    <h1 style="font-size:300%;font-family:verdana;color:tan;background-color:darkgreen;text-align:center;">Inregistrare </h1><br>

    <button class="btn"><a href="index.php"><i class="fa fa-home"></i> Home</button></a>
    <form method="POST" action="register.php" style="text-align:center;font-size:300%"><br>

        Nume:<br>
        <input type="text" name="firstname" placeholder="First name">
        <br>

        Prenume:<br>
        <input type="text" name="lastname" placeholder="Last name">
        <br>

        Email:<br>
        <input type="text" name="email" placeholder="Email">
        <br>

        Parola:<br>
        <input type="password" name="password" placeholder="Password">
        <br>
        
        <input type="submit" value="Inregistrare" >
      </form> 
      
  </body>
</html>