let discount = document.querySelector(".discount");
let price = document.querySelector(".price");
let shoppingBtn = document.querySelector(".shoppingBtn");
let ShowStatus;

if (discount.children[0].innerHTML !== "0%") {
  ShowStatus = 1; // no discount
} else {
  ShowStatus = 0; // there is a discount
}

switch (ShowStatus) {
  case 0:
    discount.style.visibility = "hidden";
    price.style.visibility = "hidden";
    break;
  case 1:
    discount.style.visibility = "visible";
    price.style.visibility = "visible";
    break;
  default:
    console.log("no info");
    break;
}

shoppingBtn.addEventListener("click", () => {
    window.location.href = "http://localhost/carWeb/php/shoppingProduct.php";
});
// if (discount.children[0].innerHTML >= 0 || "0") {
//   //   discount.style.visibility = "hidden";
//   //   price.style.visibility = "hidden";
//   discount.style.visibility = "visible";
//   price.style.visibility = "visible";
// }
