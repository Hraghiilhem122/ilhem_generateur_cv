<?php require_once 'affichagecvconn.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Curriculum Vitae</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
  body {
    font-family: Arial, sans-serif;
    color: #333;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
  }
  .container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  h1, h2, h3 {
    margin: 10px 0;
  }
  p {
    margin: 5px 0;
  }
  .section {
    margin-bottom: 20px;
  }
  .section:last-child {
    margin-bottom: 0;
  }
  .image {
    max-width: 200px;
    height: auto;
    margin: 20px 0;
  }
  .personal-info {
    background-color: #ccc; /* Couleur de fond différente */
    padding: 20px;
    border-radius: 5px;
  }
</style>
</head>
<body>
<div class="container">
    <div class="personal-info">
        <div class="row">
            <div class="col-md-6">
            <img src="css/image/<?php echo $photo; ?>" alt="Photo de profil" style="width:280px; heigth:280px;">
            </div>
            <div class="col-md-6">
                <h3><?php echo $nom ?? ''; ?></h3>
                <p><?php echo $telephone ?? ''; ?></p>
                <p><?php echo $email ?? ''; ?></p>
                <p><?php echo $adresse ?? ''; ?></p>
            </div>
        </div>
    </div>
  <hr>
  <div class="section">
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
  <div class="section">
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
  </div>
  <div class="section">
    <h3>Compétences</h3>
    <p><?php echo $competence ?? ''; ?></p>
  </div>
</div>
<div  class="text-center" >
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
