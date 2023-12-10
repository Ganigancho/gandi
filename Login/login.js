document.addEventListener("DOMContentLoaded", function () {
  const inputs = document.querySelectorAll(
    "input[type='text'], input[type='password']"
  );

  input.addEventListener("blur", function () {
    this.classList.remove("input-focused");
  });
});
alert("Emri i perdoruesit : admin dhe Fjalkalimi : 1234")
document
  .getElementById("loginForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    if (username === "admin" && password === "1234") {
      window.location.href = "../Honda Ks/Home/Home.html";
    } else {
      alert("Emëri i përdoruesit ose fjalëkalimi i pavlefshëm. Ju lutemi provoni përsëri.");
    }
  });
