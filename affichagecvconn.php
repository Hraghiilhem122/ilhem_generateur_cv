<?php
// Inclure le fichier de configuration
require_once 'config.php';

// Vérifier si l'identifiant est passé en paramètre
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Établir la connexion à la base de données
    $conn = getConnection();

    if ($conn) {
        try {
            // Sélectionner les données de la table 'cvs' pour l'identifiant spécifié
            $sql = "SELECT * FROM cvs WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                // Afficher les données
                $nom = $result['nom'];
                $email = $result['email'];
                $adresse = $result['adresse'];
                $telephone = $result['telephone'];
                $competence = $result['competence'];
                $photo = $result['photo'];

                
                // Sélectionner les données de la table 'experiences' pour l'identifiant spécifié
                $sql = "SELECT * FROM experiences WHERE cv_id = :cv_id";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':cv_id', $id, PDO::PARAM_INT);
                $stmt->execute();
                $experiences = $stmt->fetchAll(PDO::FETCH_ASSOC);

                // Sélectionner les données de la table 'formations' pour l'identifiant spécifié
                $sql = "SELECT * FROM formations WHERE cv_id = :cv_id";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':cv_id', $id, PDO::PARAM_INT);
                $stmt->execute();
                $formations = $stmt->fetchAll(PDO::FETCH_ASSOC);

            } else {
                echo "Aucune donnée trouvée pour l'identifiant spécifié.";
            }
        } catch(PDOException $e) {
            echo "Erreur lors de la récupération des données : " . $e->getMessage();
        }
    } else {
        echo "Erreur lors de la connexion à la base de données.";
    }
} else {
    echo "L'identifiant n'est pas spécifié.";
}
?>
