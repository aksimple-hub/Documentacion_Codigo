<?php
namespace Clases\Juego;
class Jugada
{

    private $jugada = [];
    private $posicionesAcertadas = 0;
    private $coloresAcertados = 0;

    /**
     * Jugada constructor.Crea una jugada (4 colores que el usuario a ejegido)
     */
    public function __construct()
    {

    }


    /**
     * @param $clave
     * compara la clave con la jugada
     * Anota el resultado que son los colores acertados y de ellos cuantos
     * Están en la posiciòn correcta
     */
    public function comparaJugada($clave)
    {
    }

    /**
     * @return array la jugada (colores)
     */
    public function getJugada(): array
    {

    }

    /**
     * @return int
     */
    public function getPosicionesAcertadas(): int
    {
        return $this->posicionesAcertadas;
    }

    /**
     * @return int
     */
    public function getColoresAcertados(): int
    {

    }

    /**
     * @return string Los colores de la jugada para incluirlos en html
     */
    public function getColoresJugada(): string
    {

    }

    public static function objeto(Jugada $objetoJugada): Jugada
    {
    }


}