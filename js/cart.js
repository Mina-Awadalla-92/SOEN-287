  var  kiwi_amount = 1;
  var kiwi_totalamount = 5.45; 
  var Red_Bull_amount =1;
  var Red_Bull_totalamount = 3.69;

  var Brioche_amount = 1;
  var Brioche_totalamount = 3.75;
  var Nuggets_amount = 1;
  var Nuggets_totalamount = 7.95;
  var Sausages_amount = 1;
  var Sausages_totalamount = 1.54;
  var Lobster_totalamount = 1;
  var Lobster_totalamount = 29.99;
  var Chocolate_amount = 1;
  var Chocolate_totalamount = 18.99;
  var itemquantity = 0

   
  var gtotalfruits, gtotalfruitss, subtotal, total_QST, GST, total_GST,
  afterTax,TaxIn, Tax ;


  function kiwi() {
    var itemquantity = document.getElementById("kiwi");
    var kiwi_amount = document.getElementById("kiwi_total");
    kiwi_totalamount = itemquantity.value * 5.45;
    kiwi_amount.value = kiwi_totalamount.toFixed(2);
    grandtotalfruits();
    QSTT();
    GST();
    Total_Tax();
  }

  function Red_Bull() {
    var itemquantity = document.getElementById("Red_Bull");
    var Red_Bull_amount = document.getElementById("RedBull_total");
    Red_Bull_totalamount = itemquantity.value * 3.69;
    Red_Bull_amount.value = Red_Bull_totalamount.toFixed(2);
    grandtotalfruits();
    QSTT();
    GST();
    Total_Tax();
  }

  function Brioche() {
    var itemquantity = document.getElementById("Brioche");
    var Brioche_amount = document.getElementById("Brioche_total");
    Brioche_totalamount = itemquantity.value * 3.75;
    Brioche_amount.value = Brioche_totalamount.toFixed(2);
    grandtotalfruits();
    QSTT();
    GST();
    Total_Tax();
  }

  function Nuggets() {
    var itemquantity = document.getElementById("Nuggets");
    var Nuggets_amount = document.getElementById("Nuggets_total");
    Nuggets_totalamount = itemquantity.value * 7.95;
    Nuggets_amount.value = Nuggets_totalamount.toFixed(2);
    grandtotalfruits();
    QSTT();
    GST();
    Total_Tax();
  }

  function Sausages() {
    var itemquantity = document.getElementById("Sausages");
    var Sausages_amount = document.getElementById("Sausages_total");
    Sausages_totalamount = itemquantity.value * 1.54;
    Sausages_amount.value = Sausages_totalamount.toFixed(2);
    grandtotalfruits();
    QSTT();
    GST();
    Total_Tax();
  }

  function Lobster() {
    var itemquantity = document.getElementById("Lobster");
    var Lobster_amount = document.getElementById("Lobster_total");
    Lobster_totalamount = itemquantity.value * 29.99;
    Lobster_amount.value = Lobster_totalamount.toFixed(2);
    grandtotalfruits();
    QSTT();
    GST();
    Total_Tax();
  }

  function Chocolate() {
    var itemquantity = document.getElementById("Chocolate");
    var Chocolate_amount = document.getElementById("Chocolate_total");
    Chocolate_totalamount = itemquantity.value * 18.99;
    Chocolate_amount.value = Chocolate_totalamount.toFixed(2);
    grandtotalfruits();
    QSTT();
    GST();
    Total_Tax();
  }


  function grandtotalfruits() {
    var gtotalfruits = document.getElementById("grandtotalfruitss");
    var gtotalfruitss = kiwi_totalamount + Red_Bull_totalamount 
    + Brioche_totalamount + Nuggets_totalamount + Sausages_totalamount 
    + Lobster_totalamount + Chocolate_totalamount;
    gtotalfruits.value = gtotalfruitss.toFixed(2);
  }


  function QSTT(){
    var total_QST = document.getElementById("QST");
    var QST = (kiwi_totalamount + Red_Bull_totalamount 
      + Brioche_totalamount + Nuggets_totalamount + Sausages_totalamount 
      + Lobster_totalamount + Chocolate_totalamount) * 0.05;
      total_QST.value = QST.toFixed(2);
      // total_QST.value = total_QST.value.toFixed(2);
  }

  function GST (){
    var total_GST = document.getElementById("GST");
    var GST = (kiwi_totalamount + Red_Bull_totalamount 
      + Brioche_totalamount + Nuggets_totalamount + Sausages_totalamount 
      + Lobster_totalamount + Chocolate_totalamount) * 0.09975;
      total_GST.value = GST.toFixed(2);
  }
  
 function afterTax (){
    var total_TaxIn = document.getElementById("TaxIn");
    var TaxIn = (kiwi_totalamount + Red_Bull_totalamount 
      + Brioche_totalamount + Nuggets_totalamount + Sausages_totalamount 
      + Lobster_totalamount + Chocolate_totalamount) * 1.15;
      total_TaxIn.value = TaxIn.toFixed(2);
  }

  function Total_Tax() {
    var Tax = document.getElementById("Total_Tax");
    var TaxIn = (kiwi_totalamount + Red_Bull_totalamount 
    + Brioche_totalamount + Nuggets_totalamount + Sausages_totalamount 
    + Lobster_totalamount + Chocolate_totalamount) * 1.15;
    Tax.value = TaxIn.toFixed(2);
  }
