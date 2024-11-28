<?php
// chemin du fichier .json
$jsonFile = 'Stockage.json';

// Vérifie si le formulaire a été soumis via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Données envoyées
    $name = htmlspecialchars($_POST['name']);
    $prenom = htmlspecialchars($_POST['prénom']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash du mot de passe

    // Lecture du fichier JSON 
    $data = file_exists($jsonFile) ? json_decode(file_get_contents($jsonFile), true) : [];

    // Vérifie si l'email existe déjà
    foreach ($data as $existingUser) {
        if ($existingUser['email'] === $email) {
            die("Erreur : Cet email est déjà utilisé.");
        }
    }

    // Création d'un tableau
    $user = [
        'name' => $name,
        'prenom' => $prenom,
        'email' => $email,
        'password' => $password,
    ];

    // Ajout du nouvel utilisateur
    $data[] = $user;

    // Enregistre les données dans le fichier .json
    file_put_contents($jsonFile, json_encode($data, JSON_PRETTY_PRINT));

    // Message de succès
    echo "Utilisateur enregistré avec succès !";
}
?>
