<?php

$tittle = "Sesion 03 - Funcionas, ambito y closures";
// header
include './../layout/header.php';

?>
<div class="container">
        <div class="row">
            <div class="column">
                <br>
<h2>Funciones</h2>
<h4><strong>Declaracion de funcion</strong></h4>
<p>La definición de una función (también llamada declaración de función o sentencia de función) consiste de la palabra clave (reservada)  function, seguida por:</p>
<ul>
  <li>El nombre de la función (opcional).</li>
  <li>Una lista de argumentos para la función, encerrados entre paréntesis y separados por comas (,).</li>
  <li>Las sentencias JavaScript que definen la función, encerradas por llaves, { }.</li>
</ul>
<p>ejemplo:
  <pre><code>
  function square(number) {
  return number * number;
}
  </code></pre>
</p>
<p>La función square toma un argumento, llamado number. La función consiste de una sentencia que expresa el retorno del argumento de la función (el cual es, number) multiplicado por sí mismo. La sentencia return especifica el valor retornado por la función.</p>
<h4><strong>Expresion de funcion</strong></h4>
<p>Si bien la declaración de la función anterior es sintácticamente una sentencia, las funciones pueden también ser creadas por una expresión de función. Tal función puede ser anónima; no debe tener un nombre. Por ejemplo, la función square podría haber sido definida como:</p>
<pre><code>
var square = function(number) {return number * number};
var x = square(4) //x obtiene el valor 16
</code></pre>
<p>
Sin embargo, se puede proporcionar un nombre a una expresión de función, y éste puede ser utilizado dentro de la función para referirse a sí misma, o en un depurador para identificar la función en el trazado de pila:
</p>
<pre><code>
var factorial = function fac(n) {return n<2 ? 1 : n*fac(n-1)};
print(factorial(3));
</code></pre>
<h4><strong>Ámbito de una Función</strong></h4>
<p>
Las variables definidas dentro de una función no pueden ser accedidas desde ningún lugar fuera de la función, ya que la variable está definida sólo en el ámbito de la función. Sin embargo, una función puede acceder a todas las variables y funciones definidas dentro del ámbito en el cual está definida. En otras palabras, una función definida en el ámbito global puede acceder a todas las variables definidas en el ámbito global. Una función definida dentro de otra función, también puede acceder a todas las variables definidas en su función padre y a cualquier otra variable a la que la función padre tenga acceso.
</p>
<pre><code>
// Las siguientes variables están  definidas en el ámbito global
var num1 = 20,
    num2 = 3,
    nombre = "Messi";

// Esta función se define en el ámbito global
function multiplicar() {
  return num1 * num2;
}

multiplicar(); // Retorna 60

// Un ejemplo de función anidada
function obtenerPuntaje () {
  var num1 = 2,
      num2 = 3;
  
  function agregar() {
    return nombre + " puntaje " + (num1 + num2);
  }
  
  return agregar();
}

obtenerPuntaje(); // Retorna "Messi puntaje 5"
</code></pre>
<h4><strong>
Clausuras (o cierres)
</strong></h4>
<p>
Las clausuras (informalmente llamadas cierres) son una de las características más poderosas de JavaScript. JavaScript permite debido al anidamiento de funciones y concesiones a la función interna, el acceso total a todas las variables y funciones definidas dentro de la función externa (y a todas las variables y funciones a las cuales la función externa tiene acceso). Sin embargo, la función externa no tiene acceso a las variables y funciones definidas dentro de la función interna. Esto provee una especie de seguridad a las variables de la función interna. Además, ya que la función interna tiene acceso al ámbito de la función externa, las variables y funciones definidas en la función externa vivirán más tiempo que la función externa en sí misma si la función interna las administra para sobrevivir más allá del ciclo de vida de la función externa. Una clausura es creada cuando la función interna es, de alguna manera, hecha disponible a cualquier  ámbito fuera de la función externa.
</p>
<pre><code>
var pet = function(name) {          // La funcion externa define una variable llamada "name"
      var getName = function() {
        return name;                // La funcion interna tiene aceso a la variable "name" de la funcion externa
      }

      return getName;               // Devolver la funcion interna, por lo tanto exponiendola a un ambito exterior
    },
    myPet = pet("Vivie");
    
myPet();                            // Devuelve "Vivie"
</code></pre>
<h4><strong>Funciones flecha (expresion lambda)
</strong></h4>
<p>Una expresión de función flecha (también conocida como función flecha gruesa o fat arrow function en inglés) tiene una sintaxis más corta comparada con las expresiones de función y not tiene su propio this, arguments, super o new.target. Las funciones flecha son siempre funciones anónimas. Véase también esta entrada en el blog hacks.mozilla.org : "ES6 In Depth: Arrow functions" (en inglés).</p>
<p>Dos factores influenciaron la introdución de las funciones flecha: funciones más cortas y el léxico this.</p>
<h4><strong>Lectura recomendad</strong></h4>
<ul>
  <li>Funciones <a href="https://developer.mozilla.org/es/docs/Web/JavaScript/Guide/Funciones">MDN</a></li>
  <li>Closure <a href="https://www.variablenotfound.com/2012/10/closures-en-javascript-entiendelos-de.html">articulo detallado</a></li>
  
</ul>
            </div>
        </div>
</div>
<?php
// footer
include './../layout/footer.php';