<?php

    session_start();
?>
<?php

if(isset($_POST['emailData']) ){
    
            
    $email =$_POST['emailData'];

    $   $file = fopen("../data/info.txt" , "r") or die("File failed to open");
                
    $users = file_get_contents('../data/info.txt',FILE_USE_INCLUDE_PATH);

    fclose($file);
        
    $usersArray = preg_split("/------------------/",$users,-1,PREG_SPLIT_NO_EMPTY);


    $updateUser;
   

    foreach($usersArray as $user){
        if(preg_match("/".$email."/", $user)){
            $updateUser = $user;
            break;
        }
    }

    echo $updateUser;
    echo "<br/>";

    $breakUp = preg_split("/:/", $updateUser);

    foreach($breakUp as $break){
        echo $break."<br/>";
    }
    echo "<br/>";
    echo count($breakUp);
    echo "<br/>";

    $values =  array();


    foreach($breakUp as $break){
        $temp= preg_split("/,/", $break);
        array_push($values, $temp[0]);
    }



    $_SESSION["editFirstName"] = $values[1];
    $_SESSION["editLastName"] = $values[2];
   $_SESSION["editAddress"] = $values[3];
    $_SESSION["editPostalCode"] = $values[4];
    $_SESSION["editEmail"] = $values[5];
    $_SESSION["editPassword"] = $values[6];


    


    

}



?>
