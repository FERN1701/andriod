<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $firstName = htmlspecialchars($_POST['first_name']);
    $lastName = htmlspecialchars($_POST['last_name']);
    $birthDate = htmlspecialchars($_POST['birth_date']);
    $goals = htmlspecialchars($_POST['goals']);

    $expiryDate = time() + (365 * 24 * 60 * 60); 
    setcookie('user_data', json_encode([
        'first_name' => $firstName,
        'last_name' => $lastName,
        'birth_date' => $birthDate,
        'goals' => $goals,
    ]), $expiryDate, '/');

    echo "Cookie set successfully!";
}
?>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="GoalTracker, Goal, Tracker" />
  <meta name="description" content="GoalTracker" />
  <meta name="author" content="Aragon_Fernando, Apex" />
  <title>Goal-Pro</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
</head>
