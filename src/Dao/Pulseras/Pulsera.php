<?php

namespace Dao\Pulseras;

use Dao\Table;

class Pulsera extends Table
{
    public static function getAllPulseras()
    {
        $sqlstr = "SELECT *FROM pulseras;";

        return self::obtenerRegistros($sqlstr, []);
        /* return [
            [
                "sku" => "PLS001",
                "nombre" => "Pulsera lenca de hulo en nudos",
                "precio" => 100.0,
                "colorDominante" => "negro"
            ],
            [
                "sku" => "PLS002",
                "nombre" => "Pulsera Pech de junco en nudos",
                "precio" => 150.0,
                "colorDominante" => "marron"
            ],
            [
                "sku" => "PLS003",
                "nombre" => "Pulsera garifuna de palma en nudos",
                "precio" => 130.0,
                "colorDominante" => "verde"
            ]
        ];*/
    }
    public static function createPulsera($sku, $nombre, $color, $precio)
    {
        $inssql = "INSERT INTO pulseras(sku, nombre, precio, colorDominante)
        VALUES (:sku, :nombre, :precio, :colorDominante);";
        $params = [
            "sku" => $sku,
            "nombre" => $nombre,
            "precio" => $precio,
            "colorDominante" => $color
        ];
        return self::executeNonQuery($inssql, $params);
    }
}
