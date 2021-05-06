<?php

        $file = fopen("../data/order.txt","r");
        $singleOrder = array();
        $totalOrder = array();

        $innerCouter = 0;
        $outerCouter = 0;
        while(!feof($file)){
            $line = fgets($file);

            if($innerCouter<5){
                $singleOrder[$innerCouter] = $line;
                $innerCouter++;
            }
            else{
                $totalOrder[$outerCouter] = $singleOrder;
                $outerCouter++;
                $innerCouter=0;
                $singleOrder = array();
            }

            
        }

        echo '<tbody>';
        for($i=0; $i<count($totalOrder); $i++){
            echo '<tr>';
            echo '<td>';
                echo $i;
            echo '</td>';
            foreach($totalOrder[$i] as $key => $value){
                echo '<td>';
                    echo $value;
                echo '</td>';

            }
            echo '<td>';
                echo '<a class="btn btn-outline-info" href="OrderList.php" role="button">Edit</a>';
            echo '</td>';
            echo '<td>';
                echo '
                            <form method="post">
                                <input type="submit" name="deleteButton'.$i.'"
                                    class="btn btn-outline-danger" value="Delete" />
                            </form>
                ';
            echo '</td>';
            echo '</tr>';
        }
        echo '</tbody>';


        for($i=0; $i<count($totalOrder); $i++){
            if(isset($_POST["deleteButton".$i])){
                unset($totalOrder[$i]);
                $totalOrder = array_values($totalOrder);
                $fh = fopen( '../data/order.txt', 'w' );
                fclose($fh);
                $myfile = fopen("../data/order.txt", "a") or die("Unable to open file!");        
            for($y=0; $y<count($totalOrder); $y++){ 
                foreach($totalOrder[$y] as $key => $value) {
                                        fwrite($myfile, $value);
                }
                fwrite($myfile, "\n");     
            }    
            fclose($myfile);
            echo "<meta http-equiv='refresh' content='0'>";
        }
    }
        




?>