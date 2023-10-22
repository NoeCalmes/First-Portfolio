<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destinataire = "noecalmes.pro@gmail.com"; // Adresse du destinataire prédéfinie
    $sujet = "Nouveau message depuis le site web"; // Sujet prédéfini pour l'e-mail
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Valider l'adresse e-mail
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // L'adresse e-mail est valide, nous pouvons envoyer l'e-mail
        $message_body = "De : $name\n";
        $message_body .= "E-mail : $email\n";
        $message_body .= "Message : $message";

        // Envoi de l'e-mail
        $headers = "From: $email";
        if (mail($destinataire, $sujet, $message_body, $headers)) {
            $messageStatus = "Email envoyé avec succès !";
        } else {
            $messageStatus = "Erreur. Veuillez réessayer plus tard.";
        }
    } else {
        // L'adresse e-mail n'est pas valide
        $messageStatus = "Email non valide. Veuillez saisir une adresse e-mail valide.";
    }

    // Redirection vers contact.php avec le message
    header('Location: ../contact.php?message=' . urlencode($messageStatus));
} else {
    header('Location: ../contact.php');
}
?>
