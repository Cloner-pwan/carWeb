const login = document.querySelector("#login");
const signUp = document.querySelector("#signUp");
const shoppingBasket = document.querySelector("#shoppingBasket");

login.addEventListener("click", () => {
  window.location.href = `http://localhost/carWeb/php/login.php`;
});

signUp.addEventListener("click", () => {
  window.location.href = `http://localhost/carWeb/php/signUp.php`;
});

shoppingBasket.addEventListener("click", () => {
  window.location.href = `http://localhost/carWeb/shoppingBasket.html`;
});

