<?php


$numero = 36;
$number = 3.5;
$string = "Federico";
$is_cool = true;

//echo "Ciao sono $string ed ho $numero anni";

const number = 2;
const numFloat = 3.5;
const stringa = "Federico";
const is_true = true;

// echo gettype($is_cool);
// echo gettype($string);


// var_dump($numero);
// var_dump($string);

//echo $string;

//var_dump(is_true);

//echo number;


$text1 = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè";
$text6 = 'Hai';
$text7 = 'bevuto';
$text8 = "tutto.";

//echo '"' . $text1 . " " . $text2 . " " . $text3 . " " . $text4 . " " . $text5 . " " . $text6 . " " . $text7 . " " . $text8 . '"';


$words1 = [
    'una',
    67,
    'vita',
    'colle',
    'mi',
    'rosso',
    [
        'oscura',
        'era',
        89,
        [
            'mezzo',
            [
                'cammin',
                'Nel',
                [
                    'selva',
                    'la',
                    [
                        'via',
                        'una',
                        true,
                    ]
                ],
            ]
        ],
        'ritrovai',
        'per'
    ],
    'diritta'
];

$words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'nostra',
    'elemento3' => [
        'Virgilio',
        'smarrita',
        'ché'
    ]
];

$missinDi = "di";


$result = '"' . $words1[6][3][1][1] . " " . $words1[6][3][0] . " " . $missinDi . " " . $words1[6][3][1][0] . " " .
    $missinDi . " " . $words2["elemento2"] . " " . $words1[2] . " " .
    $words1[4] . " " . $words1[6][4] . " " . $words1[6][5] . " " . $words1[0] . " " . $words1[6][3][1][2][0] . " " .  $words1[6][0] . ", " .
    $words2["elemento3"][2] . " " . $words1[6][3][1][2][1] . " " . $words1[7] . " " .
    $words1[6][3][1][2][2][0] . " " .  $words1[6][1] . " " . $words2["elemento3"][1] . '"';

echo $result;


// $partial = $words2["elemento3"][1];

// echo $partial;
