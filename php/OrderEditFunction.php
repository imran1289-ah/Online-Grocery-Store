<?php
echo'
            <div class = "container " >
            <table class="table table-striped table-responsive table-hover">
              <thead class="thead-dark">
                <tr>
                    <th scope="col" colspan="3" class = text-center>Add New Product</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td colspan="3">
                        

                    <form action="" method="post">
                        <label for="productTypex">Choose a product type:</label>
                         <select name="productType">
                            <option value="none" selected disabled hidden>
                                 Select an Option
                            </option>
                            <option value="Dairy">Dairy</option>
                            <option value="FV" >Fruits and Vegetables</option>
                            <option value="Meat" >Meat</option>
                            <option value="Seafood" >Seafood</option>
                            <option value="Frozen" >Frozen</option>
                        </select>
                        <input type="submit" name="submit">
                    </form>
                    </td>
               

   
                </tr>
                <tr>';
if(isset($_SESSION['admin']))
if(isset($_POST['productType'])){
    session_start();
    $select1 = $_POST['productType'];
    $_SESSION["productType"] =  $select1;
    switch ($select1) {
        case 'Dairy':
            productDairy();
            break;
        case 'FV':
            productFV();
            break;
        case 'Meat':
            //productMeat();
            break;
        case 'Seafood':
            //productSeafood();
            break;     
        case 'Frozen':
            //productFrozen();
            break;                                
        default:
            echo 'Error';
            break;
    }
}                       
echo '
</tr>
<tr>';
 
    if(isset($_SESSION['admin']))
    if(isset($_POST['productName'])){
        session_start();
        $select1 = $_POST['productName'];
        $_SESSION["productName"] =  $select1;
    switch ($select1) {
        case 'AmericanCheese':
            productDairy();
            productAmericanCheese();
            break;
        case 'Cheddar':
            productDairy();
            productCheddar();
            break;
        case 'Eggs':
            productDairy();
            productEggs();
            break;
        case 'Milk':
            productDairy();
            productMilk();
            break;     
        case 'Yogurt':
            productDairy();
            productYogurt();
            break; 
        case 'Apples':
            productFV();
            productApples();
            break;  
        case 'BlueBerries':
            productFV();
            productBlueBerries();
                break;  
        case 'Broccoli':
            productFV();
            productBroccoli();
                break;  
        case 'Carrots':
            productFV();
            productCarrots();
                break;                                
        case 'Onions':
            productFV();
            productOnions();
                break;  
        default:
            echo 'Error';
            break;
    }
}    

echo '</tr>
</tbody>
</table> ';             

function productDairy(){
    echo '
    <tr>
    <td colspan="3">
    <form action="" method="post">
    <label for="productName">Choose a product type:</label>
     <select name="productName">
     <option value="none" selected disabled hidden>
          Select an Option
      </option>
        <option value="AmericanCheese">AmericanCheese</option>
        <option value="Cheddar">Cheddar</option>
        <option value="Eggs">Eggs</option> 
        <option value="Milk">Milk</option>
        <option value="Yogurt">Yogurt</option>
    </select>
    <input type="submit" name="submit">
    </form>
    </td>
    </tr>
    ';

}


function productAmericanCheese(){
    echo '
    <tr>
    <td>
    <div class="col-md-4">
                <div class="bottomAdditional">
                    <a href="/html/DairyAmericanCheese.html" target="_blank">
                        <img  alt = "Cheese" class="img-fluid"  id="imgAlsoSee" src ="../image/DairyAmericanCheese.jpg" >
                    </a>  
                    <fieldset id="fieldSetSimilarProduct">
                        <legend> Product: American Cheese </legend>
                        <label> Dairy Co. <br/></label>  
                        <br/>
                        <p id="price"> $8.19 </p> 
                    </fieldset>
                </div>
                </td>
                </tr>
                <tr>
                <td>
    <form action=""  name="productQuantity" onsubmit="return checkform()" method="post">
    <label for="productName">Choose Quantity: </label>
        <p><input type="number" id="quantity" name="quantity" min="1" max="5"></p>
    <input type="submit" name="submitQuantity" class="btn btn-success" value="Submit Order">
    </form>
    </td>
    </tr>
    ';

}

