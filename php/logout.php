<?php 
    session_start();

?>

<!DOCTYPE html>
    <html lang="en">
    
        <head>
        
            <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Logged out</title>

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
            <?php 
                if(isset($_SESSION['admin']))
                  unset($_SESSION['admin']);
                else if (isset($_SESSION['name']))
                  unset($_SESSION['name']);
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
            <?php 
              if(isset($_SESSION['admin']) || isset($_SESSION['name']))
                echo'<h1 style="color:white;font-family: fantasy;">You have succesfully logout out </h1>';
              else
                echo '<h1 style="color:white;font-family: fantasy;">No User logged in</h1>';
            ?>
            </div>

            <!--Navbar-->
            <?php include_once 'NavBar.php'; ?>
              
            
        </body>