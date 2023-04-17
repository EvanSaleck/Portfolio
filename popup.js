function Popup() {
    var name = document.forms[0]["name"].value;
    var email = document.forms[0]["email"].value;
    var message = document.forms[0]["message"].value;
    if (name == "" || email == "" || message == "") {
        alert("Veuillez remplir tous les champs.");
        window.location.href = "https://evan-saleck.fr/index.php#contact";
    } else {
        alert("Votre message a été envoyé avec succès.");
        // renvoie sur test.html
        window.location.href = "https://evan-saleck.fr/index.php#contact";
    }
    }