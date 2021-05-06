/* Set the width of the side navigation to 250px */
function openNav() {
  document.getElementById("mySidenav").style.width = "600px";

  }
  
  /* Set the width of the side navigation to 0 */
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }

  //Function to add octupus in normal page
function addnormaloctupus(){
    var cart = document.getElementById("dropDownCart");
     
  
    var newrow = document.createElement("tr");
    newrow.id="newitemnormaloctupus";
    var select = document.createElement("td");
    var item = document.createElement("td");
    var price = document.createElement("td");
    price.id = "pricenormaloctupus";
    var quantity = document.createElement("td");
    var weight = document.createElement("td");
    weight.id = "weightnormaloctupus";
    var deleteitem = document.createElement("td");
    var additems = document.createElement("button");
    additems.textContent = "+";
    additems.style.width="40px";
    additems.style.height="40px";
    additems.style.backgroundColor="black";
    additems.style.color="white";
    additems.onclick= function(){
      document.getElementById("displaynormaloctupus").stepUp(1);
    }
    var displayquantity = document.createElement("input");
   displayquantity.id="displaynormaloctupus";
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
     document.getElementById("displaynormaloctupus").stepDown(1);
   }
 
   var removeitembutton = document.createElement("button");
   removeitembutton.textContent="Remove";
   removeitembutton.style.width="100px";
   removeitembutton.style.height="40px";
   removeitembutton.style.color="white";
   removeitembutton.style.backgroundColor="blue";
   removeitembutton.onclick=function(target){
       var row = document.getElementById("newitemnormaloctupus");
       row.remove();
       var counter = 1;
     }
 
   var selectbox = document.createElement("input");
   selectbox.id = "checkboxfornormaloctupus"
   selectbox.type="checkbox";
   selectbox.style.width="50px";
   selectbox.style.height="40px";
   
    var whole = document.getElementById("whole");
    var sliced = document.getElementById("sliced");
    var cooked = document.getElementById("cooked");

    if (whole.checked){
      item.textContent="Whole Octupus";
      weight.textContent="255g/each"
      weight.value="255";
    }
    else if (sliced.checked){
      item.textContent="Sliced Octupus";
      weight.textContent="255g/each"
      weight.value="255";
    }
    else if (cooked.checked){
      item.textContent="Cooked Octupus";
      weight.textContent="500g/each";
      weight.value="500";

    }
  
   
    price.textContent = " 16.99$";
    price.value="16.99";
 
   
 
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
  
//Function to add sliced octupus in detailed page
function addslicedoctupus(){

  
  var cart = document.getElementById("dropDownCart");
   

   var newrow = document.createElement("tr");
   newrow.id="newitemslicedoctupus";
   var select = document.createElement("td");
   var item = document.createElement("td");
   var price = document.createElement("td");
   price.id = "priceslicedoctupus";
   var quantity = document.createElement("td");
   var weight = document.createElement("td");
   weight.id = "weightslicedoctupus";
   var deleteitem = document.createElement("td");
   var additems = document.createElement("button");
   additems.textContent = "+";
   additems.style.width="40px";
   additems.style.height="40px";
   additems.style.backgroundColor="black";
   additems.style.color="white";
   additems.onclick= function(){
     document.getElementById("display1").stepUp(1);
   }
   var displayquantity = document.createElement("input");
  displayquantity.id="display1";
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
    document.getElementById("display1").stepDown(1);
  }

  var removeitembutton = document.createElement("button");
  removeitembutton.textContent="Remove";
  removeitembutton.style.width="100px";
  removeitembutton.style.height="40px";
  removeitembutton.style.color="white";
  removeitembutton.style.backgroundColor="blue";
  removeitembutton.onclick=function(target){
      var row = document.getElementById("newitemslicedoctupus");
      row.remove();
      var counter = 1;
    }

  var selectbox = document.createElement("input");
  selectbox.id = "checkboxforslicedoctupus"
  selectbox.type="checkbox";
  selectbox.style.width="50px";
  selectbox.style.height="40px";
  

 
  item.textContent = "Sliced Octupus";
   price.textContent = " 16.99$";
   price.value="16.99";

  weight.textContent="255g/each";
  weight.value = "255";

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

//Function to add whole octupus in detailed page
function addwholeoctupus(){
  var cart = document.getElementById("dropDownCart");
  var content = document.getElementById("content");

  var newrow = document.createElement("tr");
  newrow.id="newitem";
  var select = document.createElement("td");
  var item = document.createElement("td");
  var price = document.createElement("td");
  price.id="priceofoctupus";
  var quantity = document.createElement("td");
  quantity.id="quantityofoctupus";
  var weight = document.createElement("td");
  weight.id="weightofoctupus";
  var deleteitem = document.createElement("td");
  var additems = document.createElement("button");
  additems.textContent = "+";
  additems.style.width="40px";
  additems.style.height="40px";
  additems.style.backgroundColor="black";
  additems.style.color="white";
  additems.onclick= function(){
    document.getElementById("display").stepUp(1);
  }
  var displayquantity = document.createElement("input");
 displayquantity.id="display";
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
   document.getElementById("display").stepDown(1);
 }

 var removeitembutton = document.createElement("button");
 removeitembutton.textContent="Remove";
 removeitembutton.style.width="100px";
 removeitembutton.style.height="40px";
 removeitembutton.style.color="white";
 removeitembutton.style.backgroundColor="blue";
 removeitembutton.onclick=function(target){
     var row = document.getElementById("newitem");
     row.remove();

     

 }

 var selectbox = document.createElement("input");
 selectbox.id="selectboxwholeoctupus";
 selectbox.type="checkbox";
 selectbox.style.width="50px";
 selectbox.style.height="40px";
 


 item.textContent = "Whole Octupus";
  price.textContent = " 16.99$";
  price.value="16.99";

 weight.textContent="255g/each";
 weight.value="255";

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

