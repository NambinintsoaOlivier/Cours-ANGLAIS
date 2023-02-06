<?php
    require_once("../securité/db_conn.php");
    $modifier=0;
    $id = "";
    $nomEtudiant = "";
    $prenomEtudiant = "";
    $dateNaissanceEtudiant = "";
    $lieuNaissEtudiant = "";
    $sexeEtudiant = "";
    $classe = "";
    $adresseEtudiant = "";
    $contactEtudiant = "";
    $modifier=0;

    // Ajout des etudiants
        if(isset($_GET['ajoutStudent'])){
            $nomEtudiant = $_GET['nomEtudiant'];
            $prenomEtudiant = $_GET['prenomEtudiant'];
            $dateNaissanceEtudiant = $_GET['dateNaissanceEtudiant'];
            $lieuNaissEtudiant = $_GET['lieuNaissEtudiant'];
            $adresse = $_GET['adresseEtudiant'];
            $sexe = $_GET['optionsRadiosinline'];
            $classeEtudiant = $_GET['classeEtudiant'];
            $contactEtudiant = $_GET['contactEtudiant'];

            $sql = "INSERT INTO `students` (`id`, `nom`, `prenom`, `date_naissance`, 
            `lieu_naissance`, `adresse`,`sexe`,`classe`, `Contact`) VALUES (NULL, '$nomEtudiant', 
            '$prenomEtudiant', '$dateNaissanceEtudiant', '$lieuNaissEtudiant','$adresse', '$sexe',
            '$classeEtudiant', '$contactEtudiant');";
            $connection->query($sql);

            require('students.php');
        }   

    // suppression des etudiants
        if (isset($_GET['delete'])) {
            $id = $_GET['delete'];
            $sql = "DELETE  FROM students WHERE id='$id'";
            $connection->query($sql);
            require('students.php');
        }
    // modification des etudiants 
        if(isset($_GET['editeEtudiant'])){
            $id = $_GET['editeEtudiant'];
            $sql = "SELECT * FROM students WHERE id = '$id'";

            $resultat = $connection->query($sql);
            $row = $resultat->fetch(PDO::FETCH_ASSOC);

            $id = $row['id'];
            $nomEtudiant = $row['nom'];
            $prenomEtudiant = $row['prenom'];
            $dateNaissanceEtudiant = $row['date_naissance'];
            $lieuNaissEtudiant = $row['lieu_naissance'];
            $sexeEtudiant = $row['sexe'];

            $adresseEtudiant = $row['adresse'];
            $contactEtudiant = $row['Contact'];
            $modifier=1;
        }
    
    // mises à jours des etudiants        
        if(isset($_POST['ModStudent'])){
            $id= $_POST['id'];
            $nomEtudiant = $_POST['nomEtudiant'];
            $prenomEtudiant = $_POST['prenomEtudiant'];
            $dateNaissanceEtudiant = $_POST['dateNaissanceEtudiant'];
            $lieuNaissEtudiant = $_POST['lieuNaissEtudiant'];
            $adresse = $_POST['adresseEtudiant'];
            $sexeEtudiant = $_POST['sexeEtudiant'];
            $classeEtudiant = $_POST['classe'];
            $contactEtudiant = $_POST['contactEtudiant'];
            $modifier=1;

            $sql = "UPDATE `students` SET `nom` = '$nomEtudiant', `prenom` = '$prenomEtudiant', `date_naissance` = 
            '$dateNaissanceEtudiant', `lieu_naissance` = '$lieuNaissEtudiant', `sexe` = '$sexeEtudiant', `adresse` = '$adresse', `classe` = 
            '$classeEtudiant', `Contact` = '$contactEtudiant' WHERE `students`.`id` = '$id' ";
            $connection->query($sql);
            require('students.php');
        } 