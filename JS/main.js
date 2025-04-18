const login = document.querySelector("#login");
const signUp = document.querySelector("#signUp");
const shoppingBasket = document.querySelector("#shoppingBasket");


signUp.addEventListener("click", () => {
  window.location.href = `http://localhost/carWeb/php/signUp.php`;
});

shoppingBasket.addEventListener("click", () => {
  window.location.href = `http://localhost/carWeb/shoppingBasket.html`;
});
