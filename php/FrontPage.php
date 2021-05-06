<!doctype html>
<html lang="en">
  <head>
    <title>Front Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" type="text/css" href = "../css/products.css">

</head>
  <body>
   

      <!--Nav bar-->
<?php include_once 'NavBar.php'; ?>



<br/>
<p style="text-align:center;font-size:100px;color:white;font-family:fantasy;">Welcome to Full Cart</p>
<img class="logo" style="top:10px;" src="../image/logo2.png" alt = "logo">
<br/>


<div class="weekspecials" > 
    <h4 class="Specials" style="background-color:black;color:white;border-color:white;">Weekly Specials</h4>
    <table style="width: 100%;">
        <tr>
            <th>
<a href="MeatFreshBeef.php"><img alt = "Fresh Beef" class="img-fluid" src ="../image/MeatFreshBeef.jpg"></a>  
    <legend style="color:white;"> Product: Fresh Beef </legend>
<label style="color:white;"> Blue Meats <br/></label>  
<br/>
<label style="color:white;"> $/Per Product <br/></label> 
<p id="price" > $5.75 </p>  
</th>
<th>
    <br/>
    <a href="SeaFoodLobster.php"><img alt = "SeaFoodLobster" class="img-fluid" src ="../image/SeaFoodLobster.jpg"></a>  
    <legend style="color:white;"> Product: Lobster </legend>
    <label style="color:white;"> SeaFood Co. <br/></label>  
    <br/>
    <label style="color:white;"> Per Unit <br/></label> 
    <p id="price" > $21.35 </p> 
</th>
</tr>
</table>
</div>
<br/><br/><br/><br/>
<div class="monthlyspecials">
<h4 class="Specials" style="background-color:black;color:white;border-color:white;">Monthly Specials</h4>
<table style="width: 100%;">
    <tr>
        <th>
            <a href="DairyYogurt.php"><img alt = "DairyYogurt" class="img-fluid" src ="../image/DairyYogurt.jpg"></a>  
    <legend style="color:white;"> Product: Dairy Yogurt </legend>
<label style="color:white;"> Dairy Co. <br/></label>  
<br/>
<label style="color:white;"> $/Per Product <br/></label> 
<p id="price" > $5.99 </p> 
</th>
<th>
    <a href="FrozenEggo.php"><img alt = "FrozenEggo" class="img-fluid" id="imgEggo" src ="../image/FrozenEggo.jpg"></a>  
            <legend style="color:white;"> Product: Frozen Eggo</legend>
        <label style="color:white;"> Frozen Co. <br/></label>  
       <br/>
       <label style="color:white;"> Per Pack <br/></label> 
       <p id="price" > $2.99 </p> 
</th>
</tr>
</table>
</div>
<br/><br/><br/><br/>
<footer style="background-color:black;">
    <p id="contact" style="color:white;">121 Delicious St. &#8226; Montreal, QC 94103 &#8226; (514) 555-8378</p>
</footer>

  </body>
</html>