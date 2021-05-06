/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "600px";
  
    }

    
    /* Set the width of the side navigation to 0 */
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
  
  //Function to add shrimp in normal page
  function addnormalshrimp(){
    var cart = document.getElementById("dropDownCart");
     var newrow = document.createElement("tr");
    newrow.id="newitemnormalshrimp";
    var select = document.createElement("td");
    var item = document.createElement("td");
    var price = document.createElement("td");
    price.id = "pricenormalshrimp";
    var quantity = document.createElement("td");
    var weight = document.createElement("td");
    weight.id = "weightnormalshrimp";
    var deleteitem = document.createElement("td");
    var additems = document.createElement("button");
    additems.textContent = "+";
    additems.style.width="40px";
    additems.style.height="40px";
    additems.style.backgroundColor="black";
    additems.style.color="white";
    additems.onclick= function(){
      document.getElementById("displaynormalshrimp").stepUp(1);
    }
    var displayquantity = document.createElement("input");
   displayquantity.id="displaynormalshrimp";
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
     document.getElementById("displaynormalshrimp").stepDown(1);
   }
 
   var removeitembutton = document.createElement("button");
   removeitembutton.textContent="Remove";
   removeitembutton.style.width="100px";
   removeitembutton.style.height="40px";
   removeitembutton.style.color="white";
   removeitembutton.style.backgroundColor="blue";
   removeitembutton.onclick=function(target){
       var row = document.getElementById("newitemnormalshrimp");
       row.remove();
       var counter = 1;
     }
 
   var selectbox = document.createElement("input");
   selectbox.id = "checkboxfornormalshrimp"
   selectbox.type="checkbox";
   selectbox.style.width="50px";
   selectbox.style.height="40px";
   
    var whole = document.getElementById("whole");
    var sliced = document.getElementById("sliced");
    var cooked = document.getElementById("cooked");

    if (whole.checked){
      item.textContent="Whole Shrimp";
      weight.textContent="500g/each";
       weight.value = "500";
     
      
      
    }
    else if (sliced.checked){
      item.textContent="Sliced Shrimp";
      weight.textContent="550g/each";
   weight.value = "550";
      
    }
    else if (cooked.checked){
      item.textContent="Cooked Shrimp";
      weight.textContent="500g/each";
   weight.value = "500";
      
    }
  
   
    price.textContent = " 5.99$";
    price.value="5.99";
 
   
 
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
  
//Function add sliced shrimp in detailed page  
function addslicedshrimp(){
  
    
    var cart = document.getElementById("dropDownCart");
     
  
     var newrow = document.createElement("tr");
     newrow.id="newitemslicedshrimp";
     var select = document.createElement("td");
     var item = document.createElement("td");
     var price = document.createElement("td");
     price.id = "priceslicedshrimp";
     var quantity = document.createElement("td");
     var weight = document.createElement("td");
     weight.id = "weightslicedshrimp";
     var deleteitem = document.createElement("td");
     var additems = document.createElement("button");
     additems.textContent = "+";
     additems.style.width="40px";
     additems.style.height="40px";
     additems.style.backgroundColor="black";
     additems.style.color="white";
     additems.onclick= function(){
       document.getElementById("displayslicedshrimp").stepUp(1);
     }
     var displayquantity = document.createElement("input");
    displayquantity.id="displayslicedshrimp";
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
      document.getElementById("displayslicedshrimp").stepDown(1);
    }
  
    var removeitembutton = document.createElement("button");
    removeitembutton.textContent="Remove";
    removeitembutton.style.width="100px";
    removeitembutton.style.height="40px";
    removeitembutton.style.color="white";
    removeitembutton.style.backgroundColor="blue";
    removeitembutton.onclick=function(target){
        var row = document.getElementById("newitemslicedshrimp");
        row.remove();
        var counter = 1;
      }
  
    var selectbox = document.createElement("input");
    selectbox.id = "checkboxforslicedshrimp"
    selectbox.type="checkbox";
    selectbox.style.width="50px";
    selectbox.style.height="40px";
    
  
   
    item.textContent = "Sliced Shrimp";
     price.textContent = " 5.99$";
     price.value="5.99";
  
    weight.textContent="550g/each";
    weight.value = "550";
  
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
  
