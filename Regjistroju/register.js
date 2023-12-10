document.addEventListener("DOMContentLoaded", function () {
  const inputs = document.querySelectorAll(
    "input[type='text'], input[type='password']"
  );

  input.addEventListener("blur", function () {
    this.classList.remove("input-focused");
  });
});

const registrationForm = document.getElementById("loginForm");

registrationForm.addEventListener("submit", function (event) {
  event.preventDefault();

  const nameField = document.getElementById("name");
  const nameValue = nameField.value.trim();

  if (nameValue === "") {
    alert("Ju lutemi jepeni emrin e juaj");
    return false;
  }

  const usernameField = document.getElementById("username");
  const usernameValue = usernameField.value.trim();

  if (usernameValue === "") {
    alert("Ju lutemi jepeni nje emer te perdoruesit");
    return false;
  }

  const emailField = document.getElementById("email");
  const emailValue = emailField.value.trim();

  if (!/^\S+@\S+\.\S+$/.test(emailValue)) {
    alert("Ju lutemi jepeni një adresë të vlefshme emaili.");
    return false;
  }

  const passwordField = document.getElementById("password");
  const passwordValue = passwordField.value;

  if (passwordValue === "") {
    alert("Ju lutem jepeni nje fjalkalim");
    return false;
  }
  function windowHref() {
    window.location.href = "../Login/login.html";
  }
  alert("Jeni regjistruar me sukes");
  windowHref();
});
