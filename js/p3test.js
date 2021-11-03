
let pricePerUnit = document.getElementsByClassName('third')[0];
var price = pricePerUnit.textContent;
price = parseFloat(price.substring(1,price.indexOf('/')));

var quantityBox = document.getElementsByTagName('input')[0];
quantityBox.addEventListener('change',totalPriceP3)
console.log(quantityBox.value);



function totalPriceP3(){
  
   if (quantityBox.value === 1 ) {
       pricePerUnit.innerHTML = pricePerUnit.textContent;
       
      
    
   }
     
   else {
        pricePerUnit.innerHTML = "Total: " +  (price * quantityBox.value).toFixed(2) + "$";
        
   }
    
}
function onLoad() {
    console.log(localStorage.getItem("pricePerUnit"))
    
    totalPriceP3();
}