<?php

$allowedResourceType = [
	'books',
	'authors',
	'genders'
];

$resourceType = $_GET['resource_type'];

if ( !in_array($resourceType, $allowedResourceType) ) {
	die;
};

$books = [
	1 => [
		'title' => 'Lo que el viento se llevo',
		'id_author' => 1,
		'id_gender' => 2,
	],
	2 => [
		'title' => 'La Iliada',
		'id_author' => 2,
		'id_gender' => 1,
	],
];

header ( 'Content-Type: application/json' );

$resourceId = array_key_exists('resource_id', $_GET) ? $_GET['resource_id'] : '';



switch ( strtoupper( $_SERVER['REQUEST_METHOD'] )) {
	case 'GET':
		if (empty($resourceId) ) {
			echo json_encode($books);
		} else {
			if (array_key_exists($resourceId, $books) ) {
				echo json_encode($books[$resourceId]);
			}
		};
		break;
	case 'POST':
		break;
	case 'PUT':
		break;
	case 'DELETE':
		break;
};
