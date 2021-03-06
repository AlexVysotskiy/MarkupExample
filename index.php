<?php

$map = array();


$baseLink = '';

$uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';

$uri = str_replace($baseLink, '', $uri);

$routeMap = array(
    '/' => 'main',
    '/services' => 'services',
    '/company' => 'company',
    '/qa' => 'qa',
    '/projects' => 'projects',
    '/competence' => 'competence',
    '/closed' => 'closed',
);

$serviceUrl = array(
    '/sendmail'
);

if (in_array($uri, $serviceUrl)) {

    $response = array('success' => 1);

    if ($uri == '/sendmail') {

        $name = strip_tags(trim(@$_REQUEST['name']));
        $phone = strip_tags(trim(@$_REQUEST['phone']));
        $desc = strip_tags(trim(@$_REQUEST['desc']));

        if ($name && $phone && $desc) {

            $from = 'request@theQA.ru';
            $message = '<div><p>Заявка на консультацию с сайта <b>' . $_SERVER['SERVER_NAME'] . '</b></p>'
                    . '<p><b>Контактные данные:</b><br />'
                    . '&emsp;Имя: ' . $name . '<br />'
                    . '&emsp;Телефон: ' . $phone . '<br />'
                    . '&emsp;Описание проекта: ' . $desc . '</p>'
                    . '</div>';
            $message = wordwrap($message, 70);

            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=utf-8\r\n";
            $headers .= "From: Сайт " . $_SERVER['SERVER_NAME'] . " <" . $from . ">\r\n";

            mail($from, 'Заявка на консультацию с сайта ' . $_SERVER['SERVER_NAME'], $message, $headers);

            $response['mail'] = $message;
        } else {
            $response['success'] = 0;
        }
    }

    echo json_encode($response);
} else {

    $template = reset($routeMap);


    if (isset($routeMap[$uri])) {
        $template = $routeMap[$uri];
    }

    include 'templates/' . $template . '.php';
}

