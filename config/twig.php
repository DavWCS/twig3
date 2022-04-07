<?php

require_once __DIR__ . '/../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader(__DIR__ . '/../src/View');
$twig = new Twig\Environment($loader, ['debug' => true]);
$twig->addExtension(new Twig\Extension\DebugExtension());

//globale email àjoutée à l'initialisation de l'objet Twig
$contactEmail = 'david_hourdou@yahoo.fr';
$twig->addGlobal('contactEmail', $contactEmail);