function productYogurt(){
    echo '
    <tr>
    <td>
    
    <div class="col-md-4">
    <div class="bottomAdditional">
        <!--Edit HERE-->
        <a href="/html/DairyYogurt.html" target="_blank">
            <!--Edit HERE-->
            <img  alt = "Fresh Lamb" class="img-fluid"  id="imgAlsoSee" src ="../image/DairyYogurt.jpg" >
        </a>  
        <fieldset id="fieldSetSimilarProduct">
            <!--Edit HERE-->
            <legend> Product: Yogurt </legend>
            <!--Edit HERE-->
            <label> Dairy Co. <br/></label>  
            <br/>
            <!--Edit HERE-->
            <p id="price"> $5.99 </p> 
            
        </fieldset>
    </div>
</div>
    </td>   
    </tr>
    <tr>
    <td colspan="3">
    <form action=""  name="productQuantity" onsubmit="return checkform()" method="post">
    <label for="productName">Choose Quantity: </label>
        <p><input type="number" id="quantity" name="quantity" min="1" max="20"></p>
    <input type="submit" name="submitQuantity" class="btn btn-success" value="Submit Order">
    </form>
    </td>
    </tr>
    ';
}
function productCheddar(){
    echo '
    <tr>
    <td>
    <div class="col-md-4">
    <div class="bottomAdditional">
        <a href="/html/DairyCheddar.html" target="_blank">
            <img  alt = "Cheddar" class="img-fluid" id="imgAlsoSee" src ="../image/DairyCheddar.jpg" >
        </a>  
        <fieldset id="fieldSetSimilarProduct">
            <legend> Product: Cheddar </legend>
            <label> Dairy Co. <br/></label>  
            <br/>
            <p id="price"> $4.99 </p> 
        </fieldset>
    </div>
    </div>
    </td>   
    </tr>
    <tr>
    <td colspan="3">
    <form action=""  name="productQuantity" onsubmit="return checkform()" method="post">
    <label for="productName">Choose Quantity: </label>
        <p><input type="number" id="quantity" name="quantity" min="1" max="20"></p>
    <input type="submit" name="submitQuantity" class="btn btn-success" value="Submit Order">
    </form>
    </td>
    </tr>
    ';
}
function productEggs(){
    echo '
    <tr>
    <td>
    <div class="col-md-4">
                <div class="bottomAdditional" >
                    <a href="/html/DairyEggs.html" target="_blank">
                        <img  alt = "Eggs" class="img-fluid" id="imgAlsoSee" src ="../image/DairyEggs.jpg" >
                    </a>  
                    <fieldset id="fieldSetSimilarProduct" >
                        <legend > Product: Eggs </legend>
                        <label> Dairy Co. <br/></label>  
                        <br/>
                        <p id="price"> $2.99 </p> 
                    </fieldset>
                </div>
            </div>
    </td>   
    </tr>
    <tr>
    <td colspan="3">
    <form action=""  name="productQuantity" onsubmit="return checkform()" method="post">
    <label for="productName">Choose Quantity: </label>
        <p><input type="number" id="quantity" name="quantity" min="1" max="20"></p>
    <input type="submit" name="submitQuantity" class="btn btn-success" value="Submit Order">
    </form>
    </td>
    </tr>
    ';
}
function productMilk(){
    echo '
    <tr>
    <td>
    <div class="col-md-4">
                <div class="bottomAdditional">
                    <!--Edit HERE-->
                    <a href="/html/DairyMilk.html" target="_blank">
                        <!--Edit HERE-->
                        <img  alt = "Milk" class="img-fluid"  id="imgAlsoSee" src ="../image/DairyMilk.png" >
                    </a>  
                    <fieldset id="fieldSetSimilarProduct">
                        <!--Edit HERE-->
                        <legend> Product: Milk </legend>
                        <!--Edit HERE-->
                        <label> Dairy Co. <br/></label>  
                        <br/>
                        <!--Edit HERE-->
                        <p id="price"> $4.99 </p>                       
                    </fieldset>
                </div>
            </div>
    </td>   
    </tr>
    <tr>
    <td colspan="3">
    <form action=""  name="productQuantity" onsubmit="return checkform()" method="post">
    <label for="productName">Choose Quantity: </label>
        <p><input type="number" id="quantity" name="quantity" min="1" max="20"></p>
    <input type="submit" name="submitQuantity" class="btn btn-success" value="Submit Order">
    </form>
    </td>
    </tr>
    ';
}


