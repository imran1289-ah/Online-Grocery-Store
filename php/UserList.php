<?php

    session_start();
    
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8"/>
            <title>User List Page</title>
            <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
            
            <style >
            
                
                #center {text-align:center;}
                
                h3 {color: green;}
                h4 {text-align: center; background-color: green; color: white;}
               #add{ 
                 background-color: rgba(221, 135, 30, 0.74);
                 border-radius: 30px;
                 
                 }
                
                h1{background-color: green; color: white;}
                img {border-radius: 20%; background-color: silver;}
                body{
                background-color: lightgoldenrodyellow;
              }
   
            
            </style>
            
            
        </head>
        <body>

          
          
          <br/>
          <br/>
          <br/>
            <h1 id= "center">  List of Users </h1>
           
            <div class = "container" id = "add">
            
                <div class ="row">
                    <div class = "col-9"> 
                        <h2  >User List </h2>
                    </div>

                    <div class = "col-3" > 
                        <b>Create New User</b>
                            <td><a class="btn btn-outline-success" href="UserEdit.php" role="button">Add</a></td>
                        
                    </div>
                </div>
                <br/>
            </div>
              <br/>
              <br/>

              <div class="row" > 
                <div class = "col-2">
                   </div>

              <div class = "container" >
           
                <form> 
              <table class="table table-striped table-responsive table-hover" id = "userTable">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">User Number</th>
                    <th scope="col"colspan = "3">First Name</th>
                    <th scope="col"colspan = "3">Last Name</th>
                    <th scope="col" colspan = "3">Email</th>
                    <th scope="col"></th>
                    <th scope="col">Actions</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody id="tbodyUser">
                  
                
                </tbody>
              </table>
              </form>
         
            </div>
            </div>
         
            <br/>
            <br/>



           
            <script type ="text/javascript" src ="../js/userList.js">

            </script>
            
            
            <?php include_once 'NavBar.php'; ?>
  
        </body>
</html>
