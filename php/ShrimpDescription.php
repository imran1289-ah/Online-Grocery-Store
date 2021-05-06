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
            

            <title>Shrimps</title>

            <!--Background image-->
            <style>
            body {
                background-image: url("../image/low_contrast_linen.png");
            }
            </style>

        </head>

        <body>

                <!--Navbar-->
                <?php include_once 'NavBar.php'; ?>
            
            <!--Title-->
            <br/>
            <br/>
            <br/>
            
            <h1 style="text-align:center;font-family:fantasy;color:white;">Types of Shrimps</h1>
            
            <!--Items container-->
            <div class="items">
                <!--Whole shrimp-->
                <div class="left">
                    <h4 style="text-align:center;font-family: fantasy;color:white;">Whole shrimps</h4>
                     <!--https://www.google.com/search?q=whole+shrimp&rlz=1C1CHBD_enCA902CA902&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjukJL5-ZfvAhUHca0KHSMjAZYQ_AUoAXoECBoQAw&biw=1536&bih=698&dpr=1.25#imgrc=Pn_fdYh0U9Y7qM-->
                    <img src="../image/WholeShrimp.jpg" alt="Whole shrimp" width="500" height="200">
                    <br/>
                    <br/>
                    <p style="margin-left:2px;color:white;" >This is the whole shrimp offered by the company <em>ShrimpExpress</em>, a company specialized at capturing shrimps from various contries in the world. This specefic shrimp is captured from the home of shrimps: China. 100% free of chemical additives and  NON-GMO. It comes in packets of 20 shrimps with each piece approximately containing 100 calories. The total weight of the pack is about 500g which should be enough for a family dinner night. They are avalaible at 5.99$ per pack + 20% discount if you are a premium member </p>
                    <p class="button">
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#contentId" aria-expanded="false" aria-controls="contentId" style="background-color:rgba(0, 0, 0, 0.815); width:200px; height:50px;color:rgba(255, 255, 255, 0.815);font-family:Georgia, 'Times New Roman', Times, serif;" onclick="addwholeshrimp()">
                            ADD TO CART
                        </button>
                    </p>
                </div>

                <!--CookedShrimp-->
                <div class="right">
                    <h4 style="text-align:center;font-family: fantasy;color:white;">Cooked shrimps</h4>
                    <!--https://www.google.com/search?q=spicy+shrimps&rlz=1C1CHBD_enCA902CA902&source=lnms&tbm=isch&sa=X&ved=2ahUKEwi6iPim-ZfvAhUHPK0KHbfbD3EQ_AUoAXoECAgQAw#imgrc=zUBCPgxKfp78qM-->
                    <img src="../image/CookedShrimp.jpg" alt="Cooked Shrimp" width="500" height="200" style="margin-left:2px;">
                    <br/>
                    <br/>
                    <p style="margin-left:2px;color:white;">This is the cooked shrimp option, a great shrimp recipe made by the great grandfather <em>Ahmed Cart</em> Co-Founder of FullCart. Made with a secret spicy sauce that will burn your mouth, recently the recipe have recieved many praises such that it ranked among the top recipes in Montreal Island in 2020. Coming in portion of 15 pieces, each pieces are about 70 calories. This includes also a 100g of sweet salad. The tolal weight of the pack is about 500g including the salad. They are avalaible at 5.99$ per pack  </p>
                    <p class="button">
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#contentId" aria-expanded="false" aria-controls="contentId" style="background-color:rgba(0, 0, 0, 0.815); width:200px; height:50px;color:rgba(255, 255, 255, 0.815);font-family:Georgia, 'Times New Roman', Times, serif;" onclick="addcookedshrimp()">
                            ADD TO CART
                        </button>
                    </p>
                </div>

                <!--Sliced shrimp-->
                <div class="middle">
                    <h4 style="text-align:center;font-family:fantasy;color:white;">Sliced shrimps</h4>
                    <!--https://www.google.com/search?q=sliced+shrimp&tbm=isch&ved=2ahUKEwi6maHI_ZfvAhUWdqwKHX6WDQ4Q2-cCegQIABAA&oq=sliced+shrimp&gs_lcp=CgNpbWcQAzIECAAQE1CuF1iuF2D3GGgAcAB4AIABaIgBaJIBAzAuMZgBAKABAaoBC2d3cy13aXotaW1nwAEB&sclient=img&ei=qYZBYPqgIJbssQX-rLZw&bih=698&biw=1536&rlz=1C1CHBD_enCA902CA902#imgrc=RSgBU0mm3rPSbM-->
                    <img src="../image/SlicedShrimp.jpg" alt="Sliced Shrimp" width="500" height="200" style="margin-left:2px">
                    <br/>
                    <br/>
                    <p style="margin-left:2px;color:white">This is our sliced shrimp offered by the company <em>SeaFood Co.</em>, a new company which started buisness in 2020, speacialized in sea food. Captured from Canadian Lakes, these shrimps are sliced at its finest to make your life easier in the kitchen. Also these shrimps are 100% free of any perservatives and chemical additives.Coming in packets of 20 large shrimps with each piece approximately 120 calories. The total weight of the pack is about 550g. They are avalaible at 5.99$ per pack + 30% discount if you are a premium member </p>
                    <p class="button">
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#contentId" aria-expanded="false" aria-controls="contentId" style="background-color:rgba(0, 0, 0, 0.815); width:200px; height:50px;color:rgba(255, 255, 255, 0.815);font-family:Georgia, 'Times New Roman', Times, serif;" onclick="addslicedshrimp()">
                            ADD TO CART
                        </button>
                    </p>
                </div>
            </div>

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
                    <button width="50px" height="40px" style="background-color:black;color:white;" onclick="displaypriceofshrimp()">Display subtotal/weight/quantity of selected items</button>
                </p>

                <p id="displayinfo" style="text-align:center">
        
                <script src="../js/cartfunctionshrimp.js"></script>

               


        </body>
    
    
    </html>


