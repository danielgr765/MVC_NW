<?php

namespace Dao\Pulseras;

class Pulsera
{
    public static function getAllPulseras()
    {
        return [
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
        ];
    }
}
