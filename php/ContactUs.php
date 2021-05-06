<?php

    session_start();
    
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8"/>
            <title>ContactUs</title>
            <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="../css/formstyle.css">
            <style >
            
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
                top: 25px;
                left: 0;
                border-style:none;

            }
            #ContactUs{
                text-align: center;
                margin-left: 350px;
                margin-right: 350px;
            }

   
            
            </style>
            
            
        </head>
        <body>
        <br />  <br />
        <div class = "container">
        
        <div class="row" > 
        <div class = "col-4">
        <div class="container-fluid">
        <h1 class="page-header"> 
                <img  class="logo" src="../image/logo2.png" alt = "logo">
        </h1>
        <br/>
        <br/>
    </div>
                </div>
                <div class = "container">
              <form id= "ContactUs" name = "ContactUs" method="POST" action = "ContactUsCheck.php">
                <table class="table table-striped table-responsive table-hover">
                  <thead class="thead-dark">
                    <tr>
                        <th scope="col">Contact Us Form</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Email</th>
                      <td ><input type="email" class="form-control" id ="email" name ="email" required/></td>
                      
                    </tr>
                    <tr>
                      <th scope="row">Item Name</th>
                      <td ><input type="text" class="form-control" id= "ItemName"  name= "ItemName" required/></td>
                      
                      
                    </tr>
                    <tr>
                      <th scope="row">Order Number</th>
                      <td ><input type="text" class="form-control" id= "OrderNumber" name= "OrderNumber" required/></td>
                     
                    </tr>
                    <tr>
                      <th scope="row">Question</th>
                      <td ><input type="text" class="form-control" id = "Question" name = "Question" size="2000" required /></td>
                      <td></td>
                      <td>
                        

                      </td>
                   
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class = text-center>
                               <input type="submit"  name ="submit" class="btn btn-success" >
                            </div>
                            
                        </th>
                        <td></td>
                        <td></td>
                        <td>
                            <div class = text-center>
                                <button type="reset" id ="resetUser" class="btn btn-warning" >Reset</button>
                            </div>
                        </td>
                       
                      </tr>
                   

                  </tbody>
                </table>
              </form>
        </div>
        </div>
        </div>


           
            <script type ="text/javascript" src ="../js/userList.js">

            </script>
            
            
            <?php include_once 'NavBar.php'; ?>
  
        </body>
</html>
