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
    // Récupérez les données du formulaire
    $name = Flight::request()->data['name'];
    $email = Flight::request()->data['email'];
    $password = Flight::request()->data['password'];

    // Vérifiez si les champs sont remplis
    if (empty($name) || empty($email) || empty($password)) {
        Flight::redirect('/register');
    }

    // Vérifiez si l'adresse email est valide
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        Flight::redirect('/register');
    }

    // Vérifiez si l'adresse email existe déjà
    $sql = "SELECT * FROM utilisateur WHERE email = :email";
    if ($stmt = $pdo->prepare($sql)) {
        // vérifiez si l'adresse email existe déjà $email
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        if ($stmt->execute()) {
            if ($stmt->rowCount() == 1) {
                Flight::redirect('/register');
            }
        }
    }


    // Vérifiez si la longueur du mot de passe est au moins de 8 caractères
    if (strlen($password) < 8) {
        Flight::redirect('/register');
    }

    // Insérez les données dans la table de la base de données

    $sql = "INSERT INTO utilisateur (Nom, Email, Motdepasse) VALUES (:name, :email, :password)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $name, 'email' => $email, 'password' => $password]);
    Flight::redirect('/success');
});
?>
