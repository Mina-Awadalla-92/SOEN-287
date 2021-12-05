var tPrice;
var subtotal;
var qst;
var gst;
var total;
var totalItems;
var quantityButton;
var quantity;
var buttonClicked;
function removeButtonEvent() {
   var remove = document.getElementsByClassName('remove');
for(i=0;i<remove.length;i++){
   var button = remove[i];  
   button.addEventListener('click', function(event) {
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    calcTotalPrice();
    displaySubtotal();
    displayTotalItems();
   })
}
  
}
 function onLoad() {
  removeButtonEvent();
  calcTotalPrice();
  displayTotalItems();
  displayItemPrice();
  displaySubtotal();
  displayQST();
 }




function calcTotalPrice() {
  
  var itemPrices = document.getElementsByClassName('itemPrice');
   var totalPrice = 0;
   
  for (var i = 0; i<itemPrices.length;i++) {
    var individualPrice = parseFloat(itemPrices[i].innerHTML)
    totalPrice = totalPrice + individualPrice
  } 
  return totalPrice;
}

function displayItemPrice() {
  quantityButton = document.getElementsByClassName("shoppinginput");
  
  for(i=0;i<quantityButton.length;i++){
      quantityButton[i].addEventListener('load',function(event) {
      buttonClicked = event.target
      quantity= buttonClicked.value;
      var price = buttonClicked.parentElement.parentElement.querySelector("h6").textContent;
      price = parseFloat(price.substring(1,price.indexOf('/')))
      tPrice = buttonClicked.parentElement.parentElement.querySelector(".itemPrice");
      tPrice.innerHTML = (price * quantity).toFixed(2);
      displaySubtotal();
      displayTotalItems();
     
  

    })
 }

}


function displayTotalItems() {
  var itemQty = document.getElementsByTagName('input');
  var totalItems =document.getElementById("numOfItems");
  var totalCount = parseInt(0);
  for(var i = 0; i < itemQty.length;i++) 
  {
    totalCount = parseInt(totalCount +parseInt(itemQty[i].value));
    
   
  }
  totalItems.innerHTML = totalCount;
  
}


function displaySubtotal() {
  calcTotalPrice();
  subtotal = document.getElementById("grandtotalfruitss")
  subtotal = subtotal.innerHTML = calcTotalPrice().toFixed(2);
  displayQST();
  displayGST();
  displayTotal();
  
  
}


  function displayQST(){
    qst = document.getElementById("QST");
    qst = qst.innerHTML = (subtotal * 0.09975).toFixed(2);
      
  }

  function displayGST (){
   gst = document.getElementById("GST");
   gst = gst.innerHTML = (subtotal*0.05).toFixed(2);
  }
  function displayTotal() {
    total = document.getElementById("Total_Tax");
    
    total = total.innerHTML = (parseFloat(subtotal) +parseFloat(qst ) +parseFloat(gst)).toFixed(2);
  }
  