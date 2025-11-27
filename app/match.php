<?php
/**
 * Script de Clasificación por Edad.
 *
 * Este script genera una edad aleatoria y determina en qué etapa de la vida
 * se encuentra la persona (bebé, niño o viejo) utilizando una estructura match.
 *
 * @package    PracticaDocumentacion
 * @author     Akram <akramtrabajo@email.com>
 * @version    1.0.0
 * @link       https://github.com/aksimple-hub/Documentacion_Codigo
 */

/**
 * Edad generada aleatoriamente.
 * * Se genera un número entero entre 0 y 120.
 * * @var int $edad
 */
$edad = rand(0, 120);

/**
 * Mensaje resultante según la edad.
 * * Contiene la cadena de texto que clasifica a la persona.
 * Utiliza la expresión match disponible desde PHP 8.0.
 *
 * @var string $msj
 */
$msj = match($edad) {
    1, 2, 3       => "eres un bebe",
    4, 5, 6, 7, 8 => "eres un niño",
    default       => "eres un viejo"
};

echo "<h1>Con $edad: $msj</h1>";
?><?php
/**
 * Script de Clasificación por Edad.
 *
 * Este script genera una edad aleatoria y determina en qué etapa de la vida
 * se encuentra la persona (bebé, niño o viejo) utilizando una estructura match.
 *
 * @package    PracticaDocumentacion
 * @author     Akram <akram@email.com>
 * @version    1.0.0
 * @link       https://github.com/tu-usuario/tu-repositorio
 */

/**
 * Edad generada aleatoriamente.
 * * Se genera un número entero entre 0 y 120.
 * * @var int $edad
 */
$edad = rand(0, 120);

/**
 * Mensaje resultante según la edad.
 * * Contiene la cadena de texto que clasifica a la persona.
 * Utiliza la expresión match disponible desde PHP 8.0.
 *
 * @var string $msj
 */
$msj = match($edad) {
    1, 2, 3       => "eres un bebe",
    4, 5, 6, 7, 8 => "eres un niño",
    default       => "eres un viejo"
};

echo "<h1>Con $edad: $msj</h1>";
?>