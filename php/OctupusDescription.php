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

            <title>Octupus</title>

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
            

            <h1 style="text-align:center;font-family:fantasy;color:white;">Types of Octupus</h1>

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
                    <button width="50px" height="40px" style="background-color:black;color:white;" onclick="displayprice()">Display subtotal/weight/quantity of selected items</button>
                </p>

                <p id="displayinfo" style="text-align:center">

                </p>
            </div>
            </div>
            </div>
            
            <!--Items container-->
            <div class="items">
                <!--Whole octupus-->
                <div class="left">
                    <h4 style="text-align:center;font-family:fantasy;color:white;">Whole Octupus</h4>
                
                    <!--https://cdn.shopify.com/s/files/1/0754/6345/products/Frozen_Sockeye-Whole_20150106-IMG_0004-6_600x.jpg?v=1527068069-->
                    <img src="../image/WholeOctupus.jpeg" alt="Whole octupus" width="500" height="200">
                    <br/>
                    <br/>
                    <!--https://www.google.com/search?q=whole+octopus&rlz=1C1CHBD_enCA902CA902&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjMr9bB5qTvAhWyGFkFHcksAy4Q_AUoAXoECBgQAw&biw=1536&bih=754&dpr=1.25#imgrc=0gvymN8mdPKKRM-->
                    <!--https://tools.myfooddata.com/nutrition-facts/174249/wt1-->
                    <!--http://www.cport.net/product/view/octopus#:~:text=Raw%20octopus%20is%20purplish%20in,a%20mild%2C%20almost%20sweet%20flavor.-->
                    <p style="margin-left:2px;color:white;" >This our whole octopus offered by the company <em>SeaFood Co.</em>. Captured from the Phillipines, a place where Octupus are well known and found. Octupus are good source of vitamin B12, which are needed for blood cells and body cells to function properly and it can be a meal added to your daily diet. With a very sweet flavour and meaty texture, it will be the perfect dinner for your family and friends. It can be eatan raw or cooked depending on your choices. Be sure to cook as soon as you purchase it as it can be of no use if it is stayed in your refrigerator for  2 to 3 days. Our octupus are offered in packs of 3 octupus. Each octopus weign about 145 calories and 85g. In total, the pack weigns about 435 calories and 255g. They are available for 16.99$.Order now by clicking <strong>ADD TO CART</strong></p>
                    <p class="button">
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#contentId" aria-expanded="false" aria-controls="contentId" style="background-color:rgba(0, 0, 0, 0.815); width:200px; height:50px;color:rgba(255, 255, 255, 0.815);font-family:Georgia, 'Times New Roman', Times, serif;" onclick="addwholeoctupus()">
                            ADD TO CART
                        </button>
                    </p>
                </div>

                <!--Cooked octupus-->
                    <div class="middle">
                        <h4 style="text-align:center;font-family:fantasy;color:white;">Cooked Octupus</h4>
                        <!--https://previews.123rf.com/images/popovia/popovia1610/popovia161000039/63564522-salmon-fillet-fresh-sliced-salmon-fish-on-ice.jpg-->
                        <img src="../image/CookedOctupus.jpg" alt="Sliced Shrimp" width="500" height="200" style="margin-left:2px">
                        <br/>
                        <br/>
                        <p style="margin-left:2px;color:white;">If you are in rush and are craving for octupus, then buying our cooked octupus will best option for you! Made by the Great Ahmed Cart, Co-Founder of Full Cart. A very simple and medeterian style food. Our octupus are grilled so it will have that good smoked and grilled taste that everyone likes. It is made with a sweet lemon, which will make you crave even more after eating it. The meal also comes with a side of mix of vegetables such as onions,carrots,green and red peppers. The meal will come with two medium sized octupus with 8 legs, weigning about 100 g and about 150 calories each. In total, including the salad and sweet lemons, the meal weigns about 500g and is about 700 calories. They are available for 16.99$. Order now by clicking <strong>ADD TO CART</strong> to recieve it    </p>
                        <p class ="button">
                        <button  id="buttonforcookedoctupus" class="btn btn-primary" type="button" data-toggle="collapse" data-target="#contentId" aria-expanded="false" aria-controls="contentId" style="background-color:rgba(0, 0, 0, 0.815); width:200px; height:50px;color:rgba(255, 255, 255, 0.815);font-family:Georgia, 'Times New Roman', Times, serif;" onclick="addcookedoctupus()" >
                        ADD TO CART
                        </button>
                    </p>
                    </div>

                    <!--Sliced octupus-->
                    <div class="right">
                        <h4 style="text-align:center;font-family:fantasy;color:white;">Sliced octupus</h4>
                
                         <img src="../image/SlicedOctupus.jpg" alt="Cooked Shrimps" width="500" height="200" style="margin-left:2px;">
                        <br/>
                        <br/>
                        <p style="margin-left:2px;color:white;"> If you have difficulites cutting our octupus or have trouble eating the octupus as a whole, then don't worry as FullCart have all their products sliced for customers if they need to. Are sliced octupus are the same octupus as our whole option, but are sliced in pieces of 4, making it 12 pieces per pack. Our sliced option have all the same ingeredients as the whole option, including the sweet flavour and a rich meaty texture. If you are throwing a party or ceremony, this can be a very good meal for people to enjoy. Be sure to cook as soon as you recieve your product as a octupus can be of no use if it is stayed in your refrigerator for  2 to 3 days. This pack weigns about 435 calories and 255g with each piece weign about 36 calories and 21g. They are available for 16.99$. Order now by clicking <strong>ADD TO CART</strong>   </p>
                        <p class="button">
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#contentId" aria-expanded="false" aria-controls="contentId" style="background-color:rgba(0, 0, 0, 0.815); width:200px; height:50px;color:rgba(255, 255, 255, 0.815);font-family:Georgia, 'Times New Roman', Times, serif;" onclick="addslicedoctupus()">
                            ADD TO CART
                        </button>
                        </p>
                    </div>
        

            </div>


            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            

            

            </div>
            <script src="../js/cartfunctions.js"></script>

    
            <?php include_once 'NavBar.php'; ?>

            



            


        </body>
    
    
    </html>


