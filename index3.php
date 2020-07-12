<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Rezervari</title>

    <style type="text/css">

      body{
        background-image: url(imagini/parking-aer.jpg);
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

    <button class="btn"><a href="index.php"><i class="fa fa-home"></i> Home</button></a>


  </head>

  <body>

  <div class="options">
      <h1 style="font-size:300%;text-align:center">Rezervare</h1>
  </div>

  <br><br><br><br><br><br><br><br>

  <form method="POST" action="rezervari.php" style="text-align:center;font-size:200%;"><br>

 
  Selecteaza data:
  <input type="date"  name="date">

  <br><br>

  De la ora:
  <input type="time" name="from" >

  <br><br>

  Pana la ora:
  <input type="time" name="to" >

  <br><br>

  Email:
  <input type="text" name="email" placeholder="Email">

  <br>

  <input type="submit"  value="Rezerva!">
</form>

  </body>
</html>