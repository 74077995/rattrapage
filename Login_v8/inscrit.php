
<?php
try {
    $bd = mysqli_connect("localhost", "root", "", "rattrapage2");
    echo "Connexion à la base de donné établie";
} catch (PDOException $e) {
    die("Erreur :" . $e->getMessage());
}

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date_de_naissance = $_POST['date'];
$sexe = $_POST['sexe'];
$email = $_POST['email'];
$mot_de_passe = $_POST['passe'];
        $sql = "INSERT INTO `inscription`(`nom`, `prenom`, `date-de-naissance`, `sexe`, `email`, `mot-de-passe`)
         VALUES ('$nom','$prenom','$date_de_naissance','$sexe','$email','$mot_de_passe')";
        mysqli_query($bd, $sql);
        // $message = "Ajout éffectué avec succès.";
        echo '<script> alert("compte cree avec succes! voulez vous vous connecter maintenant?")</script>'; 
     header("location:index.php");
?>