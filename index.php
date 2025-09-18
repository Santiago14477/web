<?php

$nombre = "Orlando Santiago Cárdenas Fernández";
$profesion = "Estudiante de Ingeniería en Tecnologías de la Información e Innovación Digital";
$descripcion = "Nací en San Lorenzo Tlacotepec, Atlacomulco, en el Estado de México. Soy una persona con conocimientos básicos e intermedios en tecnología, orientada a la resolución de problemas y al aprendizaje continuo. Me gusta el trabajo en equipo y me adapto con facilidad a nuevos entornos.";

$foto = "img/orlando.jpeg"; 

$datos_personales = [
    "Ubicación" => "San Lorenzo Tlacotepec, Atlacomulco, Estado de México",
    "Fecha de nacimiento" => "8 de abril de 2006",
    "Nacionalidad" => "Mexicano",
    "Idiomas" => "Español (nativo), Inglés (básico)"
];

$contacto = [
    "Email" => "santiago.fdez06@gmail.com",
    "GitHub" => "https://github.com/Santiago14477",
    "Teléfono" => "712 103 2634 | 712 192 2104"
];

$redes_sociales = [
    "Facebook" => "https://www.facebook.com/Santiago Cardenas",
    "Instagram" => "https://www.instagram.com/santi_14477",
    "TikTok" => "https://www.tiktok.com/@santiagoaquino6820"
];

$habilidades = [
    "Trabajo en equipo",
    "Resolución de problemas",
    "Conocimientos de tecnología (básico-intermedio)",
    "Aprendizaje rápido",
    "Responsabilidad y compromiso",
    "HTML, CSS, PHP (básico)"
];

$experiencia = [
    ["empresa" => "Doctor PC", "puesto" => "Soporte Técnico / Prácticas", "años" => "Experiencia obtenida en microempresa"]
];

$educacion = [
    ["institucion" => "Secundaria Pablo Galeana", "titulo" => "Secundaria", "años" => ""],
    ["institucion" => "CBT Lic. Mario Colín Sánchez", "titulo" => "Bachillerato Tecnológico", "años" => ""],
    ["institucion" => "Universidad Politécnica de Atlacomulco (UPA)", "titulo" => "Ingeniería en Tecnologías de la Información e Innovación Digital", "años" => "Actualidad"]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Currículum de <?= $nombre ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
<div class="main-wrapper">
    <aside class="sidebar">
        <div class="photo-container">
            <img src="<?= $foto ?>" alt="Foto de <?= $nombre ?>" class="profile-photo">
            <h2><?= $nombre ?></h2>
            <p class="profession"><?= $profesion ?></p>
        </div>

        <div class="sidebar-section">
            <h3>Contacto</h3>
            <ul>
                <?php foreach ($contacto as $clave => $valor): ?>
                    <li><b><?= $clave ?>:</b> 
                        <?php if (strpos($valor, 'http') === 0): ?>
                            <a href="<?= $valor ?>" target="_blank"><?= $valor ?></a>
                        <?php else: ?>
                            <?= $valor ?>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="sidebar-section">
            <h3>Redes Sociales</h3>
            <ul>
                <?php foreach ($redes_sociales as $clave => $valor): ?>
                    <li><b><?= $clave ?>:</b> <a href="<?= $valor ?>" target="_blank"><?= $valor ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="sidebar-section">
            <h3>Datos Personales</h3>
            <ul>
                <?php foreach ($datos_personales as $clave => $valor): ?>
                    <li><b><?= $clave ?>:</b> <?= $valor ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </aside>

    <main class="content-area">
        <section class="about-me">
            <h2>Sobre Mí</h2>
            <p><?= $descripcion ?></p>
        </section>

        <section class="skills">
            <h2>Habilidades</h2>
            <div class="skills-grid">
                <?php foreach ($habilidades as $hab): ?>
                    <span><?= $hab ?></span>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="experience">
            <h2>Experiencia Laboral</h2>
            <?php foreach ($experiencia as $exp): ?>
                <div class="job-item">
                    <h3><?= $exp["empresa"] ?></h3>
                    <p class="job-title"><?= $exp["puesto"] ?></p>
                    <p class="job-years"><?= $exp["años"] ?></p>
                </div>
            <?php endforeach; ?>
        </section>

        <section class="education">
            <h2>Educación</h2>
            <?php foreach ($educacion as $edu): ?>
                <div class="edu-item">
                    <h3><?= $edu["institucion"] ?></h3>
                    <p class="edu-title"><?= $edu["titulo"] ?></p>
                    <p class="edu-years"><?= $edu["años"] ?></p>
                </div>
            <?php endforeach; ?>
        </section>
    </main>
</div>
</body>
</html>