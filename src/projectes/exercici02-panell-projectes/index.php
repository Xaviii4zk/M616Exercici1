<?php 


$projectes = ["Landing per a clínica dental",
  "Catàleg de productes artesans",
  "Blog corporatiu escola",
  "Auditoria responsive",
  "Fitxa de servei amb CTA",
  "Galeria de projectes",
  "Botiga online bàsica",
  "Optimització d'imatges"
];

$tipusprojectes = ["Web",
   "Ecommerce",
   "CMS",
   "Qualitat",
   "Web",
   "CMS",
   "Ecommerce"
];

$horesestimades = [" 6, 4, 3, 5, 2, 4, 8, 3"];
$prioritats = ["7, 5, 2, 8, 4, 3, 9, 6"];
$Tecnologies = ["HTML", "CSS", "PHP", "Docker", "WordPress", "Shopify"];

$cont = 1;
$cont2=0;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 2 Panell Intern de Projectes</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    <main>
        <header>
            <div class="fotoheader">
            <?php echo '<i class="fa-solid fa-layer-group"></i>'; ?>
            </div>
            <div class="infoheader">
                <?php
                echo "<h1>Panell intern de projectes</h1>";
                echo "<h3>Agència digital · Gestió de projectes d'estudi</h3>";
                ?>
            </div>
            <div class="seccionesheader">
                <div class="seccionesiniciales">
                <?php
                echo "<i class='fa-sharp fa-solid fa-house'></i>";
                echo "<p>Inici</p>";
                ?>   
                </div>
                <div class="seccionesiniciales">
                <?php
                echo '<i class="fa-solid fa-list"></i>';
                echo "<p>Projectes</p>";
                ?>   
                </div>
                <div class="seccionesiniciales">
                <?php
                echo '<i class="fa-regular fa-layer-group"></i>';
                echo "<p>Tecnologies</p>";
                ?>   
                </div>
                <div class="seccionesiniciales">
                <?php
                echo '<i class="fa-sharp fa-regular fa-circle-i"></i>';
                echo "<p>Sobre</p>";
                ?>   
                </div>
            </div>
        </header>
        <div class="infosecciones">
            <div class="seccionestudios azul">
                <?php 
                echo '<i class="fa-duotone fa-light fa-folder-open"></i>';
                echo '<h1 class="negrita">8</h1>';
                echo '<h3>Projectes</h3>';
                echo '<p class"gris">Projectes registrats al panell</p>';
                ?>
            </div>
            <div class="seccionestudios rojobg">
                <?php 
                echo '<i class="fa-slab-press fa-regular fa-triangle-exclamation"></i>';
                echo '<h1 class="negrita rojo">3</h1>';
                echo '<h3>Prioritat alta</h3>';
                echo '<p class"gris">Projectes amb prioritat alta</p>';
                ?>
            </div>
            <div class="seccionestudios verde">
                <?php 
                echo '<i class="fa-jelly fa-regular fa-clock"></i>';
                echo '<h1 class="negrita">27 h</h1>';
                echo '<h3>Hores estimades</h3>';
                echo "<p class'gris'>Suma total d'hores dels projectes</p>";
                ?>
            </div>
            <div class="seccionestudios lila">
                <?php 
                echo '<i class="fa-regular fa-code"></i>';
                echo '<h1 class="negrita">6</h1>';
                echo '<h3>Tecnologies</h3>';
                echo '<p class"gris">Eines i tecnologies utilitzades</p>';
                ?>
            </div>
        </div>
        <div class="separar_projectes">
            <div class="infoprojectes">
                <?php 
                echo '<h2>Projectes actius<h2/>';
                echo '<p>Llista de projectes del curs. 
                Cada targeta mostra la informació principal i la seva prioritat</p>';
                ?> 
            </div>
            <div class="seleccionar">
                <select name="" id="1select">
                    <option value="">Ordenar per prioritat</option>
                </select>';
                <?php '<i class="fa-sharp fa-regular fa-arrow-down"></i>'; ?>
            </div>
        </div>
        <div class="divtarjetas">
            <?php foreach ($projectes as $i >= $projecte ) {
                echo '<div class="divtarjetas"></div>';
                echo '<p class="ntarjeta"> ' . $cont . ' </p>';
                echo '<h3> ' . $projectes[$cont2] . '</h3>';
                echo '<span>'. $prioritats[$cont2] .'</span>';
                echo '<p>' . 'Tipus: ' $tipusprojectes[$cont2] . '</p>';

            }

            endforeach ?>
        </div>
    </main>
</body>
</html>