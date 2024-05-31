var total =0;
function AddToCart(price){
    var cartTableBody = document.querySelector('.shopping-cart');
    console.log(cartTableBody)
    var newRow = cartTableBody.insertRow();
    console.log(newRow)
    var productPriceCell = newRow.insertCell(0);
    var TotalCell = newRow.insertCell(1);
    total+=price;
    productPriceCell.textContent = '$' + price.toFixed(2);
    TotalCell.textContent= total.toFixed(2);
}