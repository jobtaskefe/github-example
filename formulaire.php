<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Process data</title>
</head>
<body>
    <?php
    $fname = $_GET["fname"];
    $lname = $_GET["lname"];
    $email = $_GET["email"];
    $age = $_GET["age"];
    echo "Bonjour " . $fname ." ". $lname ."<br>"; 
    echo "Votre courriel est : " . $email."<br>";
    echo "Vous avez : ". $age. " ans ";
    echo "Merci pour votre patience";
    ?>
</body>
</html>





