<?php
$data = $_REQUEST["q"];

include("conectarstart.php");

$sql = "select * from alumnos_has_carreras where nocontrol='$data' and idcarrera='5'";
$result = $link->query($sql);
if ($result->num_rows > 0) {
    if ($rowb = $result->fetch_assoc()) {
        $ido = $rowb["idopcion"];
    }
    $borrar = "delete from alumnos_has_carreras where nocontrol='$data' and idopcion>='$ido'";
    $delete = $link->query($borrar);
} else {
    $sqlb = "select * from alumnos_has_carreras where nocontrol='$data'";
    $resultb = $link->query($sqlb);
    $x = $resultb->num_rows + 1;

    $insertar = "insert into alumnos_has_carreras values('$data','5',$x)";
    $agregar = $link->query($insertar);
}
?>

<div class="container">
    <div class="row align-items-start">
        <div class="col">
            <?php
            $sqlbusca = "select * from carreras where idcarrera not in(select idcarrera from alumnos_has_carreras where nocontrol='$data');";
            $result2 = $link->query($sqlbusca);

            while ($row2 = $result2->fetch_array()) {
            ?>
                <button class="btn btn-primary" type="button" onclick="<?php echo $row2["desc"] . '(' . $data . ')'; ?>"><?php echo $row2["nombre"]; ?></button><br><br>
            <?php
            }
            ?>
        </div>
        <div class="col">
            <?php
            $sqlbusca3 = "select * from carreras c, alumnos_has_carreras a where nocontrol='$data' and a.idcarrera=c.idcarrera order by idopcion;";
            $result3 = $link->query($sqlbusca3);

            while ($row3 = $result3->fetch_array()) {
            ?>
                <button class="btn btn-primary" type="button" onclick="<?php echo $row3["desc"] . '(' . $data . ')'; ?>"><?php echo $row3["idopcion"] . ' - ' . $row3["nombre"]; ?></button><br><br>
            <?php
            }
            ?>
        </div>
    </div>
</div>