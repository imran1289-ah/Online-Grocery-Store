<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset = "utf-8" /> 
        <meta name="description" content="Fresh Beef"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" type="text/css" href = "../css/products.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <style>
            

            
        </style>
        <!--Edit HERE-->
        <title> AmericanCheese </title>
    </head>



<body>
    <h4 id="availibility"> Prices are availible until February 2022</h4>
    <div class="container-fluid">
        <h1 class="page-header"> 
                <img  class="logo" src="../image/logo2.png" alt = "logo">
        </h1>
        <br/>
        <br/>
    </div>




    
    <div class="container-fluid"> 
    <div class="center">

        <a class="btn btn-primary" href="AislePage.php" class="btn btn-info" role="button">Return</a>
    
        <br/>
        <br/>
    
    
        <div class="row">
            <div class="col-md-12">
                <form id="centerFood" action="">
                    <!--Edit HERE-->
                    <img alt = "Milk" class="img-fluid" src ="../image/DairyAmericanCheese.jpg">  
                    <fieldset id="fieldSetProduct">
                        <!--Edit HERE-->
                        <legend class="fontLegend"> Product: American Cheese </legend>
                        <!--Edit HERE-->
                        <label class="fontLabel"> Dairy Co. <br/></label>  
                        <br/>
                        <!--Edit HERE-->
                        <label class="fontLabel"> Per Pack </label> 
                        <!--Edit HERE-->
                        <p id="price"> $8.19 </p> 
                        
                        <br/> 

                        <p>
                            <!--Edit HERE-->
                            <button class="add-cart cart1" type="button" data-toggle="collapse" data-target="AmericanCheese" aria-expanded="false"
                                aria-controls="contentId" >
                                ADD TO CART
                            </button>
                        </p>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle description" type="btn btn-primary" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 More Description
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <!--Edit HERE-->
                            This is American Cheese.
                            </div>
                        </div>
                    </fieldset>
                </form>


            </div>
        </div>
        <br/>

    </div>
    </div>

    <div class="container-fluid">
        <div class="bottom">
            <div class="row">
                <div class="col-md-12">
                    <h4 id="similarProducts"> 
                        <img  class="AlsoSee" src="../image/AlsoSee.png" alt = "Also See"> 
                    </h4>
                </div>
            </div>
    
            <div class="row">
                <div class="col-md-4">
                    <div class="bottomAdditional" >
                        <!--Edit HERE-->
                        <a href="/php/DairyMilk.php" >
                            <!--Edit HERE-->
                            <img  alt = "Fresh Lamb" class="img-fluid" id="imgAlsoSee" src ="../image/DairyMilk.png" >
                        </a>  
                        <fieldset id="fieldSetSimilarProduct" >
                            <!--Edit HERE-->
                            <legend > Product: Milk </legend>
                            <!--Edit HERE-->
                            <label> Fruits&Veg Co. <br/></label>  
                            <br/>
                            <!--Edit HERE-->
                            <p id="price"> $4.99 </p> 
                            <p class="center">
                                <button class="add-cart cart2" type="button" data-toggle="collapse" data-target="Milk" aria-expanded="false" aria-controls="contentId">
                                    ADD TO CART
                                </button>
                            </p>
                        </fieldset>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="bottomAdditional">
                        <!--Edit HERE-->
                        <a href="/php/DairyEggs.php" >
                            <!--Edit HERE-->
                            <img  alt = "Fresh Lamb" class="img-fluid" id="imgAlsoSee" src ="..//image/DairyEggs.jpg" >
                        </a>  
                        <fieldset id="fieldSetSimilarProduct">
                            <!--Edit HERE-->
                            <legend> Product: Eggs </legend>
                            <!--Edit HERE-->
                            <label> Dairy Co. <br/></label>  
                            <br/>
                            <!--Edit HERE-->
                            <p id="price"> $2.99 </p> 
                            <p class="center">
                                <!--Edit HERE-->
                                <button class="add-cart cart3" type="button" data-toggle="collapse" data-target="Eggs" aria-expanded="false" aria-controls="contentId">
                                    ADD TO CART
                                </button>
                            </p>
                        </fieldset>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="bottomAdditional">
                        <!--Edit HERE-->
                        <a href="/php/FVBlueBerries.php" >
                            <!--Edit HERE-->
                            <img  alt = "Fresh Lamb" class="img-fluid"  id="imgAlsoSee" src ="../image/FVBlueBerries.jpg" >
                        </a>  
                        <fieldset id="fieldSetSimilarProduct">
                            <!--Edit HERE-->
                            <legend> Product: BlueBerries </legend>
                            <!--Edit HERE-->
                            <label> Fruits&Veg Co. <br/></label>  
                            <br/>
                            <!--Edit HERE-->
                            <p id="price"> $3.99 </p> 
                            <p class="center">
                                <!--Edit HERE-->
                                <button class="add-cart cart4" type="button" data-toggle="collapse" data-target="BlueBerries" aria-expanded="false" aria-controls="contentId" >
                                    ADD TO CART
                                </button>
                            </p>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>

   


    </br>
    </br>
    </br>
    </br>

 




    

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


    <script src="../js/frozenProducts.js"></script>




    <?php include_once 'NavBar.php'; ?>




</body>
</html>