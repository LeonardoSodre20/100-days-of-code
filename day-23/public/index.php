<?php

// INICIAR A SESSAO
session_start();

// DEFINIR UMA CONSTANTE DE CONTROLE

define('CONTROL', true);

// SE EXISTE UMA USUÀRIO LOGADO

$user_authenticated = $_SESSION['user'] ?? null;

// VERIFICA QUAL È A ROTA NA URL
if (empty($user_authenticated)) {
    $route = 'login';
} else {
    $route = $_GET['route'] ?? 'home';
}

// ANALISA AS ROTAS

$routes = [
    'login' => 'login.php',
    'home' => 'home.php'
];

if (!key_exists($route, $routes)) {
    die('Ops.. Acesso negado !!');
} else {
    require_once $routes[$route];
}