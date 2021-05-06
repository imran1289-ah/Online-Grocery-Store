<?php

    session_start();
    
?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        
        <meta charset = "utf-8" /> 
        <meta name="description" content="Fresh Beef"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" type="text/css" href = "CSS HERE">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/navbar.css">
        <!--The style of this webpage-->
        <style>
            .bottom{   
                background-color: rgb(184, 185, 187);
                margin-right: 5%;
                margin-left: 5%;
                margin-top: 10px;
                margin-bottom: 20px;
            }
            .bottomAdditional{
                background-color: rgba(255, 255, 255, 0.603);
                margin-right: 10px;
                margin-left: 10px;
                margin-top: 10px;
                margin-bottom: 30px;
                height: fit-content;
                max-width: fit-content;
                padding-left: 10px;
                padding-right: 10px;
                padding-bottom: 10px;
                padding-top: 10px;
                border-radius: 25px;
            }
            .center-block {
              display: block;
             margin-left: auto;
             margin-right: auto;
            }

            img {float:left;
                padding-top: 1px;
                padding-left: 1px;
                padding-right: 1px;
                padding-bottom: 1px;
                border-style:solid;
                border-width: 3px;
                width:550px; 
                height:450px;
                margin-right: 20px;
            }

            img.center {float:none;
                padding-top: 1px;
                padding-left: 1px;
                padding-right: 1px;
                padding-bottom: 1px;
                border-style:solid;
                border-width: 3px;
                width:550px; 
                height:450px;
                margin-right: 0px;
            }
            #price{color: rgb(255, 0, 0); font-size: 2em;}
            #centerFood{margin-left: 2.5%;}
            #addToCart{background-color:rgba(0, 0, 0, 0.815); 
                       width:300px; height:100px; 
                       color:rgba(255, 255, 255, 0.815); 
                       font-family:Georgia, 'Times New Roman', Times, serif;
                       }
            #availibility{text-indent:35%;
                         background-color:rgba(145, 145, 145, 0.815); 
                       color:rgba(0, 0, 0, 0.815); 
                       font-family:Georgia, 'Times New Roman', Times, serif;
                       }
            #similarProducts{text-indent:40%;
                       color:rgba(0, 0, 0, 0.815); 
                       font-family:Georgia, 'Times New Roman', Times, serif;
                       }
                       
            #fieldSetProduct{width:50%; height:40.5%;
           }
           #fieldSetSimilarProduct{width:100%; height:17.5%;
           }
           .logo {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 200px;
            height: 200px;
            position: absolute;
            top: 20px;
            left: 0;
            border-style:none;
            }
            body{
            background-image: url("../image/low_contrast_linen.png");
            }
        
        </style>
        
        <title> SeaFood-Salmon </title>
    </head>



<body>
   
    
    <!--Title of the section-->
    <h4 id="availibility" style="font-family:Family;color:white;" >Salmon Section</h4>
    <img  class="logo" src="../image/logo2.png" alt = "logo">
    
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    
    
    <!--The product, with the picture, price and all other description-->
    <div class="row">
        <div class="col-md-12">
    <form id="centerFood" action="">
        <img alt = "SeaFoodSalmon" class="img-fluid" src ="../image/SeaFoodSalmon.jpg">  
        <fieldset id="fieldSetProduct">
            <legend style="color:white;"> Product: Salmon </legend>
        <label style="color:white;"> SeaFood Co. <br/></label>  
       <br/>
       <label style="color:white;"> Per Unit <br/></label> 

       <p id="price" > $3.99 </p> 
       <label style="color:white;"> Select Type: </label> 
        <br/> 
        <form action="">
        
        <input type="radio" id="whole" name="salmon" value ="Whole" checked="checked"> <span style="color:white;">Whole</span>
        <input type="radio" id="sliced" name="salmon" value ="Sliced"  /> <span style="color:white;">Sliced</span>
        <input type="radio" id="cooked" name="salmon" value ="Cooked" /> <span style="color:white;">Cooked</span>
        </form>
        <br/>  
        
        <label style="color:white;"> Select Quantity: </label>
        <br/>
        <form action="">
           
        <input type="radio" id="one" name="lamb" value ="1" checked="checked" /> <span style="color:white">1</span>
        <input type="radio" id="two"  name="lamb" value ="2"  /> <span style="color:white">2</span>
        <input type="radio" id="three" name="lamb" value ="3" /> <span style="color:white">3</span>
        </form>

        <p>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#contentId" aria-expanded="false"
                    aria-controls="contentId" style="background-color:rgba(0, 0, 0, 0.815);
                    width:300px; height:100px;
                    color:rgba(255, 255, 255, 0.815);
                    font-family:Georgia, 'Times New Roman', Times, serif;" onclick="addnormalsalmon()">
                ADD TO CART
            </button>
        </p>
        

        </fieldset>
    </form>

    <!--The more description button-->
    <div class="row">
    <div class="col-md-6">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              More Description
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                This is our salmon offered by companies such as SeaFood Co. and others. <a href="SalmonDescription.php" style="text-decoration: none;">Click here for more description</a>
            </div>
        </div>
    </div>
    </div>

    <br/>
    <br/>
    <h4 style="color:white;font-family: fantasy;">Also See:</h4>
    <br/>
    <br/>

    <!--Also see section-->
    <div class="row">
        <div class="col-md-4">
        <div class="bottomAdditional">
            <a href="../php/SeaFoodShrimp.php" target="_self">
                <img  alt = "Fresh Lamb" class="img-fluid" src ="../image/SeaFoodShrimp.jpg" style="width:400px; height:200px;" >   
            </a>     
            <fieldset id="fieldSetSimilarProduct">
                <legend> Product: Shrimp</legend>
            <label> SeaFood Co. <br/></label>  
            <br/>
            <p id="price"> $3.99 </p> 
        </fieldset>
        </div>
        </div>

        <div class="col-md-4">
        <div class="bottomAdditional"> 
            <a href="../php/SeaFoodOctopus.php" target="_self">
                <img  alt = "Fresh Lamb" class="img-fluid" src ="../image/SeaFoodOctopus.jpg" style="width:400px; height:200px;" >
            </a>
            <fieldset id="fieldSetSimilarProduct">
            <legend> Product: Octopus </legend>
            <label> SeaFood Co. <br/></label>  
            <br/>(per pack of 3)
            <p id="price"> $16.99 </p> 
        </fieldset>
        </div>
        </div>

        <div class="col-md-4">
            <div class="bottomAdditional">
            <a href="../php/SeaFoodLobster.php" target="_self">
                <img  alt = "Fresh Lamb" class="img-fluid" src ="../image/SeaFoodLobster.jpg" style="width:400px; height:200px;" >
            </a>  
            <fieldset id="fieldSetSimilarProduct">
                <legend> Product: Lobster </legend>
            <label> SeaFood Co. <br/></label>  
            <br/>  
            <p id="price"> $21.35 </p> 
        </fieldset>
        </div>
        </div>
    </div>
    <br/>
    <br/>

    <!--Navbar--><?php include_once 'NavBar.php'; ?>

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
    
            <script src="../js/cartfunctionssalmon.js"></script>

</body>

</html>
