const login = document.querySelector("#login");
const signUp = document.querySelector("#signUp");
const shoppingBasket = document.querySelector("#shoppingBasket");

login.addEventListener("click", () => {
  window.location.href = `http://localhost/carWeb/login.html`;
});

signUp.addEventListener("click", () => {
  window.location.href = `http://localhost/carWeb/signUp.html`;
});

shoppingBasket.addEventListener("click", () => {
  window.location.href = `http://localhost/carWeb/shoppingBasket.html`;
});
