function validateForm(event) {

    event.preventDefault();

    let name = document.getElementById("name").value.trim();

    let phone = document.getElementById("phone").value.trim();

    let email = document.getElementById("email").value.trim();

    let message = document.getElementById("message").value.trim();

    if(name === "" || phone === "" || email === "" || message === ""){

        alert("Lütfen tüm alanları doldurun!");

        return false;
    }

    if(!email.includes("@")){

        alert("Geçerli bir email adresi giriniz!");

        return false;
    }

    if(phone.length < 10){

        alert("Telefon numarası eksik!");

        return false;
    }

    alert("Form başarıyla gönderildi!");

    return true;
}