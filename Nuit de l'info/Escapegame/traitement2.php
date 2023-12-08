<?php
// Définissez votre mot de passe correct ici
$motDePasseCorrect = "caillou";

// Vérifiez si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérez le mot de passe soumis
    $motDePasseSoumis = isset($_POST['texte']) ? $_POST['texte'] : '';

    // Vérifiez si le mot de passe est correct
    if ($motDePasseSoumis === $motDePasseCorrect) {
        // Mot de passe correct, téléchargez le fichier .txt
        $contenuFichier = "ZEHHHHAHAHAHAHAHAHAAHAHAHA LE TRESOR N'EXISTE PAS";
        header('Content-Type: text/plain');
        header('Content-Disposition: attachment; filename="fichier_texte.txt"');
        echo $contenuFichier;
        exit();
    } else {
        // Mot de passe incorrect, affichez un message d'erreur
        $messageErreur = "Mot de passe incorrect. Veuillez réessayer.";
        header("Location: nouvelle_page.php");
        exit();
    }
}
?>
