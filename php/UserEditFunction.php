<?php

    session_start();
?>



<!DOCTYPE html>
    <html lang="en">
    
        <head>
        
            <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Logged in</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/formstyle.css">

        <style type="text/css">
        .message{
            text-align:center;
        }
        body {
                background-image: url("../image/low_contrast_linen.png");
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
        
        </style>

        </head>

        <body>
         <!--PHP Code that writes info the file-->   
        <?php
                    
            if(isset($_POST['submit'])){
              $file = fopen("../data/info.txt" , "a");

              if(!$file){
                echo "Your account information was not written to the file. Please try again";
                exit;
              }

            
                  
                $firstname = $_POST["firstName"];
                $lastname = $_POST["lastName"];
                $address = $_POST["address"];
                $postalcode = $_POST["postalCode"];
                $email = $_POST["email"];
                $password = $_POST["password"];


                fwrite($file , "Here is the information of the user,\n");
                fwrite($file , "First name : ");
                fwrite($file , $firstname.",");
                fwrite($file, "\n");
                fwrite($file , "Last name : ");
                fwrite($file , $lastname.",");
                fwrite($file, "\n");
                fwrite($file , "Address : ");
                fwrite($file , $address.",");
                fwrite($file, "\n");
                fwrite($file , "Postal Code : ");
                fwrite($file , $postalcode.",");
                fwrite($file, "\n");
                fwrite($file , "Email : ");
                fwrite($file , $email.",");
                fwrite($file, "\n");
                fwrite($file , "Password : ");
                fwrite($file , $password.",");
                fwrite($file, "\n");
                fwrite($file , "------------------\n");
                    
                fclose($file);
                header("Location: UserEdit.php");
               
              }
                
                
        ?>

        
        <img  class="logo" src="../image/logo2.png" alt = "logo">
            </br>
            </br>
            </br>
            </br>

            <div class="message">
            </br>
            </br>
            <br/>
            <br/>
              <h1 style="color:white;font-family: fantasy;"> 

             </h1>
            </div>

            

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


              <div style="position:absolute;margin-top:-220px;right:10px;">
              
                <button style="background-color:rgba(0, 0, 0, 0.815);color:white;" > <a href="logout.php" style="text-decoration:none;color:white"> Logout </a> </button>
              
            </div>
            
            
            
        </body>