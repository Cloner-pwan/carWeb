const printbtn = document.querySelector("#printBtn");
printbtn.addEventListener("click", () => {
  print();
});

const changeInfoBtn = document.querySelector("#changeInfoBtn");
changeInfoBtn.addEventListener("click", () => {
    if (confirm("آیا میخواهید اطلاعات حساب را ویرایش کنید ؟")) {
        window.location.href = `http://localhost/carWeb/php/newInfo.php`;
    }
});
