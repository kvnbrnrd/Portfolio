<?php 


if (isset($_POST['message'])) {
    $email_destinataire = "kevin.bernard@zoho.com";
    $sujet = htmlspecialchars($_POST['sujet']);

    // Transforme les valeurs Post en variables, évite la faille XSS avec htmlspecialchars
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);


    if(isset($nom, $email, $sujet, $message)) {
        
        $ContenuMail = "Nom : " . $nom .
            " || Email : " . $email .
            " || Sujet : " . $sujet .
            " || Message : " . $message;

        $InfoEmail = mail($email_destinataire, $sujet, $ContenuMail);
        
        if($InfoEmail){
            echo 'Votre message a été envoyé.';
        }
        else {
            echo 'Une erreur est survenue.';
        }

    }
}

elseif (isset($_POST['messageEn'])) {
    $email_recipient = "kevin.bernard@zoho.com";
    $sujetEn = htmlspecialchars($_POST['sujetEn']);

    // Transforme les valeurs Post en variables, évite la faille XSS avec htmlspecialchars
    $nomEn = htmlspecialchars($_POST['nomEn']);
    $emailEn = htmlspecialchars($_POST['emailEn']);
    $messageEn = htmlspecialchars($_POST['messageEn']);


    if(isset($nomEn, $emailEn, $sujetEn, $messageEn)) {
        
        $MailContent = "Name : " . $nomEn .
            " || Email : " . $emailEn .
            " || Subject : " . $sujetEn .
            " || Message : " . $messageEn;

        $EmailInfo= mail($email_recipient, $sujetEn, $MailContent);
        
        if($EmailInfo){
            echo 'Your message has been sent.';
        }
        else {
            echo 'Due ton an error, your message has not been sent.';
        }

    }
}


