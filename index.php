<?php

$map = array();

$uri = isset($_SERVER['BASE']) && isset($_SERVER['REQUEST_URI']) ? str_replace($_SERVER['BASE'], '', $_SERVER['REQUEST_URI']) : '/';

$routeMap = array(
    '/' => 'main',
    '/services' => 'services',
    '/company' => 'company',
    '/qa' => 'qa',
    '/projects' => 'projects',
    '/competence' => 'competence',
);

$template = reset($routeMap);

if (isset($routeMap[$uri])) {
    $template = $routeMap[$uri];
}

include 'templates/' . $template . '.php';
