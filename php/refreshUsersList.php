
     
        <?php

                
            $file = fopen("../data/info.txt" , "r") or die("File failed to open");

            $users = file_get_contents('../data/info.txt',FILE_USE_INCLUDE_PATH);
                
            $usersArray = preg_split("/------------------/",$users,-1,PREG_SPLIT_NO_EMPTY);


            


            $interim = array();

            foreach($usersArray as $user){
                $test = preg_split("/:/", $user);

                foreach($test as $trying){

                    array_push($interim, $trying);

                }              
           }

            $halfway = array();
            $counter = 0;

            foreach($interim as $inter){
                if(!($counter%7 == 0)){

                $temp = preg_split("/,/",$inter);
                array_push($halfway, $temp[0]);

                }

                $counter++;
            }
            $justValues = array();
            $increment =1;
            foreach($halfway as $half){
                
                $stringAppened = $stringAppened.$half.",";

                if(($increment%6 == 0)){
                    array_push($justValues, $stringAppened);
                    $stringAppened = "";
                }
                $increment++;
                }
                $myJSON = json_encode($justValues);
             
               echo $myJSON;
              

        ?>

        

            
        