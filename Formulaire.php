
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="css/Formulaire.css"/>
    <!-- JavaScript Bundle with Popper -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head><!---->
<body>
    <div class="card mb-3" id ="cardformulaire">
        <h3>Remplir les données de votre Curriculum Vitae</h3>
        <br>
        <div class="container">
            <form action="formulairecvconn.php" method="post" enctype="multipart/form-data" >
                <div class="row ">
                    <div class="col-md-4" >
                    <h5>Informations de base</h5>
                        <div>
                            <label for="nom">Nom :</label>
                            <div class="input-group-text">  
                            <input type="text" id="nom" name="nom" required placeholder="Entrer votre nom"></div>
                        </div>
                        <div>
                            <label for="email">Email :</label>
                            <div class="input-group-text">  
                            <input type="email" id="email" name="email" required placeholder="Utilisateur@gmail.com"></div>
                        </div>
                        <div>
                            <label for="adresse">Adresse :</label>
                            <div class="input-group-text">  
                            <input type="text" id="adresse" name="adresse" required placeholder="Entrer votre adresse "></div>
                        </div>
                        <div>
                            <label for="photo">Photo :</label>
                            <input type="file" id="photo" name="photo" accept="image/*" required>
                        </div>

                        <div>
                            <label for="telephone">Téléphone :</label>
                            <div class="input-group-text">  
                            <input type="text" id="telephone" name="telephone" required placeholder="+216 20 000 000"></div>
                        </div>
                        <div>
                            <label for="competence">Competences :</label>
                            <small>Entrez vos compétences, séparées par une virgule:</small>
                            <div class="input-group-text">
                            <input type="text" id="competence" name="competence" required placeholder="Entrer votre comptences"></div>
                        </div>
                    </div>

                    <div class="col-md-4" id="experiences">
                        <h5>Expérience de travail</h5>
                        <div>
                            <label for="experience_nom[]">Nom de l'entreprise :</label>
                            <div class="input-group-text">  
                            <input type="text" id="experience_nom[]" name="experience_nom[]" ></div>
                        </div>
                        <div>
                            <label for="experience_poste[]">Poste occupé :</label>
                            <div class="input-group-text">
                            <input type="text" id="experience_poste[]" name="experience_poste[]" ></div>
                        </div>
                        <div>
                            <label for="experience_date_debut[]">Date de début :</label>
                            <div class="input-group-text">
                            <input type="date" id="experience_date_debut[]" name="experience_date_debut[]" ></div>
                        </div>
                        <div>
                            <label for="experience_date_fin[]">Date de fin:</label>
                            <div class="input-group-text"> 
                            <input type="date" id="experience_date_fin[]" name="experience_date_fin[]" ></div>
                        </div>
                        <div>
                            <label for="experience_tache[]">Description des tâches:</label>
                            <div class="input-group-text">
                            <input type="text" id="experience_tache[]" name="experience_tache[]" ></div>
                        </div>
                        <button type="button" onclick="ajouterExperience()" class="btn btnsubmit">Ajouter une expérience</button><br><br>
                    </div>
                    <div class="col-md-4" id="formations">
                        <h5>Formation</h5>
                        <div>
                            <label for="formation_nom[]">Nom de l'école:</label>
                            <div class="input-group-text">  
                            <input type="text" id="formation_nom[]" name="formation_nom[]" ></div>
                        </div>
                        <div>
                            <label for="formation_degre_diplome[]">Diplôme obtenu:</label>
                            <div class="input-group-text">
                            <input type="text" id="formation_degre_diplome[]" name="formation_degre_diplome[]" ></div>
                        </div>
                        <div>
                            <label for="formation_annee_debut[]">Date de début :</label>
                            <div class="input-group-text">
                            <input type="date" id="formation_annee_debut[]" name="formation_annee_debut[]" ></div>
                        </div>
                        <div>
                            <label for="formation_annee_fin[]">Date de fin:</label>
                            <div class="input-group-text"> 
                            <input type="date" id="formation_annee_fin[]" name="formation_annee_fin[]" ></div>
                        </div>
                        <div>
                            <label for="formation_domaine_etude[]">Domaine d'étude:</label>
                            <div class="input-group-text">
                            <input type="text" id="formation_domaine_etude[]" name="formation_domaine_etude[]" ></div>
                        </div>
                        <button type="button" class="btn btnsubmit" onclick="ajouterFormation()">Ajouter une formation</button><br><br>

                    </div>
                    <div class="row" >
                        <div class="col-8"><br>
                            <button type="submit"  class="btn btnsubmit" value="submit">Confirmer</button>
                        </div>
                    </div>
                </div>
            </form>       
        </div>
    </div>

    <script>
      function ajouterExperience() {
          var experiencesDiv = document.getElementById('experiences');
          var nouvelleExperienceDiv = document.createElement('div');
          nouvelleExperienceDiv.className = 'experience';

          var html = '<div>';
          html += '<label for="experience_nom">Nom de l\'entreprise :</label>';
          html += '<div class="input-group-text">';
          html += '<input type="text" name="experience_nom[]" ></div>';
          html +='</div>';

          html +='<div>';
          html += '<label for="experience_poste">Poste occupé :</label>';
          html += '<div class="input-group-text">';
          html += '<input type="text" name="experience_poste[]" ></div>';
          html +='</div>';

          html +='<div>';
          html += '<label for="experience_date_debut">Date de début :</label>';
          html += '<div class="input-group-text">';
          html += '<input type="date" name="experience_date_debut[]" ></div>';
          html +='</div>';

          html +='<div>';
          html += '<label for="experience_date_fin">Date de fin :</label>';
          html += '<div class="input-group-text">';
          html += '<input type="date" name="experience_date_fin[]"></div>';
          html +='</div>';

          html +='<div>';
          html += '<label for="experience_tache">Tâches effectuées :</label>';
          html += '<div class="input-group-text">';
          html += '<input type="text" name="experience_tache[]"></div>';
          html +='</div>';


          nouvelleExperienceDiv.innerHTML = html;
          experiencesDiv.appendChild(nouvelleExperienceDiv);
      }
  </script>
  <script>
    function ajouterFormation() {
        var formationsDiv = document.getElementById('formations');
        var nouvelleFormationDiv = document.createElement('div');
        nouvelleFormationDiv.className = 'formation';

        var html = '<div>';
          html += '<label for="formation_nom">Nom de l\'école : </label>';
          html += '<div class="input-group-text">';
          html += '<input type="text" name="formation_nom[]" ></div>';
          html +='</div>';

          html +='<div>';
          html += '<label for="formation_degre_diplome">Diplôme obtenu:</label>';
          html += '<div class="input-group-text">';
          html += '<input type="text" name="formation_degre_diplome[]" ></div>';
          html +='</div>';

          html +='<div>';
          html += '<label for="formation_annee_debut">Date de début :</label>';
          html += '<div class="input-group-text">';
          html += '<input type="date" name="formation_annee_debut[]" ></div>';
          html +='</div>';

          html +='<div>';
          html += '<label for="formation_annee_fin">Date de fin:</label>';
          html += '<div class="input-group-text">';
          html += '<input type="date" name="formation_annee_fin[]"></div>';
          html +='</div>';

          html +='<div>';
          html += '<label for="formation_domaine_etude">Domaine d\'étude :</label>';
          html += '<div class="input-group-text">';
          html += '<input type="text" name="formation_domaine_etude[]"></div>';
          html +='</div>';

        nouvelleFormationDiv.innerHTML = html;
        formationsDiv.appendChild(nouvelleFormationDiv);
    }
  </script>

</body>
</html>