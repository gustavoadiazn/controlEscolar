<?php
$data = "%" . $_REQUEST["q"] . "%";

include("conectarstart.php");

$sql = "select * from alumnos where nocontrol like '$data'";
?>

<select name="listbox2" size="15">
    <?php

    $result = $link->query($sql);
    $i = 0;
    while ($row = $result->fetch_array()) {
        $nocontrol = $row['nocontrol'];
        $nom = $row['nombre'] . " - " . $row['curp'] . " - " . $row['grupo'];
        if ($i == 0) {
            print "<option value='" . $nocontrol . "' selected>" . $nom . "</option>";
            $i++;
        } else {
            print "<option value='" . $nocontrol . "'>" . $nom . "</option>";
        }
    }
    ?>
</select>