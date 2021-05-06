<?php

    session_start();
    
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8"/>
            
            <title> User Edit </title>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
            <meta name="viewport" content="width=divice-width, initial-scale=1"/>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

            
            <style >
                
                #center {text-align:center;}
                h2 {background-color: rgba(221, 135, 30, 0.74);}
                h3 {color: green;}
                h4 {text-align: center; background-color: green; color: white;}
               
                
                h1{background-color: green; color: white;}
                img {border-radius: 20%; background-color: silver;}
   
            
            </style>
            
            
        </head>
        <body>
    


            <style>
            body{
                background-color: lightgoldenrodyellow;
            }
        </style>
    
          
          <br/>
          <br/>
          <br/>
            <h1 id= "center">  User Add Page </h1>
           
            <div class = "container " >
              <form id= "UserForm" name = "UserForm"  method="POST" action = "UserEditFunction.php">
                <table class="table table-striped table-responsive table-hover">
                  <thead class="thead-dark">
                    <tr>
                        <th scope="col">User Edit Field</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">First Name</th>
                      <td><input type="text" class="form-control" id ="firstName" name ="firstName" required/></td>
                      <td><b>Last Name</b></td>
                      <td><input type="text" class="form-control" id= "lastName"  name= "lastName" required/></td>
                      
                    </tr>
                    <tr>
                      <th scope="row">Address</th>
                      <td colspan =3><input type="text" class="form-control" id= "address"  name= "address" required/></td>
                      
                      
                    </tr>
                    <tr>
                      <th scope="row">Email</th>
                      <td><input type="email" class="form-control" id= "email" name= "email" required/></td>
                      <td><b>Postal Code</b></td>
                      <td><input type="text" class="form-control" id="postalCode" name="postalCode" required /></td>
                     
                    </tr>
                    <tr>
                      <th scope="row">Password</th>
                      <td><input type="text" class="form-control" id = "password" name = "password" required pattern="[A-Z]+[A-Za-z_0-9]{3,}\d+$" /></td>
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
              <p id="message" style="text-align:center;font-weight:bold;color:red;" ></p>
         
            <br/>
            <br/>
  
            
            <?php include_once 'NavBar.php'; ?>
            

            <script type ="text/javascript" src ="../js/userList.js">

            </script>
        </body>
</html>
