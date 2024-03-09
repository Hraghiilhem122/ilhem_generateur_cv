<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="css/Accueil.css"/>
    <!-- JavaScript Bundle with Popper -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="card mb-3" id ="card">
        <h1>Curriculum vitae disponible</h1>
        <div class="container">
            <div class="row ">
                <div class="col-md-4 text-center">
                    <img src="css/image/cv1.png" alt="Image 1" style="height:200px;width:200px;">
                    <br><br>
                    <a class="btn btn-primary" href="CV1.php?id=<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">CV 1</a>
                </div>
                <div class="col-md-4 text-center">
                    <img src="css/image/CV2.png" alt="Image 2" style="height:200px;width:200px;">
                    <br><br>
                    <a class="btn btn-primary" href="CV2.php?id=<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">CV 2</a>
                </div>
                <div class="col-md-4 text-center">
                    <img src="css/image/CV3.png" alt="Image 3" style="height:200px;width:200px;">
                    <br><br>
                    <a class="btn btn-primary" href="CV3.php?id=<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">CV 3</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
