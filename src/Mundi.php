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
        [ "id" => 1,  "name" => "Afghanistan"                      ],
        [ "id" => 2,  "name" => "Aland Islands"                    ],
        [ "id" => 3,  "name" => "Albania"                          ],
        [ "id" => 4,  "name" => "Algeria"                          ],
        [ "id" => 5,  "name" => "American Samoa"                   ],
        [ "id" => 6,  "name" => "Andorra"                          ],
        [ "id" => 7,  "name" => "Angola"                           ],
        [ "id" => 8,  "name" => "Anguilla"                         ],
        [ "id" => 9,  "name" => "Antarctica"                       ],
        [ "id" => 10, "name" => "Antigua And Barbuda"              ],
        [ "id" => 11, "name" => "Argentina"                        ],
        [ "id" => 12, "name" => "Armenia"                          ],
        [ "id" => 13, "name" => "Aruba"                            ],
        [ "id" => 14, "name" => "Australia"                        ],
        [ "id" => 15, "name" => "Austria"                          ],
        [ "id" => 16, "name" => "Azerbaijan"                       ],
        [ "id" => 17, "name" => "Bahrain"                          ],
        [ "id" => 18, "name" => "Bangladesh"                       ],
        [ "id" => 19, "name" => "Barbados"                         ],
        [ "id" => 20, "name" => "Belarus"                          ],
        [ "id" => 21, "name" => "Belgium"                          ],
        [ "id" => 22, "name" => "Belize"                           ],
        [ "id" => 23, "name" => "Benin"                            ],
        [ "id" => 24, "name" => "Bermuda"                          ],
        [ "id" => 25, "name" => "Bhutan"                           ],
        [ "id" => 26, "name" => "Bolivia"                          ],
        [ "id" => 27, "name" => "Bonaire, Sint Eustatius and Saba" ],
        [ "id" => 28, "name" => "Bosnia and Herzegovina"           ],
        [ "id" => 29, "name" => "Botswana"                         ],
        [ "id" => 30, "name" => "Bouvet Island"                    ],
        [ "id" => 31, "name" => "Brazil"                           ],
        [ "id" => 32, "name" => "British Indian Ocean Territory"   ],
        [ "id" => 33, "name" => "Brunei"                           ],
        [ "id" => 34, "name" => "Bulgaria"                         ],
        [ "id" => 35, "name" => "Burkina Faso"                     ],
        [ "id" => 36, "name" => "Burundi"                          ],
        [ "id" => 37, "name" => "Cambodia"                         ],
        [ "id" => 38, "name" => "Cameroon"                         ],
        [ "id" => 39, "name" => "Canada"                           ],
        [ "id" => 40, "name" => "Cape Verde"                       ],
    ];

    public static function getAll()
    {
        return json_encode(self::$countries);
    }
}