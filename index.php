<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Securité</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <h2>English Club</h2>
            </a>
        </div>
    </nav>
    <div class="contenair">
        <div class="row">
            <div class="col-6 .col-sm-4">
                <h1>
                    <img src="assets/image/coollogo_com-7672883.png" alt="">
                </h1>
            </div>
            <div class="col-4 .col-sm-4">
                <form action="securité/login.php" method="post">
                    <label class="identification" for="">Identification</label><br>
                    <?php if (isset($_GET['error'])) { ?>
                    <p class="error">
                        <?php echo $_GET['error']; ?>
                    </p>
                    <?php } else { ?>
                    <br><br>
                    <?php
                    } ?>
                    <label for="floatingInput">Utilisateur :</label><br>
                    <input type="text" name="uname" class="form-control" id="floatingInput" placeholder="Utilisateur">
                    <br>
                    <label for="floatingPassword">Mot de passe :</label><br>
                    <input type="password" name="password" class="form-control" id="floatingPassword" <br><br>
                    <button class=" btn" type="submit">Confirmer</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
