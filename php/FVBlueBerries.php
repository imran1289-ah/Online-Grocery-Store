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
        <title> FV-BlueBerries </title>
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
                    <img alt = "FVBlueBerries" class="img-fluid" src ="../image/FVBlueBerries.jpg">  
                    <fieldset id="fieldSetProduct">
                        <legend class="fontLegend"> Product: BlueBerries </legend>
                        <label class="fontLabel"> Fruits&Veg Co. <br/></label>  
                        <br/>
                        <label class="fontLabel"> Per Pack </label> 
                        <p id="price"> $3.99 </p> 
                        
                        <br/> 

                        <p>
                            <button class="add-cart cart1" type="button" data-toggle="collapse" data-target="BlueBerries" aria-expanded="false"
                                aria-controls="contentId" >
                                ADD TO CART
                            </button>
                        </p>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle description" type="btn btn-primary" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 More Description
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            This is a BlueBerry.
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
                        <a href="/php/FVCarrots.php" >
                            <img  alt = "Fresh Lamb" class="img-fluid" id="imgAlsoSee" src ="../image/FVCarrots.jpg" >
                        </a>  
                        <fieldset id="fieldSetSimilarProduct" >
                            <legend > Product: Carrots </legend>
                            <label> Fruits&Veg Co. <br/></label>  
                            <br/>
                            <p id="price"> $3.99 </p> 
                            <p class="center">
                                <button class="add-cart cart2" type="button" data-toggle="collapse" data-target="Carrots" aria-expanded="false" aria-controls="contentId">
                                    ADD TO CART
                                </button>
                            </p>
                        </fieldset>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="bottomAdditional">
                        <a href="/php/FVApples.php" >
                            <img  alt = "Fresh Lamb" class="img-fluid" id="imgAlsoSee" src ="../image/FVApples.jpg" >
                        </a>  
                        <fieldset id="fieldSetSimilarProduct">
                            <legend> Product: Apples </legend>
                            <label> Fruits&Veg Co. <br/></label>  
                            <br/>
                            <p id="price"> $1.99 </p> 
                            <p class="center">
                                <button class="add-cart cart3" type="button" data-toggle="collapse" data-target="Apples" aria-expanded="false" aria-controls="contentId">
                                    ADD TO CART
                                </button>
                            </p>
                        </fieldset>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="bottomAdditional">
                        <a href="/php/FVBroccoli.php" >
                            <img  alt = "Fresh Lamb" class="img-fluid"  id="imgAlsoSee" src ="../image/FVBroccoli.jpg" >
                        </a>  
                        <fieldset id="fieldSetSimilarProduct">
                            <legend> Product: Broccoli </legend>
                            <label> Fruits&Veg Co. <br/></label>  
                            <br/>
                            <p id="price"> $3.99 </p> 
                            <p class="center">
                                <button class="add-cart cart4" type="button" data-toggle="collapse" data-target="Broccoli" aria-expanded="false" aria-controls="contentId" >
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


    <script src="../js/ShoppingCart.js"></script>







    <?php include_once 'NavBar.php'; ?>


</body>
</html>