var tPrice;
var subtotal;
var qst;
var gst;
var total;
function removeButtonEvent() {
   var remove = document.getElementsByClassName('remove');
for(i=0;i<remove.length;i++){
   var button = remove[i];  
   button.addEventListener('click', function(event) {
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    calcTotalPrice();
    displaySubtotal();
   })
}
  
}
 function onLoad() {
  removeButtonEvent();
  calcTotalPrice();
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
  var quantityButton = document.getElementsByClassName("shoppinginput");
  
  for(i=0;i<quantityButton.length;i++){
    quantityButton[i].addEventListener('change',function(event) {
     var buttonClicked = event.target
     var quantity= buttonClicked.value;
     var price = buttonClicked.parentElement.parentElement.querySelector("h6").textContent;
     price = parseFloat(price.substring(1,price.indexOf('/')))
     tPrice = buttonClicked.parentElement.parentElement.querySelector(".itemPrice");
     tPrice.innerHTML = (price * quantity).toFixed(2);
      displaySubtotal();
    })
 }

}
  function displayTotalItems() {
    
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
  