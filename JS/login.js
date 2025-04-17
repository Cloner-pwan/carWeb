const resetBtn = document.querySelector("#resetBtn");

resetBtn.addEventListener("click", () => {
  if (rejectBox.style.display == "flex") {
    rejectBox.style.display = "none";
  }
});
