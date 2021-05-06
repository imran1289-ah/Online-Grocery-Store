/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "600px";
  
    }
    
    /* Set the width of the side navigation to 0 */
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }

    //Function to add salmon in normal page
    function addnormalsalmon(){
      var cart = document.getElementById("dropDownCart");
      var newrow = document.createElement("tr");
      newrow.id="newitemnormalsalmon";
      var select = document.createElement("td");
      var item = document.createElement("td");
      var price = document.createElement("td");
      price.id = "pricenormalsalmon";
      var quantity = document.createElement("td");
      var weight = document.createElement("td");
      weight.id = "weightnormalsalmon";
      var deleteitem = document.createElement("td");
      var additems = document.createElement("button");
      additems.textContent = "+";
      additems.style.width="40px";
      additems.style.height="40px";
      additems.style.backgroundColor="black";
      additems.style.color="white";
      additems.onclick= function(){
        document.getElementById("displaynormalsalmon").stepUp(1);
      }
      var displayquantity = document.createElement("input");
     displayquantity.id="displaynormalsalmon";
     displayquantity.type="number";
    var quantity1 = document.getElementById("one");
    var quantity2 = document.getElementById("two");
    var quantity3 = document.getElementById("three")
    if (quantity1.checked){
      displayquantity.value="1";
    }
    else if (quantity2.checked){
      displayquantity.value="2";
    }
    else if (quantity3.checked) {
      displayquantity.value="3";
    }
  
    displayquantity.min ="0";
     displayquantity.style.width="50px";
     displayquantity.style.height="40px";
     var removeitems= document.createElement("button");
     removeitems.textContent="-";
     removeitems.style.width="40px";
     removeitems.style.height="40px";
     removeitems.style.backgroundColor="black";
     removeitems.style.color="white";
     removeitems.onclick=function(){
       document.getElementById("displaynormalsalmon").stepDown(1);
     }
   
     var removeitembutton = document.createElement("button");
     removeitembutton.textContent="Remove";
     removeitembutton.style.width="100px";
     removeitembutton.style.height="40px";
     removeitembutton.style.color="white";
     removeitembutton.style.backgroundColor="blue";
     removeitembutton.onclick=function(target){
         var row = document.getElementById("newitemnormalsalmon");
         row.remove();
         var counter = 1;
       }
   
     var selectbox = document.createElement("input");
     selectbox.id = "checkboxfornormalsalmon"
     selectbox.type="checkbox";
     selectbox.style.width="50px";
     selectbox.style.height="40px";
     
      var whole = document.getElementById("whole");
      var sliced = document.getElementById("sliced");
      var cooked = document.getElementById("cooked");
  
      if (whole.checked){
        item.textContent="Whole Salmon";
        weight.value="4000"
        weight.textContent="4000g/each"
      }
      else if (sliced.checked){
        item.textContent="Sliced Salmon";
        weight.value="1200"
        weight.textContent="1200g/each"
      }
      else if (cooked.checked){
        item.textContent="Cooked Salmon"
        weight.value="500"
        weight.textContent="500g/each"
      }
    
     
      price.textContent = " 3.99$";
      price.value="3.99";
   
    
     
   
     select.appendChild(selectbox);
     quantity.appendChild(additems);
     quantity.appendChild(displayquantity);
     quantity.appendChild(removeitems);
     deleteitem.appendChild(removeitembutton);
    
     
     newrow.appendChild(select);
     newrow.appendChild(item);
     newrow.appendChild(price);
     newrow.appendChild(quantity);
     newrow.appendChild(weight);
     newrow.appendChild(deleteitem);
     
     
     cart.appendChild(newrow);
      
     
  
    }
    
  

  //Function to add sliced salmon in detailed page
  function addslicedsalmon(){
  
    
    var cart = document.getElementById("dropDownCart");
     
  
     var newrow = document.createElement("tr");
     newrow.id="newitemslicedsalmon";
     var select = document.createElement("td");
     var item = document.createElement("td");
     var price = document.createElement("td");
     price.id = "priceslicedsalmon";
     var quantity = document.createElement("td");
     var weight = document.createElement("td");
     weight.id = "weightslicedsalmon";
     var deleteitem = document.createElement("td");
     var additems = document.createElement("button");
     additems.textContent = "+";
     additems.style.width="40px";
     additems.style.height="40px";
     additems.style.backgroundColor="black";
     additems.style.color="white";
     additems.onclick= function(){
       document.getElementById("displayslicedsalmon").stepUp(1);
     }
     var displayquantity = document.createElement("input");
    displayquantity.id="displayslicedsalmon";
    displayquantity.type="number";
    displayquantity.value="1";
    displayquantity.min ="0";
    displayquantity.style.width="50px";
    displayquantity.style.height="40px";
    var removeitems= document.createElement("button");
    removeitems.textContent="-";
    removeitems.style.width="40px";
    removeitems.style.height="40px";
    removeitems.style.backgroundColor="black";
    removeitems.style.color="white";
    removeitems.onclick=function(){
      document.getElementById("displayslicedsalmon").stepDown(1);
    }
  
    var removeitembutton = document.createElement("button");
    removeitembutton.textContent="Remove";
    removeitembutton.style.width="100px";
    removeitembutton.style.height="40px";
    removeitembutton.style.color="white";
    removeitembutton.style.backgroundColor="blue";
    removeitembutton.onclick=function(target){
        var row = document.getElementById("newitemslicedsalmon");
        row.remove();
        var counter = 1;
      }
  
    var selectbox = document.createElement("input");
    selectbox.id = "checkboxforslicedsalmon"
    selectbox.type="checkbox";
    selectbox.style.width="50px";
    selectbox.style.height="40px";
    
  
   
    item.textContent = "Sliced Salmon";
     price.textContent = " 3.99$";
     price.value="3.99";
  
    weight.textContent="1.2kg/each";
    weight.value = "1200";
  
    select.appendChild(selectbox);
    quantity.appendChild(additems);
    quantity.appendChild(displayquantity);
    quantity.appendChild(removeitems);
    deleteitem.appendChild(removeitembutton);
   
    
    newrow.appendChild(select);
    newrow.appendChild(item);
    newrow.appendChild(price);
    newrow.appendChild(quantity);
    newrow.appendChild(weight);
    newrow.appendChild(deleteitem);
    
    
    cart.appendChild(newrow);
    
}

