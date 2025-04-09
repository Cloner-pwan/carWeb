let fileInput = document.querySelector("#pro_image");
let imageContainer = document.querySelector(".imageContainer");
let inputFieldImage = document.querySelector(".inputFieldImage");
let resetBtn = document.querySelector("#resetBtn");

fileInput.addEventListener("change", () => {
  console.log(fileInput.files[0]);
  imageContainer.children[0].src = "../img/";
  imageContainer.children[0].src += fileInput.files[0].name;
  inputFieldImage.children[2].style.border = "none";  
  imageContainer.children[0].style.borderRadius = "8px";
  localStorage.setItem("image address", imageContainer.children[0].src);
});

resetBtn.addEventListener("click", () => {
  imageContainer.children[0].src = "../img/";
});
