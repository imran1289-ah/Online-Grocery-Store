<?php
    session_start();
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8"/>
            <title>ContactUsCheck</title>
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
             #tableOrder{
                color : white;
                width: 5000px;
                height: 2000px;
                font-size: x-large;
            }
            .p{
                text-align: center;
                color: white;
                font-size: large;
            }
            </style>
            
            
        </head>
        <body>
        <div class="container-fluid">
        <h1 class="page-header"> 
                <img  class="logo" src="../image/logo2.png" alt = "logo">
        </h1>
        <br/>
        <br/>
    </div>
    <?php

if (isset($_POST["submit"])){
$Username = $_POST["email"];
$file = fopen("../data/info.txt", "r") or die("File failed to open");
$users = file_get_contents('../data/info.txt',FILE_USE_INCLUDE_PATH);
fclose($file);
if(!preg_match("/".$Username."/", $users)){
   header("location: registerpage.php");
   exit();
}
}
$OrderFile = fopen("../data/UserOrder.txt", "r") or die("File failed to open");
$OrdersStr = file_get_contents('../data/UserOrder.txt',FILE_USE_INCLUDE_PATH);
$usersArray = preg_split("/------------------/",$OrdersStr,-1,PREG_SPLIT_NO_EMPTY);
$order;
fclose($OrderFile);
$Check = false;
foreach($usersArray as $user){
    if(preg_match("/".$Username."/", $user)){
        $order = $user;
        $Check = true;
        break;
    }
    
}
if (!$check){
print ('<p>"There are no orders linked to this username !"</p>');
exit();
}

$SplitOrders = preg_split("/,/",$order,-1,PREG_SPLIT_NO_EMPTY);
$items = preg_split("/ /",$SplitOrders[2],-1,PREG_SPLIT_NO_EMPTY);
$str;
foreach($items as $item){
    $str = $str .$item .", ";
}
$str = substr($str, 0, strlen($str)-2);
print' 
<div class = "container">
        
        <div class="row" > 
        <div class = "col-4">
        <div class="container-fluid">
        <br/>
    </div>
                </div>
                <div class = "container">
                <table class="table  table-responsive " id="tableOrder">
                  <thead class="thead-dark">
                    <tr>
                        <th scope="col">Order List</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Username</th>
                      <td >'.$SplitOrders[0].'</td>
                      
                    </tr>
                    <tr>
                      <th scope="row">Order Number</th>
                      <td >'.$SplitOrders[1].'</td>
                      
                      
                    </tr>
                    <tr>
                      <th scope="row">Items</th>
                      <td >'.$str.'</td>
                     
                    </tr>
                    
                   

                  </tbody>
                </table>

        </div>
        </div>
        </div>
'
?>
<?php include_once 'NavBar.php'; ?>
        </body>
    </html>
