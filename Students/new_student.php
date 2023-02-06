<?php 
    require_once("action.php");
?>
<!DOCTYPE html>
<html lang="fr" id="students">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="../js.js"></script>
    <title>Nouvelle etudiant</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <h2>English Club</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse  navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item ">
                        <a class="nav-link me-4" href=""></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="">Etudiants</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="students.php">Liste des etudiants</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Apropos/apropos.php">A propos</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a class="btn btn-outline-danger" href="../securité/logout.php">DECONNECTION</a>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1>Inscription d' une nouvelle etudiant</h1>
        <div class="row">
            <div class="col-4">
                <form action="action.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    Nom :
                    <input type="text" class="form-control" id="nomEtudiant" name="nomEtudiant"
                        placeholder="Inserer le nom d'eleve*" value="<?php echo $nomEtudiant; ?>" />
                    <span id="error" style="display:none">Veuillez completer votre nom svp</span>


                    Prenom :
                    <input type="text" class="form-control" id="prenomEtudiant" placeholder="Inserer le prenom d'eleve*"
                        name="prenomEtudiant" value="<?php echo $prenomEtudiant; ?>" />
                    <span id="error1" style="display:none">Veuillez completer votre prenom svp</span>

                    N é(e) le :
                    <input type="date" class="form-control" id="dateNaissanceEtudiant" name="dateNaissanceEtudiant"
                        value="<?php echo $dateNaissanceEtudiant; ?>" />
                    <span id="error2" style="display:none">Veuillez completer votre date de naissance svp</span>
                    à :
                    <input type="text" class="form-control" placeholder="Inserer le lieu*" id="lieuNaissEtudiant"
                        name="lieuNaissEtudiant" value="<?php echo $lieuNaissEtudiant; ?>" />


                    Sexe :
                    <label class="checkbox-inline">
                        <input type="radio" class="form-check-input" name="sexeEtudiant" id="optionsRadios3"
                            value="Masculin" <?php if ($sexeEtudiant === "Masculin"){?> checked <?php } ?>checked>
                        Masculin
                    </label>
                    <label class="checkbox-inline">
                        <input type="radio" class="form-check-input" name="sexeEtudiant" id="optionsRadios4"
                            value="Feminin" <?php if ($sexeEtudiant === "Feminin"){?> checked <?php } ?>> Feminin
                    </label><br>

                    Adresse :
                    <input type="text" id="adresseEtudiant" class="form-control"
                        placeholder="Inserer l'adresse d'eleve*" name="adresseEtudiant"
                        value="<?php echo $adresseEtudiant; ?>" />
                    <span id="error3" style="display:none">Veuillez completer votre adresse svp</span>


                    Classe :
                    <?php if($modifier===1){ 
                    $id = $_GET['editeEtudiant'];
                    $sql = "SELECT * FROM students WHERE id = '$id'";

                    $resultat = $connection->query($sql);
                    $row = $resultat->fetch(PDO::FETCH_ASSOC);
                        $classe = $row['classe']; ?>
                    <select name="classe" id="classe" class="form-select" value="<?php echo $classe; ?>">
                        <option value="<?php echo $classe; ?>"><?php echo $classe; ?></option>
                    </select>
                    <?php } else {   ?>
                    <select name="classe" id="classe" class="form-select" value="">
                        <option value="Niveau A">Niveau A</option>
                        <option value="Niveau B">Niveau B</option>
                        <option value="Niveau C">Niveau C</option>
                    </select> <?php }  ?>

                    Contact :
                    <input type="text" maxlength="10" class="form-control" placeholder="Telephone" id="contactEtudiant"
                        name="contactEtudiant" value="<?php echo $contactEtudiant; ?>" />
                    <span id="error4" style="display:none">Vous devez completer votre telephone svp !</span>
                    <br><br>

                    <?php if($modifier===1){ ?>
                    <input type="submit" id="ModStudent" name="ModStudent" class="btn eng btn-success"
                        value="Enregistrer les modifications"> <?php } else { ?>
                </form>
                <input type="submit" onclick="message();" id="ajoutStudent" name="ajoutStudent"
                    class="btn eng btn-primary" value="Enregistrer">
                <?php }  ?>

            </div>
            <div class="col-1"></div>
            <div class="col-4">
                <img src="../assets/image/60059_155488_27676.jpg" alt="" srcset="">
            </div>
        </div>
    </div>
</body>

</html>