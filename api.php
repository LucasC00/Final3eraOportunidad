<?php

require 'router.php';
require 'src/Controller/HomeController.php';
require 'src/Controller/LoginController.php';
require 'src/Controller/ConfiguracionController.php';
require 'src/Controller/OperacionesJugadorController.php';

$router = new Router();

// Rutas - HomeController
$router->addRoute('GET', '/home', 'HomeController@showHome');

// Rutas - LoginController
$router->addRoute('GET', '/login', 'LoginController@showLogin');
$router->addRoute('POST', '/login-entrada', 'LoginController@entradaUsuario');;


// Rutas - ConfiguracionController
$router->addRoute('GET', '/configuracion', 'ConfiguracionController@showConfiguracion');
$router->addRoute('POST', '/configuracion-realizar', 'ConfiguracionController@configurarContrasenha');

// Rutas - OperacionesJugadorController
$router->addRoute('GET', '/operaciones-jugador', 'OperacionesJugadorController@showDeleteInsert');
$router->addRoute('POST', '/borrar-jugador', 'OperacionesJugadorController@eliminarJugador');
$router->addRoute('POST', '/crear-jugador', 'OperacionesJugadorController@agregarJugador');
$router->addRoute('GET', '/recuperar-jugadores', 'OperacionesJugadorController@mostrarJugadores');



//Manejar solicitud
$router->handleRequest();