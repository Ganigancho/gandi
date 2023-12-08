function submitForm(event) {
    event.preventDefault();
  
    const firstName = document.getElementById("fname").value;
    const lastName = document.getElementById("lname").value;
    const email = document.getElementById("email").value;
    const comment = document.getElementById("subject").value;
  
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  
    if (!emailPattern.test(email)) {
      alert("Ju lutem jepni një adresë të vlefshme emaili.");
      return;
    }
  
    const message = `Emri: ${firstName}\nMbiemri: ${lastName}\nEmaili: ${email}\nKomenti: ${comment}`;
  
    alert(message);
  }