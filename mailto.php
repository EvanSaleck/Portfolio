<?php

// Récupérer les données soumises par le formulaire HTML
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Configuration de l'e-mail
$to = 'evan.saleck@gmail.com';  // Adresse e-mail du destinataire
$subject = 'Nouveau message de '.$name;  // Sujet de l'e-mail
$body = "De : $name\n\nEmail : $email\n\nMessage : $message";  // Corps de l'e-mail

// Envoyer l'e-mail en utilisant la fonction mail() de PHP
if (mail($to, $subject, $body)) {
    // Si l'e-mail a été envoyé avec succès, rediriger l'utilisateur vers la page d'accueil
    header('Location: index.html');
    exit;
} else {
    // Si l'envoi de l'e-mail a échoué, afficher un message d'erreur
    echo 'Une erreur est survenue lors de l\'envoi de votre message. Veuillez réessayer plus tard.';
}
