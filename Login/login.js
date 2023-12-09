document.addEventListener("DOMContentLoaded", function () {
    const inputs = document.querySelectorAll(
      "input[type='text'], input[type='password']"
    );
  
    input.addEventListener("blur", function () {
      this.classList.remove("input-focused");
    });
  });