//Function to add whole salmon in detailed page
function addwholesalmon(){
    var cart = document.getElementById("dropDownCart");
    var content = document.getElementById("content");
  
    var newrow = document.createElement("tr");
    newrow.id="newitemwholesalmon";
    var select = document.createElement("td");
    var item = document.createElement("td");
    var price = document.createElement("td");
    price.id="priceofwholesalmon";
    var quantity = document.createElement("td");
    quantity.id="quantityofwholesalmon";
    var weight = document.createElement("td");
    weight.id="weightofwholesalmon";
    var deleteitem = document.createElement("td");
    var additems = document.createElement("button");
    additems.textContent = "+";
    additems.style.width="40px";
    additems.style.height="40px";
    additems.style.backgroundColor="black";
    additems.style.color="white";
    additems.onclick= function(){
      document.getElementById("displaywholesalmon").stepUp(1);
    }
    var displayquantity = document.createElement("input");
   displayquantity.id="displaywholesalmon";
   displayquantity.type="number";
   displayquantity.value="1";
   displayquantity.min ="0";
   displayquantity.style.width="50px";
   displayquantity.style.height="40px";
   var removeitems= document.createElement("button");
   removeitems.textContent="-";
   removeitems.style.width="40px";
   removeitems.style.height="40px";
   removeitems.style.backgroundColor="black";
   removeitems.style.color="white";
   removeitems.onclick=function(){
     document.getElementById("displaywholesalmon").stepDown(1);
   }
  
   var removeitembutton = document.createElement("button");
   removeitembutton.textContent="Remove";
   removeitembutton.style.width="100px";
   removeitembutton.style.height="40px";
   removeitembutton.style.color="white";
   removeitembutton.style.backgroundColor="blue";
   removeitembutton.onclick=function(target){
       var row = document.getElementById("newitemwholesalmon");
       row.remove();
  
       
  
   }
  
   var selectbox = document.createElement("input");
   selectbox.id="selectboxwholesalmon";
   selectbox.type="checkbox";
   selectbox.style.width="50px";
   selectbox.style.height="40px";
   
  
  
   item.textContent = "Whole Salmon";
    price.textContent = " 3.99$";
    price.value="3.99";
  
   weight.textContent="4kg/each";
   weight.value="4000";
  
   select.appendChild(selectbox);
   quantity.appendChild(additems);
   quantity.appendChild(displayquantity);
   quantity.appendChild(removeitems);
   deleteitem.appendChild(removeitembutton);
  
   
   newrow.appendChild(select);
   newrow.appendChild(item);
   newrow.appendChild(price);
   newrow.appendChild(quantity);
   newrow.appendChild(weight);
   newrow.appendChild(deleteitem);
   
   
   cart.appendChild(newrow);
  
  
  }

