<?php 
    function getFunction1()
    {
        session_start();

        $keyName;

    for($i=1; $i<50; $i++) {
        if(isset($_SESSION['List'][$i]) && !empty($_SESSION['List'][$i])) {
        echo' <tr>';
        echo'
        <th scope="row">'.$i.'</th>';

        while (list ($key, $val) = each ($_SESSION['List'][$i])) { 
            echo'
            <th scope="row">'.$val.'</th>';

            if($key=="productName"){
                $keyName=$val;
                }
            }
            echo'<td colspan="2"><form action="" method="post">
            <input type="hidden" name="delete" value='.$keyName.'>  
            <input type="submit" class ="btn btn-outline-danger" value="Delete"/>
            </form></td>';
            echo'</td></tr>';

         }  
        }
    }

    function getFromFile()
    {
        $file = fopen("../data/orderValues.txt","r");
        $innerOrder = array();
        $totalOrder = array();

        while(!feof($file)){
            $line = fgets($file);
            $pieces = explode(":", $line);
            $innerOrder[0] = $pieces[0];
            $innerOrder[1] = $pieces[1];
            $innerOrder[2] = $pieces[2];
            array_push($totalOrder, $innerOrder);
            $innerOrder = array();
        }

        echo '<tbody>';
        for($i=0; $i<count($totalOrder)-1; $i++){
            echo '<tr>';
            echo '<td>';
                echo $i;
            echo '</td>';
            foreach($totalOrder[$i] as $key => $value){
                echo '<td>';
                    echo $value;
                echo '</td>';

            }
            echo '<td colspan="2">';
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

        unset($totalOrder[count($totalOrder)-1]);
        $totalOrder = array_values($totalOrder);

        for($i=0; $i<count($totalOrder); $i++){
            if(isset($_POST["deleteButton".$i])){
                unset($totalOrder[$i]);
                $totalOrder = array_values($totalOrder);
                $fh = fopen( '../data/orderValues.txt', 'w' );
                fclose($fh);
                $myfile = fopen("../data/orderValues.txt", "a") or die("Unable to open file!");        
            for($y=0; $y<count($totalOrder); $y++){ 
                foreach($totalOrder[$y] as $key => $value) {
                                        fwrite($myfile, $value.":");
                }
                fwrite($myfile, "\n");     
            }    
            fclose($myfile);
            echo "<meta http-equiv='refresh' content='0'>";
        }
    }
        
     
    }
?>