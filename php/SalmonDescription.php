<?php

    session_start();
    
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">  
            <link rel="stylesheet" type="text/css" href="../css/descriptionpage.css">
            <link rel="stylesheet" type="text/css" href="../css/navbar.css">

            <title>Salmon</title>

            <style>
                body {
                    background-image: url("../image/low_contrast_linen.png");
                }
            </style>

        </head>

        <body>
            <!--Navbar-->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                <nav class="navbar navbar-expand-md  fixed-top " style="background-color: rgba(145, 145, 145);">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" >
                      <span class="navbar-toggler-icon" style="background-color:white;color:black;" >+</span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                      <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link" href="FrontPage.php" style="color:black;"><i class="fas fa-home"></i>Home Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="AislePage.php"style="color:black;"><i class="fas fa-utensils"></i>Aisle page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ShoppingCart.php"style="color:black;"><i class="fas fa-shopping-cart"></i>Shopping cart</a>
                          </li>
                        <li class="nav-item">
                            <a class="nav-link" href="AllProducts.php"style="color:black;"><i class="fas fa-list"></i>Prodcut list</a>
                        </li>
                        
                      </ul>
                    </div>
                  </nav>
                  
                



                
            <!--Title-->
            <br/>
            <br/>
            <br/>

            <h1 style="text-align:center;font-family:fantasy;color:white;">Types of Salmons</h1>

            <!--SHOPPING CART NAV-BAR-->
            <div class="relative">
                <div class="absolute">
                    <button style="font-size:30px;cursor:pointer;" onclick="openNav()" class="shoppingCart" href="ShoppingCart.html"style="color:black;"><i class="fas fa-shopping-cart"></i> <span > 0 </span> </button>
                </div>
            </div>
                <div id="mySidenav" class="sidenav">
                <div class="topNav">
                    <img  class="YourCart" src="../image/YourCart.png" alt = "Your Cart"> 
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                </div>
                
                <div class="table-responsive-sm">
                <div class="content" >
                    <table class="table table-striped" id="dropDownCart">
                        <!--Table Insert From JS-->
                        <tr>
                            <td>Select</td>
                            <td>Item</td>
                            <td>Price</td>
                            <td>Quanitity</td>
                            <td>Weight</td>
                            <td>Remove Item</td>
                        </tr>
                    
                </table>
                
                <p style="text-align:center">
                    <button width="50px" height="40px" style="background-color:black;color:white;" onclick="displaypriceofsalmon()">Display subtotal/weight/quantity of selected items</button>
                </p>

                <p id="displayinfo" style="text-align:center">

                </p>
                </div>
                </div>
                </div>

                <script src="../js/cartfunctionssalmon.js"></script>
            
            <!--Items container-->
            <div class="items">
                <!--Whole salmmon-->
                <div class="left">
                    <h4 style="text-align:center;font-family:fantasy;color:white;">Whole salmon</h4>
                
                    <!--https://cdn.shopify.com/s/files/1/0754/6345/products/Frozen_Sockeye-Whole_20150106-IMG_0004-6_600x.jpg?v=1527068069-->
                    <img src="../image/WholeSalmon.png" alt="Whole salmon" width="500" height="200">
                    <br/>
                    <br/>
                    <p style="margin-left:2px;color:white;" >This our whole salmon offered by the company <em>SeaFood Co.</em>. Captured from Pacific Ocean, they are 100% wild salmon, free of toxins and antibiotics. They are also 100% free of chemicals and additives are 100% non-GMO. High in vitamin B and D, they should be a good meal to add into your diet. Our whole salmon comes in units. Each unit weigh about 4kg. Calories wise, each salmon is about 360 calories per serving. In addition, salmons in <em>Full Cart</em> are one of the cheapeast, in terms of price in Montreal. They are about 3.99$ which is a price you cannot miss. Order now by clicking <strong>ADD TO CART</strong></p>
                    <p class="button">
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#contentId" aria-expanded="false" aria-controls="contentId" style="background-color:rgba(0, 0, 0, 0.815); width:200px; height:50px;color:rgba(255, 255, 255, 0.815);font-family:Georgia, 'Times New Roman', Times, serif;" onclick="addwholesalmon()">
                            ADD TO CART
                        </button>
                    </p>
                </div>

                <!--Cooked salmon-->
                <div class="right">
                    <h4 style="text-align:center;color:white;">Cooked Salmon</h4>
                
                    <img src="../image/CookedSalmon.jpg" alt="Cooked Shrimps" width="500" height="200" style="margin-left:2px;">
                    <br/>
                    <br/>
                        <p style="margin-left:2px;color:white;"> This is the cooked salmon option, a great salmon recipe made by the great grandfather <em>Ahmed Cart</em> Co-Founder of Full Cart. Made with a secret sweet sauce made honey, lemon and many other ingredients, it is a very good option if you are in a rush and have no time to cook. The salmon meal also comes with our speacial vegetable salad which contains green and red peppers,onions,mushrooms and corn.This meal comes in portion of 2 pices of salmon. It weigns about 500g including the salad and about 600 calories. A very cool fact about this meal is that it was the first recipe made by Mr.Cart.  </p>
                        <p class="button">
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#contentId" aria-expanded="false" aria-controls="contentId" style="background-color:rgba(0, 0, 0, 0.815); width:200px; height:50px;color:rgba(255, 255, 255, 0.815);font-family:Georgia, 'Times New Roman', Times, serif;" onclick="addcookedsalmon()">
                            ADD TO CART
                        </button>
                    </p>
                </div>

                <!--Sliced salmon-->
                <div class="middle">
                    <h4 style="text-align:center;font-family:fantasy;color:white;">Sliced salmons</h4>
                    <!--https://previews.123rf.com/images/popovia/popovia1610/popovia161000039/63564522-salmon-fillet-fresh-sliced-salmon-fish-on-ice.jpg-->
                    <img src="../image/SlicedSalmon.jpg" alt="Sliced Shrimp" width="500" height="200" style="margin-left:2px">
                    <br/>
                    <br/>
                    <p style="margin-left:2px;color:white;">Do not want the trouble of cutting your salmon and instantly start cooking it as soon as you get it ? Do not worry as we have done that job just for you. Our sliced salmons are ready to get cooked as soon you buy them. They are offered by the same company as the whole salmon option. Altough they are is not much difference in terms of ingredients and benefits, it is a very good option for a family dinner night. Our sliced salmons comes in packs of 8. Each pack weign about 1.2 kg and 100 calories per salmon. They are available for 3.99$ per pack. Order now by clicking to <strong>ADD TO CART</strong>    </p>
                    <p class="button">
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#contentId" aria-expanded="false" aria-controls="contentId" style="background-color:rgba(0, 0, 0, 0.815); width:200px; height:50px;color:rgba(255, 255, 255, 0.815);font-family:Georgia, 'Times New Roman', Times, serif;" onclick="addslicedsalmon();">
                            ADD TO CART
                        </button>
                    </p>
                </div>


            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            
    
                

            

        </div>


            


        <?php include_once 'NavBar.php'; ?>
            


        </body>
    
    
    </html>


