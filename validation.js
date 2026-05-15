function validateForm(event) {

    event.preventDefault();

    let name = document.getElementById("name").value.trim();
 
    let phone = document.getElementById("phone").value.trim();
 
    let email = document.getElementById("email").value.trim();
 
    let message = document.getElementById("message").value.trim();

    if (name === "" || phone === "" || email === "" || message === "") {

        alert("Lütfen tüm alanları doldurun!");
  
        return false;
    }

    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailPattern.test(email)) {

       
        alert("Geçerli bir email adresi giriniz!");
       
        return false;
    }

    let phonePattern = /^[0-9]{10,11}$/;

    if (!phonePattern.test(phone)) {

        alert("Telefon numarası geçersiz!");
        return false;
    }

    alert("Form başarıyla gönderildi!");

    return true;
}