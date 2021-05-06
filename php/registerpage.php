<?php

    session_start();
    
?>

<!DOCTYPE html>
    
    <html lang="en">
        <head>
            <meta charset="utf-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            
            
            <title>Create an account</title>
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
                top: 25px;
                left: 0;
                border-style:none;
            }
            </style>
           
            <!--Function to check form if it is correct-->
           <script>
               function checkregister(){
                   var first = document.createaccount;
                   var firstn = first.getElementsByTagName('input')[0].value;
                   var searchfirstname = firstn.search(/[A-Z]+/i);
                   var lastn = first.getElementsByTagName('input')[1].value;
                   var searchlastname = lastn.search(/[A-Z]+/i);
                   var addressa = first.getElementsByTagName('input')[2].value;
                   var searchaddress = addressa.search(/[0-9]+\s[A-Z]+\s[A-Z]+/i);
                   var postcodep = first.getElementsByTagName('input')[3].value;
                   var searchpostcode = postcodep.search(/[A-Z]\d[A-Z]\s\d[A-Z]\d/i)
                   var emaile = first.getElementsByTagName('input')[4].value;
                   var searchemail = emaile.search(/[A-Za-z_0-9]+\@[a-z]+\.[a-z]{2,}/);
                   var passwordp =first.getElementsByTagName('input')[5].value;
                    var searchpassword = passwordp.search(/[A-Z]+[A-Za-z_0-9]{3,}\d+$/);
                   
                   var confirmpasswordp = first.getElementsByTagName('input')[6].value;
                   var searchconfirmpassword = confirmpasswordp.search(/[A-Z]+[A-Za-z_0-9]{3,}\d+$/);
                   
                   var checkboxc = first.getElementsByTagName('input')[7];
                

                if (searchfirstname != 0 || firstn == ""){
                    document.getElementById('message').innerHTML = "**It appears you did not correctly enter your first name.Please try again**";
                    return false
                }
                else if (searchlastname !=0 || lastn ==""){
                    document.getElementById('message').innerHTML = "**It appears you did not correctly enter your last name.Please try again**";
                    return false
                }
                else if (searchaddress != 0 || addressa == ""){
                    document.getElementById('message').innerHTML = "**It appears you did not correctly enter your address.Please try again**";
                    return false
                }
                else if (searchpostcode != 0 || postcodep == ""){
                    document.getElementById('message').innerHTML = "**It appears you did not correctly enter your postal code.Please try again**";
                    return false;
                }
                else if (searchemail != 0 || emaile == ""){
                    document.getElementById('message').innerHTML = "**It appears you did not correctly enter your email.Please try again**";
                    return false;
                }
                else if (searchpassword !=0){
                    document.getElementById('message').innerHTML = "**It appears you did not correctly enter your password.Please try again**";
                    return false;

                }
                else if (passwordp != confirmpasswordp){
                    document.getElementById('message').innerHTML = "**You password did not match. Please try again**";
                    return false;
                }
                else if (passwordp == "" || confirmpasswordp == ""){
                    document.getElementById('message').innerHTML = "**It appears you did not correctly enter your password.Please try again**";
                    return false;
                }
                else if (!(checkboxc.checked)){
                    document.getElementById('message').innerHTML = "**It appears you did not agree to the terms and conditions.Please try again**";
                    return false;
                }
                else{
                    return true;
                }
                



            }
           </script>

        </head>

        <body>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
            <img  class="logo" src="../image/logo2.png" alt = "logo">
               
                <!--PHP function that saves info to the file-->
                
                <!--Form to create account-->
                <div class="box">
                    
                    <form name="createaccount" onsubmit="return checkregister()" method="POST" action="Registersucess.php" >
                        
                        <legend style="text-align:center;color:white;font-family:fantasy">Create your account</legend>

                        <p id="message" style="text-align:center;font-weight:bold;color:red;" ></p>
                    
                        
                        <label style="color:white;">First Name</label>
                        <input type="text" name="firstname" style="border-radius: 22px;"/>
                        </br>
                        </br>
                    
                        <label style="color:white;">Last Name</label>
                        <input type="text" name="lastname" style="border-radius: 22px;"/>
                        </br>
                        </br>
                    
                        <label style="color:white;">Address (APT/ST/CITY)</label>
                        </br>
                        <input type="text" name="address" style="border-radius: 22px;"/>
                        </br>
                        </br>
                        
                        <label style="color:white;">Postal Code</label>
                        </br>
                        <input type="text" name="postal" style="border-radius: 22px;"/>
                        </br>
                        </br>

                    
                        <label style="color:white;">Email </label>
                        </br>
                        <input type="text" name="email" style="border-radius: 22px;"/>
                        </br>
                        </br>
                    
                        <label style="color:white;" id="password">Password <br/> (Start with uppercase,end with digit and must be atleast 5 characthers long)</label>
                        </br>
                        <input type="password" name="pass" style="border-radius: 22px;"/></br>
                        </br>
                    
                        <label style="color:white;">Confirm Password</label>
                        </br>
                        <input type="password" name="confirmpass" style="border-radius: 22px;"/>
                        </br>
                        </br>
                        
                        <a href="login.php" target="_self" style="text-decoration:none;color:white">Have an account?Click here to sign in</a>

                        </br>
                        
                        
                        
                        <!--https://getbootstrap.com/docs/5.0/forms/checks-radios/-->
                        <input type="checkbox" name="checkbox" style="width:5%;"><span style="color:white;">I agree to the terms and conditions</span> 

                        </br>
                        
                        
                        <!--https://getbootstrap.com/docs/4.0/components/buttons/-->
                        <input style="background-color:rgba(0, 0, 0, 0.815);color:white;" class="btn btn-primary" type="submit" value="Submit" name="submit">
                        </br>
                        </br>
                        <input style="background-color:rgba(0, 0, 0, 0.815);color:white;" class="btn btn-primary" type="reset" value="Reset" onclick="document.getElementById('message').innerHTML='Your inputs have been reset'">

                       
                    </form>
                </div>

                
                <!--Navbar-->
                <?php include_once 'NavBar.php'; ?>

                  

        </body>

</html>
                
                
                    
                
               
               
         
