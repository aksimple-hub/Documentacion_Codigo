<?php
namespace Clases\Juego;

use Clases\Juego\Constantes;

class Clave
{


    /**
     * @return array 4 colores diferentes de la lista de colores disponibles
     */
    static private function generaClave(): array
    {
    }

    /**
     * @return array la clave
     * Si la clave existe en variable de sesión, la retorna, si no
     * genera una nueva y la guarda en variable de sesión
     */
    static public function getClave():array
   {
    }

    /**
     * @return string
     * Retorna los colores de la clave
     */
    static public function getColoresClave():string
    {
    }



}