<?php
$dato = $_POST["listbox2"];
include("conectarstart.php");

$sql = "select * from alumnos where nocontrol='$dato'";
$result = $link->query($sql);

while ($row = $result->fetch_array()) {
    $nom = $row["nombre"];
    $cur = $row["curp"];
    $gen = $row["genero"];
    $eda = $row["edad"];
    $gru = $row["grupo"];
    $esp = $row["especialidad"];
    $pro = $row["promedio"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Asignación - CBTIS92</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

    <style>
        /* Add CSS rules for the square border */
        .input-container {
            border: 2px solid #ccc;
            padding: 5px;
            display: inline-block;
            border-radius: 4px;
        }
    </style>
    <script>
        function asignaARH(str) {
            if (str.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("cambios").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "asignaARH.php?q=" + str, true);
                xmlhttp.send();
            }
        }

        function asignaMI(str) {
            if (str.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("cambios").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "asignaMI.php?q=" + str, true);
                xmlhttp.send();
            }
        }

        function asignaLC(str) {
            if (str.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("cambios").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "asignaLC.php?q=" + str, true);
                xmlhttp.send();
            }
        }

        function asignaPAB(str) {
            if (str.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("cambios").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "asignaPAB.php?q=" + str, true);
                xmlhttp.send();
            }
        }

        function asignaP(str) {
            if (str.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("cambios").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "asignaP.php?q=" + str, true);
                xmlhttp.send();
            }
        }

        function asignaTS(str) {
            if (str.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("cambios").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "asignaTS.php?q=" + str, true);
                xmlhttp.send();
            }
        }
    </script>

</head>

<body id="page-top">
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand mb-0 h1">
                <h1>CBTis 92 Control Escolar</h1>
            </span>
        </nav>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Datos del Alumno!</h2>
                        <hr class="divider" />
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">

                        <form id="contactForm" name="form" action="recibirAsig.php" target="_self" method="post">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="nocon" name="nocon" type="text" value="<?php echo $dato; ?>" readonly />
                                <label for="apPat">Número de Control</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="nombre" name="nombre" type="text" value="<?php echo $nom; ?>" />
                                <label for="apMat">Nombre Completo</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="curp" name="curp" type="text" value="<?php echo $cur; ?>" />
                                <label for="name">CURP</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="genero" name="genero" type="text" value="<?php echo $gen; ?>" />
                                <label for="apPat">Género</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="edad" name="edad" type="text" value="<?php echo $eda; ?>" />
                                <label for="apMat">Edad</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="grupo" name="grupo" type="text" value="<?php echo $gru; ?>" />
                                <label for="name">Grupo</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="especialidad" name="especialidad" type="text" value="<?php echo $esp; ?>" />
                                <label for="apMat">Especialidad</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="promedio" name="promedio" type="text" value="<?php echo $pro; ?>" />
                                <label for="name">Promedio</label>
                            </div>

                            <br>
                            <hr class="divider" />
                            <h2 class="text-center">Asignación de Carreras</h2>
                            <hr>

                            <div id="cambios">
                                <div class="container">
                                    <div class="row align-items-start">
                                        <div class="col">
                                            <h3>Por Asignar</h3> <br>
                                            <?php
                                            $sqlbusca = "select * from carreras where idcarrera not in(select idcarrera from alumnos_has_carreras where nocontrol='$dato');";
                                            $result2 = $link->query($sqlbusca);

                                            while ($row2 = $result2->fetch_array()) {
                                            ?>
                                                <button class="btn btn-primary" type="button" onclick="<?php echo $row2["desc"] . '(' . $dato . ')'; ?>"><?php echo $row2["nombre"]; ?></button><br><br>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="col">
                                            <h3>Asignados</h3><br>
                                            <?php
                                            $sqlbusca3 = "select * from carreras c, alumnos_has_carreras a where nocontrol='$dato' and a.idcarrera=c.idcarrera order by idopcion;";
                                            $result3 = $link->query($sqlbusca3);

                                            while ($row3 = $result3->fetch_array()) {
                                            ?>
                                                <button class="btn btn-primary" type="button" onclick="<?php echo $row3["desc"] . '(' . $dato . ')'; ?>"><?php echo $row3["idopcion"] . ' - ' . $row3["nombre"]; ?></button><br><br>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Enviar</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5">
                <div class="small text-center text-muted">Copyright &copy; 2023 - CBTis 92</div>
            </div>
        </footer>
    </div>
</body>

</html>