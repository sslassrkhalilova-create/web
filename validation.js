function validateForm() {

    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let message = document.getElementById("message").value;

    if (name == "" || email == "" || message == "") {

        alert("Lütfen tüm alanları doldurun!");

        return false;
    }

    if (!email.includes("@")) {

        alert("Geçerli bir email adresi giriniz!");

        return false;
    }

    alert("Form başarıyla gönderildi!");

    return true;
}