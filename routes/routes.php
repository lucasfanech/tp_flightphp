<?php


Flight::route('/', function(){
    Flight::render("index.tpl",array());
});

Flight::route('GET /register', function(){
    Flight::render("register.tpl",array());
});

Flight::route('GET /fichier', function(){
    Flight::render("fichier.tpl",array());
});

Flight::route('GET /login', function(){
    Flight::render("login.tpl",array());
});

Flight::route('GET /profil', function(){
        Flight::render("profil.tpl",array());
});

//route success
Flight::route('GET /success', function(){
    Flight::render("success.tpl",array());
});

// POST route /register

Flight::route('POST /register', function() {
    include('db.php');
    $valid = true;
    // Récupérez les données du formulaire
    $name = Flight::request()->data['username'];
    $email = Flight::request()->data['email'];
    $password = Flight::request()->data['password'];
    // [ Conditions de validation ]
    // Vérifiez si les champs sont vides
    if ($name == '' || $email == '' || $password == '') {
        $valid = false;
    }

    // Vérifiez si l'adresse e-mail est valide
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $valid = false;
    }

    // Vérifiez si l'e-mail existe déjà
    $sql = "SELECT COUNT(*) AS num FROM utilisateur WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row['num'] > 0) {
        $valid = false;
    }

    // Vérifier si le mot de passe fait au moins 8 caractères
    if (strlen($password) < 8) {
        $valid = false;
    }

    // [Redirection et requête]
    if (!$valid) {
        // Si tout n'est pas valide affichez un message d'erreur
        Flight::render("register.tpl",array());
    } else {
        // Si les champs ne sont pas vides, insérez les données dans la base de données
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO utilisateur (Nom, Email, Motdepasse) VALUES (:name, :email, :password)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['name' => $name, 'email' => $email, 'password' => $passwordHash]);
        Flight::redirect('/success');
    }


});
?>
