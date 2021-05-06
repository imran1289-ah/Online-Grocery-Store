<?php

    session_start();
    $_SESSION["admin"];
?>


<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            
            <title>Sign in</title>

            
            
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="../css/formstyle.css">
            <style>
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
            <!--Check the login form if it is correct-->
            <script >
                function checkform(){
                    var form = document.signin
                    var email = form.getElementsByTagName('input')[0].value;
                    var search = email.search(/[A-Za-z_0-9]+\@[a-z]+\.[a-z]{2,}/);
                    var password = form.getElementsByTagName('input')[1].value;
                    var searchpassword = password.search(/[A-Z]+[A-Za-z_0-9]{3,}\d+$/);
                    if (document.signin.email.value == "" && document.signin.pass.value == "" ){
                        document.getElementById('message').innerHTML='**You did not enter your information. Try again**'
                        return false;
                    }
                    else if (document.signin.email.value == ""){
                        document.getElementById('message').innerHTML='**You did not enter your email. Try again**'
                        return false;
                    }
                    else if (document.signin.pass.value == ""){
                        document.getElementById('message').innerHTML='**You did not enter your password. Try again**'
                        return false;
                    }
                    else if (search != 0){
                        document.getElementById('message').innerHTML='**The email you have entered is incorect. Please enter again**'
                        return false;
                    }
                    else if (searchpassword !=0){
                        document.getElementById('message').innerHTML='**The format of your password is incorect or it is too short. Try again**'
                        return false;
                    }
                    else 
                        return true;
                        
                }
            </script>

        </head>

        <body>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
                <img  class="logo" src="../image/logo2.png" alt = "logo">

                <!--Div class called box which holds the form and centers it-->
                <div class="box">
                    <!--https://www.w3schools.com/js/tryit.asp?filename=tryjs_validation_js-->
                        <form  name="signin"  onsubmit="return checkform()" method="post">
                            
                            <legend style ="text-align:center;color:white;font-family:fantasy;" >Sign in</legend>

                                    <p id="message" style="text-align:center;font-weight:bold;color:red" > </p>
                                    
                                    
                                    <label name="emaillabel" style="color:white;"   >Email:</label>
                                    <br/>
                                    <input type="text" name="email" style="border-radius: 22px;" />
                            
                                    </br>
                                    </br>
                            
                                    <label name="passlabel" style="color:white;" id="password">Password: <br/> (Start with uppercase,end with digit and must be atleast 5 characthers long)</label><br/>
                                    <input type="password" name="pass" style="border-radius:22px;" />
                            
                                    <br />
                                    <br />
                    
                                    <!--https://getbootstrap.com/docs/4.0/components/buttons/ for the button-->
                                    <input style="background-color:rgba(0, 0, 0, 0.815);color:white;" class="btn btn-primary" type="submit" value="Submit" name="submit" >
                                    
                                    <br/>
                                    <br/>
                                    
                                    <!--https://getbootstrap.com/docs/4.0/components/buttons/ for the button-->
                                    <input style="background-color:rgba(0, 0, 0, 0.815);color:white;" class="btn btn-primary" type="reset" value="Reset" onclick="document.getElementById('message').innerHTML='**Your inputs have been reset**' ">
                                    
                                    <br/>
                                    <br/>
                                    
                                    <!--https://getbootstrap.com/docs/4.0/components/buttons/ for the button-->
                                    <a href="Forgotpass.php" target="_self"><input style="background-color:rgba(0, 0, 0, 0.815);color:white;" class="btn btn-primary" type="button" value="Forgot Password?"></a>
                                    
                                    <br/>
                                    <br/>
                                    <a href = "registerpage.php" target = "_self" style="text-decoration:none;color:white">Need a account? Create one here</a>
                        </form>



                            
                        
                        
                        <!--PHP code to validate user info if it existing or not-->
                        <?php 
                          //Get email and pass from user
                          $email = $_POST['email'];
                          $password = $_POST['pass'];

                          
                          //Open file  
                          $file = fopen("../data/info.txt" , "r");

                          $emailofusers = array();
                          $passwordofusers = array();
                          $nameofusers = array();
                                    
                         while(!feof($file)){
                            $Email= fgets($file);
                            $Label =  substr($Email,0,5);
                            if ($Label == "Email"){
                                    $UserEmail = substr($Email,8);
                                    $length = strlen($UserEmail);
                                    $realemail = substr($UserEmail,0,$length-2);
                                    array_push($emailofusers, $realemail);
                            }
                        }

                        fclose($file);

                        $fileforpassword = fopen("../data/info.txt" , "r");
                            while(!feof($fileforpassword)){
                                $Password = fgets($fileforpassword);
                                $LabelPass = substr($Password,0,8);
                                if ($LabelPass == "Password"){
                                        $UserPass = substr($Password,11);
                                        $lengthpass = strlen($UserPass);
                                        $realpass = substr($UserPass,0,$lengthpass - 2);
                                        array_push($passwordofusers, $realpass);
                                    }
                                }

                        fclose($fileforpassword);

                        $fileforname = fopen("../data/info.txt" , "r");
                        while(!feof($fileforname)){
                            $Name = fgets($fileforname);
                            $LabelName = substr($Name,0,10);
                            if ($LabelName == "First name"){
                                    $UserName = substr($Name,13);
                                   array_push($nameofusers, $UserName);
                                }
                            }

                        fclose($fileforname);



                        ?>
                        <!--Validating user inputs-->
                        <?php

                          if(isset($_POST['submit'])){
                            
                        if($email != "admin@hotmail.com" && $password != "Admin1234"){
                        for ($i = 0 ; $i < count($emailofusers) ; $i++ ){
                            if ($email == $emailofusers[$i] && $password == $passwordofusers[$i]){
                                //https://stackoverflow.com/questions/13266294/how-to-use-variables-passed-through-header-in-php
                                $_SESSION['name'] = $nameofusers[$i];
                                header("Location: loggedinuser.php?email=".$nameofusers[$i]);
                                exit();
                            }
                        }
                        }
                        if($email == "admin@hotmail.com" && $password == "Admin1234"){
                            session_start();
                            //https://www.youtube.com/watch?v=rGS8t9BSGO4&ab_channel=ILTECHS
                            $_SESSION["admin"]="admin";
                            header("Location: loggedinadmin.php");
                            
                        }
                        else{
                            echo "<script> alert('User not found. Please try again or create a account!') </script>";
                        }
                        
                        

                            
                        }
                        ?>
                </div>

                
                <!--Navbar-->
                <?php include_once 'NavBar.php'; ?>

                  
                

         

            
           

            
            
         
        </body>
    </html>





