<?php
// Inclure le fichier de configuration
require_once 'config.php';

    // Récupère les données du formulaire pour les informations de base
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];
    $telephone = $_POST['telephone'];
    $competence = $_POST['competence'];

        // Récupération du fichier photo
        $photo = $_FILES['photo'];
        $photo_tmp_name = $photo['tmp_name']; // Emplacement temporaire du fichier
        $photo_extension = pathinfo($photo['name'], PATHINFO_EXTENSION); // Extension du fichier
        $photo_name = uniqid() . '.' . $photo_extension; // Nom aléatoire pour l'image avec l'extension

        // Déplacer le fichier téléchargé vers le dossier css/images avec le nom aléatoire
        $destination = 'css/image/' . $photo_name;
        move_uploaded_file($photo_tmp_name, $destination);


    // Récupère les données du formulaire pour les expériences de travail
    $experience_nom = $_POST['experience_nom'];
    $experience_poste = $_POST['experience_poste'];
    $experience_date_debut = $_POST['experience_date_debut'];
    $experience_date_fin = $_POST['experience_date_fin'];
    $experience_tache = $_POST['experience_tache'];

    // Récupère les données du formulaire pour les formations
    $formation_nom = $_POST['formation_nom'];
    $formation_degre_diplome = $_POST['formation_degre_diplome'];
    $formation_annee_debut = $_POST['formation_annee_debut'];
    $formation_annee_fin = $_POST['formation_annee_fin'];
    $formation_domaine_etude = $_POST['formation_domaine_etude'];


    // Établir la connexion à la base de données
    $conn = getConnection();

    if ($conn) {

            try {
                // Insère les données dans la table 'cvs'
                $sql = "INSERT INTO cvs (nom, email, adresse, telephone, competence, photo)
                VALUES (?, ?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $nom);
                $stmt->bindParam(2, $email);
                $stmt->bindParam(3, $adresse);
                $stmt->bindParam(4, $telephone);
                $stmt->bindParam(5, $competence);
                $stmt->bindParam(6, $photo_name); // Utilisez le chemin de destination pour la photo


                if ($stmt->execute()) {
                    // Récupère l'ID du CV
                    $cv_id = $conn->lastInsertId();
                    
                    // Insertion des données dans la table 'Experiences'
                    $count = count($_POST['experience_nom']);
                    for ($i = 0; $i < $count ; $i++) {
                        $sql = "INSERT INTO experiences (cv_id, experience_nom, experience_poste, experience_date_debut, experience_date_fin, experience_tache)
                                VALUES ('{$cv_id}', '{$_POST['experience_nom'][$i]}', '{$_POST['experience_poste'][$i]}', '{$_POST['experience_date_debut'][$i]}', '{$_POST['experience_date_fin'][$i]}', '{$_POST['experience_tache'][$i]}')";
                        $stmt = $conn->prepare($sql);
                        
                        $stmt->execute();
                    }


                    $countt = count($_POST['formation_nom']);
                    for ($j = 0; $j < $countt ; $j++) {
                        $sql = "INSERT INTO formations (cv_id, formation_nom, formation_degre_diplome, formation_annee_debut, formation_annee_fin, formation_domaine_etude)
                                VALUES ('{$cv_id}', '{$_POST['formation_nom'][$j]}', '{$_POST['formation_degre_diplome'][$j]}', '{$_POST['formation_annee_debut'][$j]}', '{$_POST['formation_annee_fin'][$j]}', '{$_POST['formation_domaine_etude'][$j]}')";
                        $stmt = $conn->prepare($sql);
                        
                        $stmt->execute();
                    }

                    echo "New record created successfully";
                    header("Location: choixcv.php?id=$cv_id");
                    
                } 
                
                
                else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            } 
        
        catch(PDOException $e) {
            echo "Erreur lors de l'insertion des données : " . $e->getMessage();
        }
    }

?>
