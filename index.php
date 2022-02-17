<?php
require_once(__DIR__ . '/vendor/autoload.php');

include('./connexion.php');

// Vérifie que l'user a cliqué sur le bouton
if (isset($_POST['submit'])) {

    // Vérifie que le champ email n'est pas vide
    if(!empty($_POST['email'])) {

        // Récupère l'email saisit par l'user
        $email = $_POST['email'];
        
        // Transmission du nouveau contact à l'API SendinBlue
        $apiInstance = new SendinBlue\Client\Api\ContactsApi(
            new GuzzleHttp\Client(),
            $config
        );
        
        $createContact = new \SendinBlue\Client\Model\CreateContact(); 
        $createContact['email'] = $email;
        $createContact['listIds'] = [1];

        try {
            $result = $apiInstance->createContact($createContact);
            echo 'Succès ! Vous êtes incrit à notre newsletter.';
        } catch (Exception $e) {
            header("Location: index.php?message=error");
            return $e->getMessage();
        }

        // Redirection vers la page de confirmation
        header("Location: confirmation.php");
    }
    else {
        echo '<p class="msg-error">Veuillez saisir une adresse e-mail pour vous inscrire !</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="HandheldFriendly" content="true" />
    <title>Formulaire d'inscription à la newsletter</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    if(isset($_GET['message'])) {
        echo '<p class="msg-error">Cet e-mail existe déjà !</p>';
    }
    ?>
    <div class="newsletter-subscribe mt-5 container">
        <div class="container">
            <div class="intro">
                <h2 class="text-center newsletter">Abonnez-vous à notre newsletter </h2>
                <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_u25cckyh.json" class="lottie-player" background="transparent" speed="1" loop autoplay></lottie-player>
                <p class="text-center">Inscrivez-vous à notre newsletter pour suivre nos actualités.</p>
            </div>
            <form class="form-inline" method="POST">
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Entrez votre e-mail"></div>
                <div class="form-group"><input type="submit" name="submit" value="S'inscrire" class="btn btn-primary btn-submit"></div>
            </form>
        </div>
    </div>

    <!-- JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>
</html>
