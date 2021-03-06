<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset = "utf-8" /> 
        <meta name="description" content="Fresh Beef"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" type="text/css" href = "../css/navbar.css">
        <link rel="stylesheet" type="text/css" href = "../css/ItemDescription.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css">
        * {
  box-sizing: border-box;
}
        /* For desktop: */
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  [class*="col-"] {
    width: 100%;
  }
}
        </style>
        <title>Chicken</title>
    </head>

    <body> 
        <header style="color: whitesmoke; font-size: 80px;"><b> Full Cart</b> </header>
        <img  class="logo" src="../image/logo2.png" alt = "logo" style="left: 1420px;" >
        <a class="btn btn-primary" href="AislePage.php" class="btn btn-info" role="button">Return</a>
    
        
        <div class="row">
            <div class="col-md-4">
        <form id="centerFood" action=""><br/>
            <img alt = "Fresh Chicken" class="img-fluid" src ="../image/MeatFreshChicken.jpg">  
            <fieldset id="fieldSetProduct">
                <legend> <b style="color: black;">Product: Chicken </legend></b>
            </fieldset>
        </form>
            </div>
            <div class="col-md-6">
                <pre style="color: white; font-size: x-large;"><b>
When shopping for chicken there are several details that
you should pay close attention to so you are assured of
purchasing fresh chicken in the correct quantity, quality
and type to satisfy your needs. It is important to be
familiar with the terms used to describe the chicken,
how much to buy, know what to look for on the labels,
and know what to look for when visually checking the meat.
</b> </pre>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
        <form id="centerFood" action=""><br/>
            <img alt = "Fresh Chicken" class="img-fluid" src ="../image/chicken2">  
            <fieldset id="fieldSetProduct">
            </fieldset>
        </form>
            </div>
            <div class="col-md-4">
                <form id="centerFood" action=""><br/>
                    <img alt = "Fresh Chicken" class="img-fluid" src ="../image/chicken3.jfif">  
                    <fieldset id="fieldSetProduct">
                    </fieldset>
                </form>
                    </div>
        </div>
        

        </div>
        









        <?php include_once 'NavBar.php'; ?>

  <div class="relative">
    <div class="absolute">
        <button style="font-size:30px;cursor:pointer" onclick="openNav()" class="shoppingCart" href="ShoppingCart.php"style="color:black;"><i class="fas fa-shopping-cart"></i> <span > 0 </span> </button>
    </div>
</div>
<div id="mySidenav" class="sidenav">
    <div class="topNav">
        <img  class="YourCart" src="../image/YourCart.png" alt = "Your Cart"> 
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    </div>
    <div class="table-responsive-sm">
        <div class="content">
            <table class="table table-striped" id="dropDownCart">
                <!--Table Insert From JS-->
            </table> 
        </div>
    </div>
</div>
    </body>


</html>