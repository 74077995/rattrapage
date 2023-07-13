<?php

$con = mysqli_connect("localhost", "root", "", "rattrapage2");

// if (isset($_POST['connection'])) {

    $email = $_POST['email']; 
    $mot_de_passe = $_POST['pass'];
    $query = "SELECT * FROM `inscription` WHERE `email`='$email' and `mot-de-passe`='$mot_de_passe'";
    $select = mysqli_query($con, $query);
    $row = mysqli_fetch_array($select);

    if (is_array($row)) {
        // $hashed_password = $row["mot_de_passe"];
        // if (password_verify($mot_de_passe, $hashed_password)) {
            $_SESSION["email"] = $row["email"];
            $_SESSION["nom"] = $row["nom"];
            $_SESSION["prenom"] = $row["prenom"];
            echo'BIENVENUE '.$_SESSION["nom"];
            
        } else {
            echo '<script> alert("Mot de passe et/ou email invalide")</script>';
            echo '<script> window.location.href="index.php"</script>';
        }
    
//}
?>