//Function to add cooked salmon in detailed page
function addcookedsalmon(){
    var cart = document.getElementById("dropDownCart");
    var content = document.getElementById("content");
    
  
    var newrow = document.createElement("tr");
    newrow.id="newitemcookedsalmon";
    var select = document.createElement("td");
    var item = document.createElement("td");
    var price = document.createElement("td");
    price.id = "pricecookedsalmon";
    var quantity = document.createElement("td");
    var weight = document.createElement("td");
    weight.id="weightcookedsalmon";
    var deleteitem = document.createElement("td");
    var additems = document.createElement("button");
    additems.textContent = "+";
    additems.style.width="40px";
    additems.style.height="40px";
    additems.style.backgroundColor="black";
    additems.style.color="white";
    additems.onclick= function(){
      document.getElementById("displaycookedsalmon").stepUp(1);
    }
    var displayquantity = document.createElement("input");
   displayquantity.id="displaycookedsalmon";
   displayquantity.type="number";
   displayquantity.value="1";
   displayquantity.min ="0";
   displayquantity.style.width="50px";
   displayquantity.style.height="40px";
   var removeitems= document.createElement("button");
   removeitems.textContent="-";
   removeitems.style.width="40px";
   removeitems.style.height="40px";
   removeitems.style.backgroundColor="black";
   removeitems.style.color="white";
   removeitems.onclick=function(){
     document.getElementById("displaycookedsalmon").stepDown(1);
   }
  
   var removeitembutton = document.createElement("button");
   removeitembutton.textContent="Remove";
   removeitembutton.style.width="100px";
   removeitembutton.style.height="40px";
   removeitembutton.style.color="white";
   removeitembutton.style.backgroundColor="blue";
   removeitembutton.onclick=function(target){
       var row = document.getElementById("newitemcookedsalmon");
       row.remove();
  
       
  
   }
  
   var selectbox = document.createElement("input");
   selectbox.id="checkboxcookedsalmon";
   selectbox.type="checkbox";
   selectbox.style.width="50px";
   selectbox.style.height="40px";
   
  
  
   item.textContent = "Cooked Salmon";
    price.textContent = " 3.99$";
    price.value="3.99";
  
   weight.textContent="500g/each";
   weight.value="500";
  
   select.appendChild(selectbox);
   quantity.appendChild(additems);
   quantity.appendChild(displayquantity);
   quantity.appendChild(removeitems);
   deleteitem.appendChild(removeitembutton);
  
   
   newrow.appendChild(select);
   newrow.appendChild(item);
   newrow.appendChild(price);
   newrow.appendChild(quantity);
   newrow.appendChild(weight);
   newrow.appendChild(deleteitem);
   
   
   cart.appendChild(newrow);
}

//Function to display price and all info in cart
function displaypriceofsalmon(){
    subtotal=0;
    weight=0;
    quantity=0;
  
    var selectboxofsalmon = document.getElementById("selectboxwholesalmon");
    var rowwholeosalmon = document.getElementById("newitemwholesalmon");
    //https://thisinterestsme.com/check-element-exists-javascript/
    if (typeof(rowwholeosalmon) !=undefined && rowwholeosalmon !=null){
    if (selectboxofsalmon.checked){
      subtotal = subtotal + parseFloat(document.getElementById("priceofwholesalmon").value * document.getElementById("displaywholesalmon").value);
      quantity = quantity + parseFloat(document.getElementById("displaywholesalmon").value);
      weight = weight + parseFloat(document.getElementById("weightofwholesalmon").value * (document.getElementById("displaywholesalmon").value) );
    }
  }
    
  
    var selectboxofslicedsalmon = document.getElementById("checkboxforslicedsalmon");
    var rowslicedsalmon = document.getElementById("newitemslicedsalmon");
  
    if (typeof(rowslicedsalmon) != undefined && rowslicedsalmon != null){
    if (selectboxofslicedsalmon.checked){
      subtotal = subtotal + parseFloat(document.getElementById("priceslicedsalmon").value * document.getElementById("displayslicedsalmon").value);
      quantity = quantity + parseFloat(document.getElementById("displayslicedsalmon").value);
      weight = weight + parseFloat(document.getElementById("weightslicedsalmon").value * (document.getElementById("displayslicedsalmon").value));
    }
  }
   
  
  
   
    
    var selectboxofcookedsalmon = document.getElementById("checkboxcookedsalmon");
    var rowscookedsalmon = document.getElementById("newitemcookedsalmon");
    if (typeof(rowscookedsalmon) != undefined && rowscookedsalmon != null){
    if(selectboxofcookedsalmon.checked){
      subtotal = subtotal + parseFloat(document.getElementById("pricecookedsalmon").value * document.getElementById("displaycookedsalmon").value);
      quantity = quantity + parseFloat(document.getElementById("displaycookedsalmon").value);
      weight = weight + parseFloat(document.getElementById("weightcookedsalmon").value * (document.getElementById("displaycookedsalmon").value));
    }
  }

  var selectboxofnormalsalmon = document.getElementById("checkboxfornormalsalmon");
  var rownormalsalmon = document.getElementById("newitemnormalsalmon");
  if (typeof(rownormalsalmon) !=undefined && rownormalsalmon != null){
    if(selectboxofnormalsalmon.checked){
      subtotal = subtotal + parseFloat(document.getElementById("pricenormalsalmon").value * document.getElementById("displaynormalsalmon").value);
      quantity = quantity + parseFloat(document.getElementById("displaynormalsalmon").value);
      weight = weight + parseFloat(document.getElementById("weightnormalsalmon").value * (document.getElementById("displaynormalsalmon").value));

    }
    
  }
   
  
    document.getElementById("displayinfo").innerHTML ="The total price is "+subtotal+". The total quanity is "+quantity+" items. The total weight is  "+weight + "g";
    
}
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  