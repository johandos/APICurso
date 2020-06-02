<?php
/*
 * test:
 *  php -S localhost:8000 server.php
 *  curl http://localhost:8000?resource_type=books -v
 * */
//definimos los recursos disponibles
$allowedResourceTypes = [
    'books',
    'authors',
    'genders'
];
//validamos que el recurso este disponible
$resourceType = $_GET['resource_type'];
if(!in_array($resourceType, $allowedResourceTypes)){
    die;
}
//definos los recursos
$books = [
    0 => [
        'title'=>'Lo que el viento se llevo',
        'id_author' => 1,
        'id_gender'=>1
    ],
    1 => [
        'title'=>'La iliada',
        'id_author' => 0,
        'id_gender'=>0,
    ],
    2 => [
        'title'=>'La riqueza de las naciones',
        'id_author' => 2,
        'id_gender'=>2,
    ],
    3 => [
        'title'=>'El diario de Ana Frank',
        'id_author' => 3,
        'id_gender'=>3,
    ],
    4 => [
        'title'=>'La odisea',
        'id_author' => 0,
        'id_gender'=>0,
    ],
    5 => [
        'title'=>'Teoría de los sentimientos morales',
        'id_autor' => 2,
        'id_gender'=>2,
    ]
];

$genders = [
    0 => [
        'id_genders' => 0,
        'genero' => 'poeseia/epopeya',

    ],
    1 => [
        'id_genders' => 1,
        'genero' => 'novela',

    ],
    2 => [
        'id_genders' => 2,
        'genero' => 'politica/naturaleza humana',

    ],
    3 => [
        'id_genders' => 3,
        'genero' => 'autobiografia',

    ]

];

$authors =[
    0 => [
        'id_authors' => 0,
        'athors' => 'Homero',
    ],
    1 => [
        'id_authors' => 1,
        'athors' => 'Margaret Mitchell',
    ],
    2 => [
        'id_authors' => 2,
        'athors' => 'Adam Smith',
    ],
    3=>[
        'id_authors' => 3,
        'athors' => 'Ana frank',
    ],
];

header('Content-Type:application/json');
// Generamos la respuesta asumiendo que el pedido es correcto
switch (strtoupper($_SERVER['REQUEST_METHOD'])){
    case 'GET':
        break;
    case 'POST':
        break;
    case 'PUT':
        break;
    case 'DELETE':
        break;
}