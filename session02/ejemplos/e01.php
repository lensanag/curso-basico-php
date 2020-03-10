<?php

$tittle = "Sesion 02 - Ejemplo 01";
// header
include './../../layout/header.php';

?>
<div class="container">
        <div class="row">
            <div class="column">
                <br>
<form action="/session02/ejemplos/e01.php">
<br>
<label for="name">
    Nombre:<input type="text" name="name" value="" placeholder="ingrese nombre">
</label>
<label for="lastname">
    Apellido: <input type="text" name="lastname" value="" placeholder="ingrese apellido">
</label>
<input type="submit" value="Vamos">
</form>
<?php
    if (isset($_GET['name']) && isset($_GET['lastname'])) {
?>
<p>
    Usted ingreso: <br>
     Nombre: <strong><?php echo $_GET['name'];?> </strong><br>
     Apellido: <strong><?php echo $_GET['lastname'];?> </strong><br>
</p>
<?php
    }
?>
            </div>
        </div>
</div>
<?php
// footer
include './../../layout/footer.php';