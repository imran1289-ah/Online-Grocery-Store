<?php 
    session_start();
    if(isset($_SESSION['admin'])){
        include_once 'adminNav.php';
    }
    else 
        include_once 'userNav.php';


    echo '<ul class="navbar-nav ml-auto">';
                             if(isset($_SESSION['admin'])){
                                    echo '   
                                        <a class="nav-link" href="logout.php"style="color:black; text-align: right;"><button class="button" style="color:black; background-color:LightGreen;"><i class="fa fa-address-card"></i>  '.$_SESSION["admin"].': Logout          
                                        </button></a>';
                                }
                    
                            else if(isset($_SESSION['name'])){
                                echo '   
                                <a class="nav-link" href="logout.php"style="color:black; text-align: right;"><button class="button" style="color:black; background-color:LightGreen;">  '.$_SESSION["name"].': Logout <i class="fa fa-address-card"></i>         
                                </button></a>';
                            }
                            else 
                                echo '<a class="nav-link" href="login.php"style="color:black; text-align: right;"><button class="button" style="color:black; background-color:LightGreen; font-size: 15px;"> Login <i class="fa fa-address-card"></i></button></a>';

echo'
    </nav>
';
?>