<?php
// Définissez votre mot de passe correct ici
$motDePasseCorrect = "salty springs";

// Vérifiez si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérez le mot de passe soumis
    $motDePasseSoumis = isset($_POST['texte']) ? $_POST['texte'] : '';

    // Vérifiez si le mot de passe est correct
    if ($motDePasseSoumis === $motDePasseCorrect) {
        // Mot de passe correct, redirigez vers la nouvelle page
        header("Location: nouvelle_page.php");
        exit();
    } else {
        // Mot de passe incorrect, affichez un message d'erreur
        $messageErreur = "Mot de passe incorrect. Veuillez réessayer.";
        header("Location: Escapegame.html");
        exit();
    }
}
?>
