<?php
require("../securité/db_conn.php");
if (isset($_GET['search'])) {
    if ($_GET['search'] != "") {
        $search = $_GET['search'];
        $sql = "SELECT * FROM students";
        $n=0;
        $resultat = $connection->query($sql);
        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
            $n = $n+1;
            $nom = $row['nom'];
            $prenom = $row['prenom'];
            if (((strtolower($search)) == strtolower(substr($nom, 0, (strlen($search))))) || 
            ((strtolower($search)) == strtolower(substr($prenom, 0, (strlen($search)))))
            ) { ?>
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
        <a class="btn btn-success" href="new_student.php?editeEtudiant=<?php echo $row['id'] ?>">Modifier</a>
    </td>
</tr>
<?php } } }else { ?>
<tbody id=" search_elev">
    <?php
            $sql = "SELECT * FROM students";
            $resultat = $connection->query($sql);
            while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) { ?>
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
            <a class="btn btn-success" href="new_student.php?editeEtudiant=<?php echo $row['id'] ?>">Modifier</a>
        </td>
    </tr>
    <?php
                    }
                    ?>
</tbody>
<?php
}
}
?>
<?php
        if (isset($_GET['classe'])) {
            $classe = $_GET['classe'];
            if ($classe != "") {
                $sql = "SELECT * FROM students WHERE students.classe='$classe'";
                $resultat = $connection->query($sql);
                while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) { ?>
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
        <a class="btn btn-success" href="new_student.php?editeEtudiant=<?php echo $row['id'] ?>">Modifier</a>
    </td>
</tr>
<?php
                    }
                }
            
            if ($classe === "tout") {
                $sql = "SELECT * FROM students";
                $resultat = $connection->query($sql);
                while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) { ?>
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
        <a class="btn btn-success" href="new_student.php?editeEtudiant=<?php echo $row['id'] ?>">Modifier</a>
    </td>
</tr>
<?php
                    }
                }
             }