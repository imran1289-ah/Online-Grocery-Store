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
           if(isset($_POST['someData']) ){
            
            $email =$_POST['someData'];

            $file = fopen("../data/info.txt" , "r") or die("File failed to open");

            $users = file_get_contents('../data/info.txt',FILE_USE_INCLUDE_PATH);

            fclose($file);
                
            $usersArray = preg_split("/------------------/",$users,-1,PREG_SPLIT_NO_EMPTY);


            $updateUsers = array();
           

            foreach($usersArray as $user){
                if(!preg_match("/".$email."/", $user)){
                    array_push($updateUsers,$user);
                }
            }

           $fileOverwrite =fopen("../data/info.txt" , "w") or die("Unable to open file!");
            $numUsers = count($updateUsers)-1;
            $inc = 0;
            foreach($updateUsers as $user){
                if($numUsers > $inc){
                    $inc++;

                $split = preg_split("/,/",$user,-1,PREG_SPLIT_NO_EMPTY);
                $num = count($split)-1;
                $counter = 0;
                    foreach($split as $line){
                    if($num > $counter){
                        fwrite($fileOverwrite , $line.",");
                        $counter++;
                        }
                    }
                    if($numUsers == $inc)
                    fwrite($fileOverwrite, "\n------------------\n");
                    else
                    fwrite($fileOverwrite, "\n------------------");
                }
            }
              
            
            
           




               
              
         
        }
        ?>

        

            
            
        </body>