//Function to add whole shirmp in detailed page
function addwholeshrimp(){
    var cart = document.getElementById("dropDownCart");
    var content = document.getElementById("content");
  
    var newrow = document.createElement("tr");
    newrow.id="newitemwholeshrimp";
    var select = document.createElement("td");
    var item = document.createElement("td");
    var price = document.createElement("td");
    price.id="priceofwholeshrimp";
    var quantity = document.createElement("td");
    quantity.id="quantityofwholeshrimp";
    var weight = document.createElement("td");
    weight.id="weightofwholeshrimp";
    var deleteitem = document.createElement("td");
    var additems = document.createElement("button");
    additems.textContent = "+";
    additems.style.width="40px";
    additems.style.height="40px";
    additems.style.backgroundColor="black";
    additems.style.color="white";
    additems.onclick= function(){
      document.getElementById("displaywholeshrimp").stepUp(1);
    }
    var displayquantity = document.createElement("input");
   displayquantity.id="displaywholeshrimp";
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
     document.getElementById("displaywholeshrimp").stepDown(1);
   }
  
   var removeitembutton = document.createElement("button");
   removeitembutton.textContent="Remove";
   removeitembutton.style.width="100px";
   removeitembutton.style.height="40px";
   removeitembutton.style.color="white";
   removeitembutton.style.backgroundColor="blue";
   removeitembutton.onclick=function(target){
       var row = document.getElementById("newitemwholeshrimp");
       row.remove();
  
       
  
   }
  
   var selectbox = document.createElement("input");
   selectbox.id="selectboxwholeshrimp";
   selectbox.type="checkbox";
   selectbox.style.width="50px";
   selectbox.style.height="40px";
   
  
  
   item.textContent = "Whole Shrimp";
    price.textContent = " 5.99$";
    price.value="5.99";
  
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
  
  //Function to add cooked shrimp in detailed page
  function addcookedshrimp(){
    var cart = document.getElementById("dropDownCart");
    var content = document.getElementById("content");
    
  
    var newrow = document.createElement("tr");
    newrow.id="newitemcookedshrimp";
    var select = document.createElement("td");
    var item = document.createElement("td");
    var price = document.createElement("td");
    price.id = "pricecookedshrimp";
    var quantity = document.createElement("td");
    var weight = document.createElement("td");
    weight.id="weightcookedshrimp";
    var deleteitem = document.createElement("td");
    var additems = document.createElement("button");
    additems.textContent = "+";
    additems.style.width="40px";
    additems.style.height="40px";
    additems.style.backgroundColor="black";
    additems.style.color="white";
    additems.onclick= function(){
      document.getElementById("displaycookedshrimp").stepUp(1);
    }
    var displayquantity = document.createElement("input");
   displayquantity.id="displaycookedshrimp";
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
     document.getElementById("displaycookedshrimp").stepDown(1);
   }
  
   var removeitembutton = document.createElement("button");
   removeitembutton.textContent="Remove";
   removeitembutton.style.width="100px";
   removeitembutton.style.height="40px";
   removeitembutton.style.color="white";
   removeitembutton.style.backgroundColor="blue";
   removeitembutton.onclick=function(target){
       var row = document.getElementById("newitemcookedshrimp");
       row.remove();
  
       
  
   }
  
   var selectbox = document.createElement("input");
   selectbox.id="checkboxcookedshrimp";
   selectbox.type="checkbox";
   selectbox.style.width="50px";
   selectbox.style.height="40px";
   
  
  
   item.textContent = "Cooked Shrimp";
    price.textContent = " 5.99$";
    price.value="5.99";
  
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
  
  //Function to display price and all info in the cart
  function displaypriceofshrimp(){
    subtotal=0;
    weight=0;
    quantity=0;
  
    var selectboxofshrimp = document.getElementById("selectboxwholeshrimp");
    var rowwholeshrimp = document.getElementById("newitemwholeshrimp");
    //https://thisinterestsme.com/check-element-exists-javascript/
    if (typeof(rowwholeshrimp) !=undefined && rowwholeshrimp  !=null){
    if (selectboxofshrimp.checked){
      subtotal = subtotal + parseFloat(document.getElementById("priceofwholeshrimp").value * document.getElementById("displaywholeshrimp").value);
      quantity = quantity + parseFloat(document.getElementById("displaywholeshrimp").value);
      weight = weight + parseFloat(document.getElementById("weightofwholeshrimp").value * (document.getElementById("displaywholeshrimp").value) );
    }
    }
    
  
    var selectboxofslicedshrimp = document.getElementById("checkboxforslicedshrimp");
    var rowslicedshrimp = document.getElementById("newitemslicedshrimp");
  
    if (typeof(rowslicedshrimp) != undefined && rowslicedshrimp != null){
    if (selectboxofslicedshrimp.checked){
      subtotal = subtotal + parseFloat(document.getElementById("priceslicedshrimp").value * document.getElementById("displayslicedshrimp").value);
      quantity = quantity + parseFloat(document.getElementById("displayslicedshrimp").value);
      weight = weight + parseFloat(document.getElementById("weightslicedshrimp").value * (document.getElementById("displayslicedshrimp").value));
    }
    }
   
    var selectboxofcookedshrimp = document.getElementById("checkboxcookedshrimp");
    var rowscookedshrimp = document.getElementById("newitemcookedshrimp");
    if (typeof(rowscookedshrimp) != undefined && rowscookedshrimp != null){
    if(selectboxofcookedshrimp.checked){
      subtotal = subtotal + parseFloat(document.getElementById("pricecookedshrimp").value * document.getElementById("displaycookedshrimp").value);
      quantity = quantity + parseFloat(document.getElementById("displaycookedshrimp").value);
      weight = weight + parseFloat(document.getElementById("weightcookedshrimp").value * (document.getElementById("displaycookedshrimp").value));
    }
    }

    var selectboxofnormalshrimp = document.getElementById("checkboxfornormalshrimp");
    var rownormalshrimp = document.getElementById("newitemnormalshrimp");
    if (typeof(rownormalshrimp) !=undefined && rownormalshrimp != null){
    if(selectboxofnormalshrimp.checked){
      subtotal = subtotal + parseFloat(document.getElementById("pricenormalshrimp").value * document.getElementById("displaynormalshrimp").value);
      quantity = quantity + parseFloat(document.getElementById("displaynormalshrimp").value);
      weight = weight + parseFloat(document.getElementById("weightnormalshrimp").value * (document.getElementById("displaynormalshrimp").value));

    }
    }
   document.getElementById("displayinfo").innerHTML ="The total price is "+subtotal+". The total quanity is "+quantity+" items. The total weight is  "+weight + "g";
    
}
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  