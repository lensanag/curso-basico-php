<?php

$tittle = "Sesion 01";
// header
include './../layout/header.php';

?>
<div class="container">
        <div class="row">
            <div class="column">
                <br>
<h2>Fundamentos de programacion</h2>
<h3>Nociones fundamentales</h3>
<p>
Se llama <i><strong> Programación </strong></i> a la implementación de un algoritmo en un determinado lenguaje de programación, para realizar un programa.
</p>
<p>
<i><strong>Algoritmo</strong></i> es una secuencia no ambigua, finita y ordenada de instrucciones que han de seguirse para resolver un problema.<i>
       Ejemplo: una receta de preparacion
   </i>
</p>
<p>
<i><strong>Programa</strong></i> (Software en inglés) es una secuencia de instrucciones que una computadora puede interpretar y ejecutar.<i>
       Ejemplo: programa reproductor de musica
   </i>
</p>
<h3>Estructuras de <strong>control</strong></h3>
<p>
Permiten modificar el <strong> flujo de ejecución </strong> de las instrucciones de un programa.
</p>
<h4>Estructuras de control de <strong> repeticion </strong></h4>
<p>
Permiten repetir las instrucciones de un programa que se especifiquen.
</p>
<h4>Estructuras de control de <strong>decision</strong></h4>
<p>
Permiten ejecutar las instrucciones de un programa que se especifiquen cuando se cumpla el criterio de desicion.
</p>
<h3>Variables</h3>
<p>
Permiten almacenar informacion para poder trabajar con ella.
<i>
       Ejemplo: una celda de excel(*)
    </i>
    <h4>Arreglos estructurados</h4>
<p>
Permiten almacenar conjuntos de informacion, para acceder a ella se referencia por su posicion y/o indice.
<i>
       Ejemplo: una matriz de excel(*)
    </i>
</p>
<hr>
<h2>Que es PHP?</h2>
<p>
PHP (acrónimo recursivo de PHP: Hypertext Preprocessor)
es un lenguaje de código abierto muy popular especialmente adecuado para el desarrollo web y que puede ser incrustado en HTML.
</p>
<p>
Es un lenguaje interpretado de tipado dinamico*.
</p>
<h2>Sintaxis PHP</h2>
<h3>Etiquetas de apertura y cierre</h3>
<p>
    Permiten al interprete(pre-procesador) saber donde empieza y termina las secciones de codigo, diferenciarlas del resto del HTML
    <br>
    Etiquetas estandar*:
    <ul>
        <li>
        Etiqueta de apertura: <i>&#x3C;?php</i>
        </li>
        <li>
        Etiqueta de cierre: <i>?&#x3E;</i>
        </li>
    </ul>
</p>
<p>Para que el codigo pueda ser procesado debe encontrarse dentro de las etiquetas</p>
<p>
    holaMundo.php <br>
<code class="language-php">
    echo "hello world!";
</code>
</p>
<p>
    variable.php <br>
<pre>
<code class="language-php">
    $name = "Juan Perez";
    echo "hello ".$name."!";
</code>
</pre>
</p>
<p>
    condicionalIf.php <br>
<pre>
<code class="language-php">
    $num = 9;
    if ($num%2 == 0){
        echo "el numero es par!\n";
    }
    echo "el script ha terminado!";
</code>
</pre>
</p>
<p>
    condicionalIfElse.php <br>
<pre>
<code class="language-php">
    $num = 9;
    if ($num%2 != 0){
        echo "el numero es impar!\n";
    } else {
        echo "el numero es par!\n";
    }
    echo "el script ha terminado!";
</code>
</pre>
</p>

<p>
    bucleWhile.php <br>
<pre>
<code class="language-php">
    $number = 9;
    $idx = 0;
    while ($idx < $number) {
        echo "variable de control, valor:".$idx."\n";
        $idx++;
    }
    echo "el script ha terminado!";
</code>
</pre>
</p>

<p>
    bucleDoWhile.php <br>
<pre>
<code class="language-php">
    $number = 9;
    $idx = 0;
    do {
        echo "variable de control, valor:".$idx."\n";
        $idx++;
    } while ($idx < $number);
</code>
</pre>
</p>

<p>
    bucleFor.php <br>
<pre>
<code class="language-php">
    $arr = [4,5,6];
    for ($i=0; $i < 10; $i++) {
        echo "Elemento numero " . $i . " vale:" . $arr[$i];
    }
</code>
</pre>
</p>

<p>
    bucleForeach.php <br>
<pre>
<code class="language-php">
    $arr = [
        'name' => 'Juan',
        'last' => 'Perez',
        ];
    foreach ($variable as $key => $value) {
        echo "La clave ".$key." tiene valor " . $value;
    }
</code>
</pre>
</p>

            </div>
        </div>
</div>
<?php
// footer
include './../layout/footer.php';