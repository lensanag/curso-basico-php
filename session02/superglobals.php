<?php

$tittle = "Sesion 02 - Superglobals";
// header
include './../layout/header.php';

?>
<div class="container">
        <div class="row">
            <div class="column">
                <br>
<h3>Superglobals (intro)</h3>
<p>Superglobals — Superglobals son variables internas que están disponibles siempre en todos los ámbitos</p>
<br>
<p>
Algunas variables predefinidas en PHP son "superglobales", lo que significa que están disponibles en todos los ámbitos a lo largo del script. No es necesario emplear global $variable; para acceder a ellas dentro de las funciones o métodos.
</p>
<p>
Las variables superglobals son:
</p>
<ul>
<li> $GLOBALS</li>
<li> $_SERVER</li>
<li><a href="#get">$_GET</a></li>
<li><a href="#post">$_POST</a></li>
<li> $_FILES</li>
<li> $_COOKIE</li>
<li> $_SESSION</li>
<li> $_REQUEST</li>
<li> $_ENV</li>
</ul>
<br>
<br>
<br>
<br>
<br>
<p id="get"><strong> GET</strong></p>
<p>
Un array asociativo de variables pasado al script actual vía parámetros URL (también conocida como cadena de consulta). Tenga en cuenta que el array no solo se rellena para las solicitudes GET, sino para todas las solicitudes con una cadena de consulta.
</p>
<p id="post"><strong> POST</strong></p>
<p>
Un array asociativo de variables pasadas al script actual a través del método POST de HTTP cuando se emplea application/x-www-form-urlencoded o multipart/form-data como Content-Type de HTTP en la petición.
</p>

            </div>
        </div>
</div>
<?php
// footer
include './../layout/footer.php';