<?php 
  session_start();

    require_once("OrderListFunction.php");
                  
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
               
                
                h1{background-color: green; color: white;}
                img {border-radius: 20%; background-color: silver;}
                body{
                background-color: lightgoldenrodyellow;
                }
                .row {
                    margin-left:5%;
                    margin-right:5%;
                  }
  
                  .column {
                    float: left;
                    width: 50%;
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

                  th, td {
                    text-align: left;
                    padding: 16px;
                  }
                  

              
   
            
            </style>

              <script>
                //DELETES SELECT ITEM FROM THE LOCAL STORAGE//
                function deleteItem(itemName){
                  console.log("running"+itemName);
                  index=<?php session_start(); echo sizeof($_SESSION['List']); ?>;
                  console.log("running"+itemName+index);

                  for(i=1; i<index; i++){
                    if(i==itemName) {
                      
                    <?php session_start();
                          echo "help";
                    ?>       
                    }
                  }      
                }
            </script>
            
        </head>
        <body>
          
          <br/>
          <br/>
          <br/>
            <h1 id= "center">  Products on Order </h1>
           
                       
            <div class = "col-3"> 
                    <a class="btn btn-outline-success" href="OrderProfile.php" role="button">Return to Order</a>                     
            </div>

            <div class = "container">
                <div class ="row">
    

                    <div class = "col-5"> 
                     
                    </div>
                </div>
                <br/>
            </div>
              
              
            <div class="row">
              <div class="column">
              <div class = "container">              
              <table class="table table-striped table-responsive table-hover" id = "userTable">
                <thead class="thead-dark">
                <tr>
                    <th scope="col" colspan="6" class = text-center>Pending Products</th>
                </tr>
                  <tr>
                    <th scope="col">List ID</th>
                    <th scope="col">Type</th>
                    <th scope="col">Name</th>
                    <th scope="col">Amount</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody id="tbodyUser">
                <?php getFunction1(); ?>                
                <tr>
                <div class = "col-3"> 
                        <td colspan="5">
                              <form method="post">
                                <input type="submit" name="saveChanges"
                                    class="btn btn-success" value="Commit Changes" />
                            </form>
                        </td>
                        
                    </div>
                </tr>
                </tbody>
              </table>
              </div>         
            </div>


            <?php    

                  if(isset($_SESSION['List']))
                  if(isset($_POST["saveChanges"])){
                      $myfile = fopen("../data/orderValues.txt", "a") or die("Unable to open file!");        
                  for($y=1; $y<count($_SESSION['List']); $y++){ 
                      foreach($_SESSION['List'][$y] as $key => $value) {
                                              fwrite($myfile, $value.":");
                      }
                      fwrite($myfile, "\n");     
                  }    
                  fclose($myfile);
                  echo "<meta http-equiv='refresh' content='0'>";
                  }




                if(isset($_SESSION['admin']))
                            if(isset($_POST['delete'])) { 
                                $value = $_POST['delete'];
                                for($i=1; $i<50; $i++) {    
                                  if(isset($_SESSION['List'][$i]) && !empty($_SESSION['List'][$i])) {        
                                    foreach ( $_SESSION['List'][$i] as $key=>$val ) {
                                        if($key=="productName"){
                                          $name=$val;
                                            if($name==$value){
                                              unset($_SESSION['List'][$i]);   
                                              header('Location: ?' . uniqid());
                                              #header('Refresh: 0');                                 
                                          }
                                      }
                                    }
                                  }
                                  }  
                              };
                    ?>

            <br/>
            <br/>

            <div class="column">
            <?php
                include("OrderEditFunction.php");
            ?>
            </div>


                <?php

                    if(isset($_SESSION['admin']))
                    if (!isset($_SESSION['List'])) {
                         $_SESSION['List']=array(array("productType"=>"","productName"=>"", "productQuantity"=>"")); 
                        }  

                        $productType=$_SESSION["productType"];
                        $productName=$_SESSION["productName"];
                        $productQuantity=submitOrder();

                        if(!empty($productType) && !empty($productName) && !empty($productQuantity)){
                            $b=array("productType" => $productType, "productName" => $productName, "productQuantity" => $productQuantity);                           
                            array_push($_SESSION['List'],$b);  // Items added to cart
                        }
                        ?>
               
            <br/>
            <br/>
            </div>


            <div class="col-md-6">
              <table class="table table-striped table-responsive table-hover" id = "userTable">
                <thead class="thead-dark">
                <tr>
                    <th scope="col" colspan="6" class = text-center>Products On Order</th>
                </tr>
                  <tr>
                    <th scope="col">List ID</th>
                    <th scope="col">Type</th>
                    <th scope="col">Name</th>
                    <th scope="col">Amount</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody id="tbodyUser">
                <?php getFromFile(); ?>                

                </tbody>
              </table>
              </div>
                     
            
           



            <?php include_once 'NavBar.php'; ?>
        </body>
</html>
