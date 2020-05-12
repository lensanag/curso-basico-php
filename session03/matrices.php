<?php

$tittle = "Sesion 03 - Objetos y Matrices";
// header
include './../layout/header.php';

?>
<div class="container">
        <div class="row">
            <div class="column">
                <br>
<h2>Objetos y Matrices</h2>
<h4><strong>Objetos</strong></h4>
<p>JavaScript está diseñado sobre un paradigma simple basado en objetos. Un objeto es una colección de propiedades, y una propiedad es una asociación entre un nombre (o clave) y un valor. Un valor de una propiedad puede ser una función, en cuyo caso la propiedad es conocida. Además de los objetos que están predefinidos en el navegador, puedes definir tus propios objetos.
</p>
<p>Un objeto de JavaScript tiene propiedades asociadas a él. Una propiedad de un objeto puede ser explicada como una variable adjunta al objeto. Las propiedades de un objeto son basicamente lo mismo que las variables comunes de JavaScript, excepto por el nexo con el objeto. Las propiedades de un objeto definen las características de un objeto; se puede acceder a ellas con una simple notación de puntos:</p>
<pre><code>
nombreObjeto.nombrePropiedad
</code></pre>
<p>
Las propiedades de los objetos en JavaScript también pueden ser accedidas o establecidas mediante la notación de corchetes [ ](Para más detalle ver property accesors). Los objetos son llamados a veces arreglos asociativos, ya que cada propiedad está asociada con un valor de cadena que puede ser utilizada para acceder a ella. Así, por ejemplo, puedes acceder a las propiedades del objeto miAuto de la siguiente manera:
</p>
<pre><code>
miAuto["marca"] = "Ford";
miAuto["modelo"] = "Mustang";
miAuto["año"] = 1969; 
</code></pre>
<p>Las propiedades no asignadas de un objeto son undefined (y no null).</p>
<pre><code>
miAuto.color; // undefined
</code></pre>
<h4><strong>Matrices</strong></h4>
<p>Los "arrays" son  objetos tipo-lista,cuyo prototipo tiene métodos para efectuar operaciones de recorrido y de mutación. Ni la longitud de una matriz de JavaScript ni los tipos de sus elementos son fijos. Dado que la longitud de una matriz puede cambiar en cualquier momento, y los datos se pueden almacenar en ubicaciones no contiguas en la matriz, no se garantiza que las matrices de JavaScript sean densas; esto depende de cómo el programador elija usarlos. En general, estas son características convenientes; pero si estas características no son deseables para su uso particular, puede considerar el uso de matrices escritas.</p>
<pre><code>
var frutas = ["Manzana", "Banana"];

console.log(frutas.length); // 2


/* Acceder por el indice */

var primero = frutas[0];
// Manzana

var ultimo = frutas[frutas.length - 1];
// Banana


/* Bucle sobre un array */

frutas.forEach(function (elemento, indice, array) {
    console.log(elemento, indice);
});
// Manzana 0
// Banana 1

/* Añadir elemento al final de un Array */
var nuevaLongitud = frutas.push('Naranja');  // Añade "Naranja" al final
// ["Manzana", "Banana", "Naranja"]

/* Eliminar elemento del final de un Array */
var ultimo = frutas.pop();  // Elimina "Naranja" del final
// ["Manzana", "Banana"]

/* Añadir elemento del inicio de un Array */
var nuevaLongitud = frutas.unshift('Fresa');  // Añade "Fresa" al inicio
// ["Fresa" ,"Manzana", "Banana"]

/* Eliminar elemento al inicio de un Array */
var primero = frutas.shift();  // Elimina "Fresa" al inicio
// ["Manzana", "Banana"]

/* Encontrar el índice de un elemento en el Array */
frutas.push('Fresa'); 
// ["Manzana", "Banana", "Fresa"]
var pos = frutas.indexOf('Banana');  // (pos) es la posición para abreviar
// 1

</code></pre>
<p>
    En JS los arrays incorporan muchas otras funciones.
</p>

<h4><strong>Lectura recomendada</strong></h4>
<ul>
    <li><a href="https://developer.mozilla.org/es/docs/Web/JavaScript/Guide/Trabajando_con_objectos">Objetos</a></li>
    <li><a href="https://developer.mozilla.org/es/docs/Learn/JavaScript/First_steps/Arrays">Matrices</a></li>
</ul>
            </div>
        </div>
</div>
<?php
// footer
include './../layout/footer.php';