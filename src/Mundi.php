<?php

namespace JoshuaWebDev\Mundi;

$countries = [
    [ "id" => 1,  "name" => "Afghanistan"         ],
    [ "id" => 2,  "name" => "Aland Islands"       ],
    [ "id" => 3,  "name" => "Albania"             ],
    [ "id" => 4,  "name" => "Algeria"             ],
    [ "id" => 5,  "name" => "American Samoa"      ],
    [ "id" => 6,  "name" => "Andorra"             ],
    [ "id" => 7,  "name" => "Angola"              ],
    [ "id" => 8,  "name" => "Anguilla"            ],
    [ "id" => 9,  "name" => "Antarctica"          ],
    [ "id" => 10, "name" => "Antigua And Barbuda" ]
];

class Mundi
{
    public static $countries = [
        [ "id" => 1,  "name" => "Afghanistan"         ],
        [ "id" => 2,  "name" => "Aland Islands"       ],
        [ "id" => 3,  "name" => "Albania"             ],
        [ "id" => 4,  "name" => "Algeria"             ],
        [ "id" => 5,  "name" => "American Samoa"      ],
        [ "id" => 6,  "name" => "Andorra"             ],
        [ "id" => 7,  "name" => "Angola"              ],
        [ "id" => 8,  "name" => "Anguilla"            ],
        [ "id" => 9,  "name" => "Antarctica"          ],
        [ "id" => 10, "name" => "Antigua And Barbuda" ]
    ];

    public static function getAll()
    {
        return json_encode(self::$countries);
        // var_dump(self::$countries);
    }
}