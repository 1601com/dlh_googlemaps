<?php

$dc = &$GLOBALS['TL_DCA']['tl_settings'];

/**
 * Palettes
 */
$dc['palettes']['default'] = str_replace('{chmod_legend', '{dlh_googlemaps_legend},dlh_googlemaps_apikey,dlh_googlemaps_be_apikey;{chmod_legend', $dc['palettes']['default']);

   
/**
 * Fields
 */
$arrFields = [
    'dlh_googlemaps_apikey' => [
        'label'     => &$GLOBALS['TL_LANG']['tl_settings']['dlh_googlemaps_apikey'],
        'exclude'   => true,
        'inputType' => 'text',
        'eval'      => ['maxlength'=>64, 'rgxp'=>'alnum', 'tl_class'=>'w50'],
        'sql'       => "varchar(64) NOT NULL default ''",
    ],
    'dlh_googlemaps_be_apikey' => [
        'label'     => [
            'API-Key für Backend-Aktionen',
            'Bitte geben Sie Ihren Standard Google Maps API-Key für das Laden von Koordinaten und das Anzeigen von Beispielen hier ein.'
        ],
        'exclude'   => true,
        'inputType' => 'text',
        'eval'      => ['maxlength'=>64, 'rgxp'=>'alnum', 'tl_class'=>'w50'],
        'sql'       => "varchar(64) NOT NULL default ''",
    ]
];

$dc['fields'] = array_merge($dc['fields'], $arrFields);
