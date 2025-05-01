const form = document.querySelector("#form");

form.addEventListener("submit", (event) => {
  if (!confirm("آیا از اطلاعات وارد شده اطمینان دارید ؟")) {
    event.preventDefault(); // Stop submission only if the user cancels
  }
});
