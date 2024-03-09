<?php require_once 'affichagecvconn.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Mon CV</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            max-width: 800px;
            margin: auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .row4 {
            flex: 1;
            background-color: #000080;
            color: white;
            padding: 40px;
            text-align: center;
        }
        .row4 img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            margin-bottom: 20px;
        }
        .row4 h3 {
            margin: 0;
        }
        .row4 p {
            margin-bottom: 10px;
        }
        .row4 ul {
            list-style-type: none;
            padding: 0;
        }
        .row4 ul li {
            margin-bottom: 5px;
        }
        .row6 {
            flex: 2;
            padding: 40px;
        }
        .row6 h3 {
            margin-top: 0;
            margin-bottom: 20px;
            color: #3498db;
        }
        .row6 ul {
            list-style-type: none;
            padding: 0;
        }
        .row6 ul li {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row4">
        <img src="css/image/<?php echo $photo; ?>" alt="Photo de profil" style="width:280px; height:280px;">
            <h3><?php echo $nom ?? ''; ?></h3>
            <p>Email: <?php echo $email ?? ''; ?></p>
            <p>Adresse: <?php echo $adresse ?? ''; ?></p>
            <p>Téléphone: <?php echo $telephone ?? ''; ?></p>
            <h3>Compétences</h3>
            <p><?php echo $competence ?? ''; ?></p>
        </div>
        <div class="row6">
            <h3>Formations</h3>
            <ul>
                <?php foreach ($formations as $formation) : ?>
                    <li>
                        <h3><?php echo $formation['formation_nom']; ?></h3>
                        <p><?php echo $formation['formation_degre_diplome']; ?></p>
                        <p><?php echo $formation['formation_annee_debut']; ?> - <?php echo $formation['formation_annee_fin']; ?></p>
                        <p><?php echo $formation['formation_domaine_etude']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
            <h3>Expériences</h3>
            <ul>
                <?php foreach ($experiences as $experience) : ?>
                    <li>
                        <h3><?php echo $experience['experience_nom']; ?></h3>
                        <p><?php echo $experience['experience_poste']; ?></p>
                        <p><?php echo $experience['experience_date_debut']; ?> - <?php echo $experience['experience_date_fin']; ?></p>
                        <p><?php echo $experience['experience_tache']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="text-center">
        <a href="#" class="btn btn-primary" onclick="downloadPDF()">Download PDF</a>
    </div>
<script>
  function downloadPDF() {
    var container = document.querySelector('.container');
    html2pdf().from(container).save();
  }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.js"></script>
</body>
</html>
