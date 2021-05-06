<?php

    session_start();
    
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8"/>
            <title>User List Page</title>
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
               
                img {border-radius: 20%; background-color: silver;}
                body{
                    background-color: lightgoldenrodyellow;
                }
              
                    body, div, h1, form, input, p { 
                    padding: 0;
                    margin: 0;
                    outline: none;
                    font-family: Roboto, Arial, sans-serif;
                    font-size: 16px;
                    color: #666;
                    }
                h1 {
                    padding: 10px 0;
                    font-size: 32px;
                    font-weight: 300;
                    text-align: center;
                    background-color: green; color: white;
                    }
                p {
                    font-size: 12px;
                    }
                hr {
                    color: #a9a9a9;
                    opacity: 0.3;
                    }
                .main-block {
                    max-width: 340px; 
                    min-height: 460px; 
                    padding: 10px 0;
                    margin: auto;
                    border-radius: 5px; 
                    border: solid 1px #ccc;
                    box-shadow: 2px 2px 6px rgba(0,0,0,.31); 
                    background: #ebebeb; 
                    }
                form {
                    margin: 0 30px;
                    }                   
                input[type=text],  input[type=date]{
                    width: calc(100% - 50px);
                    height: 35px;
                    margin: 13px 0 0 -5px;
                    padding-left: 10px; 
                    border-radius: 0 5px 5px 0;
                    border: solid 2px #cbc9c9; 
                    box-shadow: 1px 2px 5px rgba(0,0,0,.09);
                    }
                #icon {
                    display: inline-block;
                    padding: 9.3px 15px;
                    box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
                    background: green;
                    color: #fff;
                    text-align: center;
                    }
                .bottomBlock {
                    margin-top: 8px;
                    text-align: center;
                    }
                #submit {
                    width: 100%;
                    padding: 10px 0;
                    margin: 10px auto;
                    border-radius: 5px; 
                    border: none;
                    color: white;
                    font-size: 14px;
                    font-weight: 600;
                    background: green;
                    }      
                .row {
                    margin-left:2%;
                    margin-right:2%;
                  }
  
                .column {
                    float: left;
                    width: 80%;
                    padding: 5px;
                  }

                .column:after {
                    padding: 5px;
                  }

                  /* Clearfix (clear floats) */
                .row::after {
                    content: "";
                    clear: both;
                    display: table;
                  }

                table {
                    border-collapse: collapse;
                    border-spacing: 0;
                    width: 100%;
                  }  
            </style>

            
        </head>
        <body>
          
          <br/>
          <br/>
          <br/>
            <h1 id= "center">  List of Orders </h1>
           
            <div class = "container">
                <div class ="row">
                </div>
                <br/>
            </div>




            <div class="row">
              <div class="column">
            <div class="container">
                <table class="table table-striped table-responsive table-hover" id = "userTable">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Address</th>
                            <th scope="col">Date</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    
                    <?php include_once 'getOrders.php'; ?>
            </table>
                </div>
            </div>
         

            <div class="column">
                <div class="main-block">
                        <h1>Add Order</h1>
                        <form name="newOrder" action="OrderProfile.php" method="POST">                  
                            <hr>
                            <label id="icon" for="name"><i class="fas fa-user"></i></label>
                            <input  class="fname" type="text" name="name" placeholder="Name" />

                            <label id="icon" for="name"><i class="fas fa-envelope"></i></label>
                            <input type="text" name="email" placeholder="Email" />

                            <label id="icon" for="phoneNumber"><i class="fas fa-phone"></i></label>
                            <input type="text" name="phoneNumber" placeholder="Phone Number" />

                            <label id="icon" for="address"><i class="fas fa-map-marked-alt"></i></label>
                            <input type="text" name="address" placeholder="Address" />

                            <label id="icon" for="date"><i class="fas fa-calendar-alt"></i></label>
                            <input type="date" name="date" placeholder="date" />
                                            
                        <div class="bottomBlock">
                                <input id="submit" type="submit" name="submit" />
                        </div>
                    </form>
                </div>
            </div>















                    <?php 
                            if(isset($_POST['submit'])){
                                if(isset($_POST['email']) && isset($_POST['phoneNumber'])  && isset($_POST['address']) && isset($_POST['date']) && isset($_POST['name'])) {
                                    $name = $_POST['name'];
                                    $email = $_POST['email'];
                                    $phoneNumber = $_POST['phoneNumber'];
                                    $address = $_POST['address'];
                                    $date = $_POST['date'];
                                    $valid = true;                                   

                                    if(preg_match(("/[A-Za-z_0-9]+\@[a-z]+\.[a-z]{2,}/"), $email) == 1)
                                        $valid = true;
                                    else {
                                        echo "bad number. Will not create new Order";
                                        $valid = false;
                                        }
                                    if(preg_match(("/^[0-9]+$/"), $phoneNumber) == 1)
                                        $valid = true;
                                    else {
                                        echo "bad number. Will not create new Order";
                                        $valid = false;
                                    }

                                    if($valid == true){
                                        $myfile = fopen("../data/order.txt", "a+") or die("Unable to open file!");
                                        fwrite($myfile, $name."\n");
                                        fwrite($myfile, $email."\n");
                                        fwrite($myfile, $phoneNumber."\n");
                                        fwrite($myfile, $address."\n");
                                        fwrite($myfile, $date."\n");
                                        fwrite($myfile, "\n");

                                        fclose($myfile);
                                        echo "<meta http-equiv='refresh' content='0'>";

                                    }

                                }
                            }

                    ?>


        <?php include_once 'NavBar.php'; ?>
    </body>
</html>