function productFV(){
    echo '
    <tr>
    <td colspan="3">
    <form action="" method="post">
    <label for="productName">Choose a product type:</label>
     <select name="productName">
     <option value="none" selected disabled hidden>
          Select an Option
      </option>
        <option value="Apples">Apples</option>
        <option value="BlueBerries">BlueBerries</option>
        <option value="Broccoli">Broccoli</option> 
        <option value="Carrots">Carrots</option>
        <option value="Onions">Onions</option>
    </select>
    <input type="submit" name="submit">
    </form>
    </td>
    </tr>
    ';
}

function productApples(){
    echo '
    <tr>
    <td>
    <div class="col-md-4">
                <div class="bottomAdditional">
                    <a href="/html/FVApples.html" target="_blank">
                        <img  alt = "Fresh Lamb" class="img-fluid" id="imgAlsoSee" src ="../image/FVApples.jpg" >
                    </a>  
                    <fieldset id="fieldSetSimilarProduct">
                        <legend> Product: Apples </legend>
                        <label> Fruits&Veg Co. <br/></label>  
                        <br/>
                        <p id="price"> $1.99 </p> 
                    </fieldset>
                </div>
            </div>
    </td>   
    </tr>
    <tr>
    <td colspan="3">
    <form action=""  name="productQuantity" onsubmit="return checkform()" method="post">
    <label for="productName">Choose Quantity: </label>
        <p><input type="number" id="quantity" name="quantity" min="1" max="20"></p>
    <input type="submit" name="submitQuantity" class="btn btn-success" value="Submit Order">
    </form>
    </td>
    </tr>
    ';
}
function productBlueBerries(){
    echo '
    <tr>
    <td>
    <div class="col-md-4">
                <div class="bottomAdditional">
                    <!--Edit HERE-->
                    <a href="/html/FVBlueBerries.html" target="_blank">
                        <!--Edit HERE-->
                        <img  alt = "Fresh Lamb" class="img-fluid"  id="imgAlsoSee" src ="../image/FVBlueBerries.jpg" >
                    </a>  
                    <fieldset id="fieldSetSimilarProduct">
                        <!--Edit HERE-->
                        <legend> Product: BlueBerries </legend>
                        <!--Edit HERE-->
                        <label> Fruits&Veg Co. <br/></label>  
                        <br/>
                        <!--Edit HERE-->
                        <p id="price"> $3.99 </p> 
                    </fieldset>
                </div>
            </div>
    </td>   
    </tr>
    <tr>
    <td colspan="3">
    <form action=""  name="productQuantity" onsubmit="return checkform()" method="post">
    <label for="productName">Choose Quantity: </label>
        <p><input type="number" id="quantity" name="quantity" min="1" max="20"></p>
    <input type="submit" name="submitQuantity" class="btn btn-success" value="Submit Order">
    </form>
    </td>
    </tr>
    ';
}
function productOnions(){
    echo '
    <tr>
    <td>
    <<div class="col-md-4">
    <div class="bottomAdditional">
        <!--Edit HERE-->
        <a href="/html/FVOnions.html" target="_blank">
            <!--Edit HERE-->
            <img  alt = "Fresh Lamb" class="img-fluid"  id="imgAlsoSee" src ="../image/FVOnions.jpg" >
        </a>  
        <fieldset id="fieldSetSimilarProduct">
            <!--Edit HERE-->
            <legend> Product: Onions </legend>
            <!--Edit HERE-->
            <label> Fruits&Veg Co. <br/></label>  
            <br/>
            <!--Edit HERE-->
            <p id="price"> $6.99 </p> 
        </fieldset>
    </div>
</div>
    </td>   
    </tr>
    <tr>
    <td colspan="3">
    <form action=""  name="productQuantity" onsubmit="return checkform()" method="post">
    <label for="productName">Choose Quantity: </label>
        <p><input type="number" id="quantity" name="quantity" min="1" max="20"></p>
    <input type="submit" name="submitQuantity" class="btn btn-success" value="Submit Order">
    </form>
    </td>
    </tr>
    ';
}
function productCarrots(){
    echo '
    <tr>
    <td>
    <div class="col-md-4">
                <div class="bottomAdditional" >
                    <a href="/html/FVCarrots.html" target="_blank">
                        <img  alt = "Fresh Lamb" class="img-fluid" id="imgAlsoSee" src ="../image/FVCarrots.jpg" >
                    </a>  
                    <fieldset id="fieldSetSimilarProduct" >
                        <legend > Product: Carrots </legend>
                        <label> Fruits&Veg Co. <br/></label>  
                        <br/>
                        <p id="price"> $3.99 </p> 
                    </fieldset>
                </div>
            </div>
    </td>   
    </tr>
    <tr>
    <td colspan="3">
    <form action=""  name="productQuantity" onsubmit="return checkform()" method="post">
    <label for="productName">Choose Quantity: </label>
        <p><input type="number" id="quantity" name="quantity" min="1" max="20"></p>
    <input type="submit" name="submitQuantity" class="btn btn-success" value="Submit Order">
    </form>
    </td>
    </tr>
    ';
}
function productBroccoli(){
    echo '
    <tr>
    <td>
    <div class="col-md-4">
                <div class="bottomAdditional">
                    <a href="/html/FVBroccoli.html" target="_blank">
                        <img  alt = "Fresh Lamb" class="img-fluid"  id="imgAlsoSee" src ="../image/FVBroccoli.jpg" >
                    </a>  
                    <fieldset id="fieldSetSimilarProduct">
                        <legend> Product: Broccoli </legend>
                        <label> Fruits&Veg Co. <br/></label>  
                        <br/>
                        <p id="price"> $3.99 </p> 
                    </fieldset>
                </div>
            </div>
    </td>   
    </tr>
    <tr>
    <td colspan="3">
    <form action=""  name="productQuantity" onsubmit="return checkform()" method="post">
    <label for="productName">Choose Quantity: </label>
        <p><input type="number" id="quantity" name="quantity" min="1" max="20"></p>
    <input type="submit" name="submitQuantity" class="btn btn-success" value="Submit Order">
    </form>
    </td>
    </tr>
    ';
}







function submitOrder(){
    if(isset($_POST['submitQuantity']))
        if(isset($_POST['quantity']))
            if($_POST['quantity']>=1) {
                session_start();
                echo "<meta http-equiv='refresh' content='0'>";    
                 $submitQuantity = $_POST['quantity'];

                 if(isset( $_SESSION['counter'])) {
                    $_SESSION['counter'] += 1;
                 }else {
                    $_SESSION['counter'] = 1;
                 }
                 $msg = "<div id:='submitOrder'> You have visited this page ".  $_SESSION['counter']."</div>";
                 //echo ( $msg );
                 
                 return $submitQuantity;                 
    }
    }
?>
