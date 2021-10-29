var addToCartButton = document.getElementsByClassName("btn btn-dark");
console.log(addToCartButton);
for (var i = 0; i < addToCartButton.length; i++) {
    addToCartButton[i].addEventListener('click', addToCart);

}


function addToCart(a) {
  var divParent = a.target.parentElement;
  var itemName = divParent.querySelector(".card-title").textContent;
  var price = divParent.querySelector(".cost").textContent;
  var priceDouble = parseFloat(price);
  var priceWunit = '$' + price + divParent.querySelector(".unit").textContent
  var imageSrc = divParent.parentElement.querySelector(".item-pic").src;
  console.log(imageSrc);

}

