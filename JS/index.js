const login = document.querySelector("#login");
const signUp = document.querySelector("#signUp");
const allbuttons = document.querySelectorAll(".shopbtn");
signUp.addEventListener("click", () => {
  window.location.href = `http://localhost/carWeb/php/signUp.php`;
});


allbuttons.forEach((button) => {
  console.log("Found button:", button); // Confirm selection
  button.style.cursor = "pointer"; // Force cursor change
  button.addEventListener("click", () => {    
    alert("لطفا وارد حساب کاربری خود شوید !");
  });
});
