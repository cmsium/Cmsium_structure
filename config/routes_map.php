<?php

define('ROUTES',  [
    // Basic API calls
    '/' => ['getTwigs','auth' => true],
    '/getTwigs' => ['getTwigs','auth' => true],
    '/addWorkplace' => ['addWorkplace','auth' => true],
    '/showWorkplace' => ['showWorkplace','auth' => true],
    '/getWorkplaces' => ['getWorkplaces','auth' => true],
    '/addPosition' => ['addPosition','auth' => true],
    '/deletePosition' => ['deletePosition','auth' => true],
    '/getPositions' => ['getPositions','auth' => true],
    '/showPosition' => ['showPosition','auth' => true],
    '/addType' => ['addType','auth' => true],
    '/deleteType' => ['deleteType','auth' => true],
    '/addObject' => ['addObject','auth' => true],
    '/updateObject' => ['updateObject','auth' => true],
    '/deleteObject' => ['deleteObject','auth' => true],
    '/getObjects' => ['getObjects'],
    '/getTypes' => ['getTypes', 'auth' => true],
    '/showObject' => ['showObject', 'auth' => true],
    '/getCrossTwigNodes' => ['createUserForm', 'auth' => true],
    '/addToStructure' => ['addToStructure', 'auth' => true]
]);