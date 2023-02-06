<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../js.js"></script>
    <title>Etudiants</title>

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body class="bodyliste">
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
                        <a class="nav-link active" href="#">Etudiants</a>
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
    <div class="container-fluid">
        <h1> LISTE DES ETUDIANTS</h1>
        <div class="row">
            <div class="col-lg-10">
                <a class="btn btn-primary me-2" href="new_student.php">Nouveau Etudiant</a>
                <select class="btn btn-outline-success" id="classe" onchange="classe();">
                    <option value="tout">tout</option>
                    <option value="Niveau A">Niveau A</option>
                    <option value="Niveau B">Niveau B</option>
                    <option value="Niveau C">Niveau C</option>
                </select>
            </div>
            <div class="col-lg-2">
                <input class="form-control" onkeyup=" SearchStudent();" name="nom" id="nom" type="text"
                    placeholder="rechercher">
            </div>
        </div>
        <div class="table-header">
            <table class="table">
                <thead>
                    <tr>
                        <th width="13%" class="text-center">Nom</th>
                        <th width="15%">Prénom</th>
                        <th width="10%">Adresse</th>
                        <th width="10%">Sexe</th>
                        <th width="10%">Classe</th>
                        <th width="20%" class="text-center">Parametre</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="table-body">
            <table class="table">
                <tbody id="search_elev">
                    <?php
                    include_once('../securité/db_conn.php');
                    $sql = "SELECT * FROM students";
                    $resultat = $connection->query($sql);
                    while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                    <tr class="liste">
                        <td width="13%">
                            <?php echo $row['nom'];  ?>
                        </td>
                        <td width="15%">
                            <?php echo $row['prenom'];  ?>
                        </td>
                        <td width="10%">
                            <?php echo $row['adresse'];  ?>
                        </td>
                        <td width="10%">
                            <?php echo $row['sexe'];  ?>
                        </td>
                        <td width="10%">
                            <?php echo $row['classe'];  ?>
                        </td>
                        <td width="20%" class="text-center">
                            <a class="btn btn-danger" href="action.php?delete=<?php echo $row['id'] ?>">Supprimer</a>
                            <a class="btn btn-success"
                                href="new_student.php?editeEtudiant=<?php echo $row['id'] ?>">Modifier</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>




</body>

</html>