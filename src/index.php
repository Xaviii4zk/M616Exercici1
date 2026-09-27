<?php

$fcbNom = "Barcelona";
$vcfNom = "Valencia C.F.";
$Resultados = ["0", "5", "0", "5", "7", "1", "6", "0"];
$fcb = "imagenes/fcb.png";
$vcf = "imagenes/vinilo-escudo-del-valencia-cf.jpg";
$ResultadoFOTOS = [
    "imagenes/5-0.jpg",
    "imagenes/5-02.jpg",
    "imagenes/6-0.jpg",
    "imagenes/7-1.jpg"
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FCB vs VCF</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <main>
        <div class="Resultados">
            <?php
            echo "<h2>$vcfNom contra $fcbNom</h2>";
            ?>
        </div>
        <div class="Resultados_equipos">
            <div class="Partido">
                <div class="Equipos">
                    <div class="Resultado_equipo">
                        <?php
                        echo '<img class="Escudo" src="' . $vcf . '" alt="Escudo del Valencia">';
                        echo "<h3 class='Perdedor'>$vcfNom</h3>";
                        echo '<h3 class="Resultado_numero Perdedor">' . $Resultados[0] . '</h3>';
                        ?>
                    </div>
                    <div class="Resultado_equipo">
                        <?php
                        echo '<img class="Escudo" src="' . $fcb . '" alt="Escudo del Barcelona">';
                        echo "<h3 class='Ganador'>$fcbNom</h3>";
                        echo '<h3 class="Resultado_numero Ganador">' . $Resultados[1] . '</h3>';
                        ?>
                    </div>
                </div>
                <div class="Resultado_foto">
                    <h3 class="Ganador">Fin</h3>
                    <h3 class="Fechas">5/9/25</h3>
                    <?php
                    echo '<img src="' . $ResultadoFOTOS[0] . '" alt="Resultado del partido">';
                    ?>
                </div>
            </div>
            <div class="Partido">
                <div class="Equipos">
                    <div class="Resultado_equipo">
                        <?php
                        echo '<img class="Escudo" src="' . $vcf . '" alt="Escudo del Valencia">';
                        echo "<h3 class='Perdedor'>$vcfNom</h3>";
                        echo '<h3 class="Resultado_numero Perdedor">' . $Resultados[2] . '</h3>';
                        ?>
                    </div>
                    <div class="Resultado_equipo">
                        <?php
                        echo '<img class="Escudo" src="' . $fcb . '" alt="Escudo del Barcelona">';
                        echo "<h3 class='Ganador'>$fcbNom</h3>";
                        echo '<h3 class="Resultado_numero Ganador">' . $Resultados[3] . '</h3>';
                        ?>
                    </div>
                </div>
                <div class="Resultado_foto">
                    <h3 class="Ganador">Fin</h3>
                    <h3 class="Fechas">12/1/26</h3>
                    <?php
                    echo '<img src="' . $ResultadoFOTOS[1] . '" alt="Resultado del partido">';
                    ?>
                </div>
            </div>
            <div class="Partido">
                <div class="Equipos">
                    <div class="Resultado_equipo">
                        <?php
                        echo '<img class="Escudo" src="' . $fcb . '" alt="Escudo del Valencia">';
                        echo "<h3 class='Ganador'>$fcbNom</h3>";
                        echo '<h3 class="Resultado_numero Ganador">' . $Resultados[4] . '</h3>';
                        ?>
                    </div>
                    <div class="Resultado_equipo">
                        <?php
                        echo '<img class="Escudo" src="' . $vcf . '" alt="Escudo del Barcelona">';
                        echo "<h3 class='Perdedor'>$vcfNom</h3>";
                        echo '<h3 class="Resultado_numero Perdedor">' . $Resultados[5] . '</h3>';
                        ?>
                    </div>
                </div>
                <div class="Resultado_foto">
                    <h3 class="Ganador">Fin</h3>
                    <h3 class="Fechas">15/3/26</h3>
                    <?php
                    echo '<img src="' . $ResultadoFOTOS[3] . '" alt="Resultado del partido">';
                    ?>
                </div>
            </div>
            <div class="Partido">
                <div class="Equipos">
                    <div class="Resultado_equipo">
                        <?php
                        echo '<img class="Escudo" src="' . $fcb . '" alt="Escudo del Barcelona">';
                        echo "<h3 class='Ganador'>$fcbNom</h3>";
                        echo '<h3 class="Resultado_numero Ganador">' . $Resultados[6] . '</h3>';
                        ?>
                    </div>
                    <div class="Resultado_equipo">
                        <?php
                        echo '<img class="Escudo" src="' . $vcf . '" alt="Escudo del Valencia">';
                        echo "<h3 class='Perdedor'>$vcfNom</h3>";
                        echo '<h3 class="Resultado_numero Perdedor">' . $Resultados[7] . '</h3>';
                        ?>
                    </div>
                </div>
                <div class="Resultado_foto">
                    <h3 class="Ganador">Fin</h3>
                    <h3 class="Fechas">22/9/26</h3>
                    <?php
                    echo '<img src="' . $ResultadoFOTOS[2] . '" alt="Resultado del partido">';
                    ?>
                </div>
            </div>
        </div>
        <div class="Informacion_final">
            <p>Horarios en Hora de Verano de Europa Central</p>
            <p>Sugerencias</p>
        </div>
    </main>
</body>
</html>