<!DOCTYPE html>
    <html lang="en">
        <head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Forgot Password</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/formstyle.css">
        <!--Style-->
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
        <!--Function to check password-->
        <script>
            function checkform (){
                var form = document.forgotpass
                var password = form.getElementsByTagName('input')[0].value;
                var search = password.search(/[A-Z]+[A-Za-z_0-9]{3,}\d+$/);
                var confrimpassword = form.getElementsByTagName('input')[1].value;
                var searchpassword = confrimpassword.search(/[A-Z]+[A-Za-z_0-9]{3,}\d+$/);
                if (document.forgotpass.password.value == "" || document.forgotpass.newpassword.value == ""){
                    document.getElementById('message').innerHTML='**You did not enter your password. Try again**';
                    return false;
                }
                else if (search != 0){
                    document.getElementById('message').innerHTML='**The password you have entered is an incorect format. Please enter again**';
                    return false;
                }
                else if (search != searchpassword){
                    document.getElementById('message').innerHTML='**The password you have enetered did not match. Please try again';
                    return false;
                }
                else {
                   
                }
            }
        </script>
        
    </head>

        

        <body>
            <!--Logo-->
            <img  class="logo" src="../image/logo2.png" alt = "logo">

             <!--Div class called box which holds the form and centers it-->
             <div class="box">
                <!--Form to put password-->  
                <form action="Forgotpasssuccess.php" name="forgotpass" onsubmit="return checkform()" >
                    
                    <legend style ="text-align:center;color:white;font-family: fantasy;" >Please enter your enter your new password</legend>
                        
                        <p id="message" style="text-align:center;font-weight:bold;color:red;"></p>

                            <label style="color:white;" id="password">Enter new password <br/> (Start with uppercase,end with digit and must be atleast 5 characthers long)</label>
                            <br/>
                            <input type="password" name="password" style="border-radius:22px;" />
                            <br />
                            <br />

                            <label style="color:white;">Confirm new password</label>

                            <br />
                            <input type="password" name="newpassword" style="border-radius:22px;" />

                            <br />
                            <br />
                    
                            <!--https://getbootstrap.com/docs/4.0/components/buttons/ for the button-->
                            <input style="background-color:rgba(0, 0, 0, 0.815);color:white;" class="btn btn-primary" type="submit" value="Submit">
                </form>
                </div>

                <?php include_once 'NavBar.php'; ?>

             

        </body>
    
    
    
</html>