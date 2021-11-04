
var pricePerUnit = document.getElementsByClassName('third')[0];
var initialPPU = pricePerUnit.innerHTML;
var price = pricePerUnit.textContent;
price = parseFloat(price.substring(1,price.indexOf('/')));
var quantityBox = document.getElementsByTagName('input')[0];
quantityBox.addEventListener('change',totalPriceP3)
quantityBox.addEventListener('keyup',totalPriceP3)
var item  = document.getElementsByClassName('product-name')[0].textContent


function totalPriceP3(){
  
   if (quantityBox.value === 1 ) {
       pricePerUnit.innerHTML = initialPPU;
   }
     
   else {
        pricePerUnit.innerHTML = "Total: " +  (price * quantityBox.value).toFixed(2) + "$";
   }
    localStorage.setItem(item,quantityBox.value);
}


function onLoad() {
quantityBox.value = localStorage.getItem(item)
totalPriceP3()
   
}