function addToCartClicked(a) {
  var divParent = a.target.parentElement;
  itemName = divParent.querySelector(".card-title").textContent;
  console.log(itemName);
  var price = divParent.querySelector(".cost").textContent;
  var priceDouble = parseFloat(price);
  priceWunit = "$" + priceDouble + divParent.querySelector(".unit").textContent;
  console.log(priceWunit);
  imageSrc = divParent.parentElement.querySelector(".item-pic").src;
}

function addToCart() {
  console.log(itemName);
  var cartRow = document.createElement("tr");
  //First cell
  var cartCell1 = document.createElement("td");
  var itemImage = document.createElement("img");
  itemImage.src = imageSrc;
  var title = document.createElement("p");
  title.innerHTML = itemName;
  cartCell1.appendChild(itemImage);
  cartCell1.appendChild(title);

  //second cell
  var cartCell2 = document.createElement("td");
  var pricePerunit = document.createElement("h6");
  pricePerunit.textContent = priceWunit;
  cartCell2.appendChild(pricePerunit);

  //third cell
  var cartCell3 = document.createElement("td");
  var amount = document.createElement("input");
  amount.type = "number";
  amount.id = itemName;
  amount.className = "shoppinginput";
  amount.onchange = "grandtotalfruits";
  amount.value = "1";
  amount.min = "0";
  cartCell3.appendChild(amount);

  //fourthCell
  var cartCell4 = document.createElement("td");
  var dollarSign = document.createElement("span");
  dollarSign.innerHTML = "$";
  var outputPrice = document.createElement("output");
  outputPrice.innerHTML = price;
  outputPrice.className = "itemPrice";
  var button = document.createElement("button");
  button.type = "button";
  button.addEventListener("click", function () {
    var buttonClicked = event.target;
    buttonClicked.parentElement.parentElement.remove();
    updateCartTotal();
  });

  button.className = "btn btn-dark btn1 remove";
  button.textContent = "Remove";
  cartCell4.appendChild(dollarSign);
  cartCell4.appendChild(outputPrice);
  cartCell4.appendChild(button);

  cartRow.appendChild(cartCell1);
  cartRow.appendChild(cartCell2);
  cartRow.appendChild(cartCell3);
  cartRow.appendChild(cartCell4);

  var cartItems = document.querySelector("tbody");
  cartItems.appendChild(cartRow);
}
