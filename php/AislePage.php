<!doctype html>
<html lang="en">
  <head>
    <title>Fruis and Vegetables</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
      
    <link rel="stylesheet" href="../css/AislePage.css">
</head>
  <body>
    <div class="container-fluid">
        <h1 class="page-header"> 
                <img  class="logo" src="../image/logo2.png" alt = "logo">
        </h1>
        <br/>
        <br/>

    </div>


   <!--MAIN CONTAINER-->
   <div class="container-fluid">
    <div class="bottom">
        <div class="row">
            <div class="col-md-12">
                <h3 id="aisles" style="background-color: rgb(160, 160, 160);">All Aisles</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="bottomAdditional">
                  <div>
                    <h3 id="aisles" style="background-color: rgb(241, 88, 88);">Meat</h3>
                  </div>
                    <a href="Meat.php" >
                        <img  alt = "lobster" class="img-fluid"  id="imgAlsoSee" src ="../image/meat1.jpg" >
                    </a>  
                </div>
            </div>


            <div class="col-md-4">
                <div class="bottomAdditional">
                  <div>
                    <h3 id="aisles" style="background-color: blanchedalmond;">SeaFood</h3>
                  </div>
                    <a href="Seafood.php" >
                        <img  alt = "cod" class="img-fluid" id="imgAlsoSee" src ="../image/seafood1.jpg" >
                    </a>  
                    <fieldset id="fieldSetSimilarProduct">
                </div>
            </div>

            <div class="col-md-4">
                <div class="bottomAdditional" >
                  <div> 
                    <h3 id="aisles" style="background-color: rgb(175, 209, 253);">Frozen</h3> 
                  </div>
                    <a href="Frozen.php" >
                        <img  alt = "Fresh Lamb" class="img-fluid" id="imgAlsoSee" src ="../image/frozen.png" >
                    </a>  
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="bottomAdditional">
                  <div> 
                    <h3 id="aisles">Fruits and Vegetables</h3>
                  </div>
                    <!--Edit HERE-->
                    <a href="FruitsVegis.php" >
                        <!--Edit HERE-->
                        <img  alt = "Salmon" class="img-fluid"  id="imgAlsoSee" src ="../image/fruits-vegis.jpg" >
                    </a>  
                </div>
            </div>

            <div class="col-md-4">
                <div class="bottomAdditional">
                  <div>
                    <h3 id="aisles" style="background-color: rgb(82, 156, 253);">Dairy</h3>
                  </div>
                    <!--Edit HERE-->
                    <a href="Dairy.php" >
                        <!--Edit HERE-->
                        <img  alt = "Fresh Lamb" class="img-fluid"  id="imgAlsoSee" src ="../image/dairy.jpg" >
                    </a>  
                </div>
            </div>
        </div>
        
    </div>
    </div>


        
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


    <script src="../js/ShoppingCart.js"></script>




    <footer>
        <p id="contact">121 Delicious St. &#8226; Montreal, QC 94103 &#8226; (514) 555-8378</p>
    </footer>
    

    <?php include_once 'NavBar.php'; ?>
  </body>
</html>