//Function to add cooked octupus in detailed page
function addcookedoctupus(){
  var cart = document.getElementById("dropDownCart");
  var content = document.getElementById("content");
  

  var newrow = document.createElement("tr");
  newrow.id="newitemcookedoctupus";
  var select = document.createElement("td");
  var item = document.createElement("td");
  var price = document.createElement("td");
  price.id = "pricecookedoctupus";
  var quantity = document.createElement("td");
  var weight = document.createElement("td");
  weight.id="weightcookedoctupus";
  var deleteitem = document.createElement("td");
  var additems = document.createElement("button");
  additems.textContent = "+";
  additems.style.width="40px";
  additems.style.height="40px";
  additems.style.backgroundColor="black";
  additems.style.color="white";
  additems.onclick= function(){
    document.getElementById("display2").stepUp(1);
  }
  var displayquantity = document.createElement("input");
 displayquantity.id="display2";
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
   document.getElementById("display2").stepDown(1);
 }

 var removeitembutton = document.createElement("button");
 removeitembutton.textContent="Remove";
 removeitembutton.style.width="100px";
 removeitembutton.style.height="40px";
 removeitembutton.style.color="white";
 removeitembutton.style.backgroundColor="blue";
 removeitembutton.onclick=function(target){
     var row = document.getElementById("newitemcookedoctupus");
     row.remove();

     

 }

 var selectbox = document.createElement("input");
 selectbox.id="checkboxcookedoctupus";
 selectbox.type="checkbox";
 selectbox.style.width="50px";
 selectbox.style.height="40px";
 


 item.textContent = "Cooked Octupus";
  price.textContent = " 16.99$";
  price.value="16.99";

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

//Function to display price and all info to cart
function displayprice(){
  subtotal=0;
  weight=0;
  quantity=0;

  var selectboxofoctupus = document.getElementById("selectboxwholeoctupus");
  var rowwholeoctupus = document.getElementById("newitem");
  //https://thisinterestsme.com/check-element-exists-javascript/
  if (typeof(rowwholeoctupus) !=undefined && rowwholeoctupus !=null){
  if (selectboxofoctupus.checked){
    subtotal = subtotal + parseFloat(document.getElementById("priceofoctupus").value * document.getElementById("display").value);
    quantity = quantity + parseFloat(document.getElementById("display").value);
    weight = weight + parseFloat(document.getElementById("weightofoctupus").value * (document.getElementById("display").value) );
  }
  }
  

  var selectboxofslicedoctupus = document.getElementById("checkboxforslicedoctupus");
  var rowslicedoctupus = document.getElementById("newitemslicedoctupus");

  if (typeof(rowslicedoctupus) != undefined && rowslicedoctupus != null){
  if (checkboxforslicedoctupus.checked){
    subtotal = subtotal + parseFloat(document.getElementById("priceslicedoctupus").value * document.getElementById("display1").value);
    quantity = quantity + parseFloat(document.getElementById("display1").value);
    weight = weight + parseFloat(document.getElementById("weightslicedoctupus").value * (document.getElementById("display1").value));
  }
  }
  
  var selectboxofcookedctupus = document.getElementById("checkboxcookedoctupus");
  var rowscookedoctupus = document.getElementById("newitemcookedoctupus");
  if (typeof(rowscookedoctupus) != undefined && rowscookedoctupus != null){
  if(selectboxofcookedctupus.checked){
    subtotal = subtotal + parseFloat(document.getElementById("pricecookedoctupus").value * document.getElementById("display2").value);
    quantity = quantity + parseFloat(document.getElementById("display2").value);
    weight = weight + parseFloat(document.getElementById("weightcookedoctupus").value * (document.getElementById("display2").value));
  }
  }

  var selectboxofnormaloctupus = document.getElementById("checkboxfornormaloctupus");
  var rownormaloctupus = document.getElementById("newitemnormaloctupus");
  if (typeof(rownormaloctupus) !=undefined && rownormaloctupus != null){
    if(selectboxofnormaloctupus.checked){
      subtotal = subtotal + parseFloat(document.getElementById("pricenormaloctupus").value * document.getElementById("displaynormaloctupus").value);
      quantity = quantity + parseFloat(document.getElementById("displaynormaloctupus").value);
      weight = weight + parseFloat(document.getElementById("weightnormaloctupus").value * (document.getElementById("displaynormaloctupus").value));

    }
    }
 

  document.getElementById("displayinfo").innerHTML ="The total price is "+subtotal+". The total quanity is "+quantity+" items. The total weight is  "+weight + "g";
}












