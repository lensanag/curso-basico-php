<?php

$tittle = "Sesion 03 - Sintaxis Javascript";
// header
include './../layout/header.php';

?>
<div class="container">
        <div class="row">
            <div class="column">
                <br>
<h2>Sintaxis Javascript</h2>
<p>
    Su sintaxis comparte mucho en comun con lenguajes tipo C++; pero con las ultimas especificaciones del estandar ha llegado a adoptar la sintaxis de lenguajes modernos para expresar funcionalidades.    
</p>
<h4><strong>Sentencias</strong></h4>
Entre las especificaciones actuales, el uso de ';' para marcar el final de una sentencia a pasado a ser opcional.
<p>
    <h4><strong>Soporte a depuracion</strong></h4>
    <p>
        En un principio algunos desarrolladores optan por usar la funcion 'alert' para poder mostrar resultados en pantalla.
    </p>
    <p>
        JS cuenta con funciones adecuadas para poder ir evaluando nuestro codigo durante su ejecucion; como lo son las del objeto 'console', asi pues tenemos:
        <ul>
            <li>
                <strong>'console.log'</strong>
            </li>
            <li>
                <strong>'console.error'</strong>
            </li>
            <li>
                <strong>'console.time'</strong> con su respectivo <strong>'console.timeLog'</strong> y <strong>'console.timeEnd'</strong>
            </li>
            <li>etc</li>
        </ul>
    </p>
    <h4><strong>Comentarios</strong></h4>
    <p>
        Tenemos comentarios en linea y comentarios multilinea:
        <pre><code>
// comentario de una sola linea

/*
    comentario
    multilinea
*/

    </code></pre>
    </p>
    <h4><strong>Declaracion de variables y tipos basicos</strong></h4>
    <p>
        Contamos con las palabras reservadas:
        <ul>
            <li><span><strong>'var':</strong></span>para definir variables de forma 'amplia'
            <pre><code>
    /* 'var' */
var miVariable; // declaracion de variable
var valor = 12; // declaracion con asignacion

            </code></pre>
        </li>
            <li><span><strong>'let':</strong></span>para definir variables de forma 'restringida al ambito' en el que se declara; se explicara este concepto en un apartado especifico
            <pre><code>
        /* 'let' */
let algunaVariable; // declaracion de variable
let variableAsignada = '22'; // declaracion con asignacion

            </code></pre>
        </li>
        </ul>
    </p>
<h4><strong>Estructuras de control</strong></h4>
<p><strong>Condicional</strong></p>
<ul>
    <li>
        <span><strong>if</strong></span>
        <pre><code>
var condicion = true;
if (condicion) {
    console.log('la condicion es verdadera')
}
        </code></pre>
    </li>
    <li>
        <span><strong>if/else</strong></span>
        <pre><code>
var condicion = false;
if (condicion) {
    console.log('la condicion es verdadera')
} else {
    console.log('la condicion es falsa')
}
        </code></pre>
    </li>
    <li>
        <span><strong>switch</strong></span>
        <pre><code>
var condicion = 1;
switch (condicion) {
    case 0: console.log(0);break;
    case 2: cossole.log(2);break;
    case 1: console.log(1);break;
}
        </code></pre>
    </li>
    <li>
        <span><strong>Nota:</strong></span> Es posible emular la funcionalidad de condicion multiple mediante la asignacion de funciones a as a propiedades de un objeto, se recomienda al lector investigar al respecto.
    </li>
</ul>
</p>
<p><strong>
    Repeticion
</strong></p>
<ul>
    <li><strong>do</strong>
        <pre><code>
let result = '';
let i = 0;

do {
  i = i + 1;
  result = result + i;
} while (i < 5);

console.log(result);
        </code></pre>
    </li>
    <li><strong>while</strong>
        <pre><code>
let result = '';
let i = 5;

while (i > 0) {
  result = result + i;
  i = i - 1;
};
console.log(result);
        </code></pre>
    </li>
    <li><strong>for - matrices</strong>
        <pre><code>
let arr = [5,8,2,9,7];

for (let idx = 0; idx < arr.length; idx++) {
  const item = arr[idx];
  console.log('indice:'+idx+',valor:'+item);
};
        </code></pre>
    </li>
    <li><strong>for - objetos</strong>
        <pre><code>
let obj = { a: 2, b: 5, c: 7};

for (const key in obj) {
  if (obj.hasOwnProperty(key)) { // usamos 'hasOwnProperty' para iterar solo sobre las propiedades propias del objeto y no las heredadas de su prototipo
    const item = obj[key];
    console.log('clave:'+key+', valor:'+item)
  }
}
        </code></pre>
    </li>
</ul>
<h4><strong>Lectura recomendada</strong></h4>
<ul>
    <li>Un error muy comun es suponer como funcionan las comparaciones en JS, como funciona <a href="https://medium.com/entendiendo-javascript/entendiendo-las-comparaciones-en-javascript-fd9f909f71ec">el Operador de comparacion (Coercion)</a></li>
    <li>El listado completo de palabras reservadas lo podemos encontrar en <a href="https://developer.mozilla.org/es/docs/Web/JavaScript/Referencia/Palabras_Reservadas">MDN</a></li>
    <li>
        Los tipos de datos a detalle <a href="https://developer.mozilla.org/es/docs/Web/JavaScript/Data_structures">MDN</a>
    </li>
</ul>
            </div>
        </div>
</div>
<?php
// footer
include './../layout/footer.php';   