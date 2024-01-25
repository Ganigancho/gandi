document.addEventListener("DOMContentLoaded", function () {
  const inputs = document.querySelectorAll(
    "input[type='text'], input[type='password']"
  );

  input.addEventListener("blur", function () {
    this.classList.remove("input-focused");
  });
});
// alert("Emri i perdoruesit : admin dhe Fjalkalimi : 1234")
// document
//   .getElementById("loginForm")
//   .addEventListener("submit", locationHref);
//   function locationHref(event) {
//     event.preventDefault();

//     const username = document.getElementById("username").value;
//     const password = document.getElementById("password").value;

//     if (username === "admin" && password === "1234") {
//       window.location.href = "../Honda Ks/Home/Home.php";
//     } else {
//       alert("Invalid username or password. Please try again.");
//     }
//   }