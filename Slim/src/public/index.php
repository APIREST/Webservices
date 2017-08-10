<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use livraisons\Entity\Client;



require '../vendor/autoload.php';

$app = new \Slim\App;



$app->get('/connexion', function (Request $request, Response $rep) {

	$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, '../../../bootstrap.php']);
	//$user = $entityManager->find(User::class, 1);

	$login = $request->getAttribute('login');
    $password = $request->getAttribute('password');
    $userRepo = $entityManager->getRepository(Client::class);
    $result = $userRepo->findBy(["email" => $login , "numeros" => $password]);
    header("Content-Type: application/json");
    if(empty($result)){
    	$rep=json_encode(array("message" =>"fail"));
    	return $rep;
    }
    else{
    	$rep=json_encode(array("message" =>"success"));
    	return $rep;
    }   
});




/*
$app->get('/user/inscription', function (Request $request, Response $response) {

	$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, '../../../bootstrap.php']);
	//$user = $entityManager->find(User::class, 1);


	$admin = new Image();
    $admin->setName("First");
    $admin->setUrl("LAST");

    // Gestion de la persistance
   $entityManager->persist($admin);
   $entityManager->flush();

    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name",$admin->getId());
   // $user = $entityManager->find(User::class, 1);
    return $response;
});




$app->get('/user/modifierprofil', function (Request $request, Response $response) {

	$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, '../../../bootstrap.php']);
	//$user = $entityManager->find(User::class, 1);


	$admin = new Image();
    $admin->setName("First");
    $admin->setUrl("LAST");

    // Gestion de la persistance
   $entityManager->persist($admin);
   $entityManager->flush();

    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name",$admin->getId());
   // $user = $entityManager->find(User::class, 1);
    return $response;
});




$app->get('/produit/lister', function (Request $request, Response $response) {

	$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, '../../../bootstrap.php']);
	//$user = $entityManager->find(User::class, 1);


	$admin = new Image();
    $admin->setName("First");
    $admin->setUrl("LAST");

    // Gestion de la persistance
   $entityManager->persist($admin);
   $entityManager->flush();

    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name",$admin->getId());
   // $user = $entityManager->find(User::class, 1);
    return $response;
});


$app->get('/produit/consulter', function (Request $request, Response $response) {

	$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, '../../../bootstrap.php']);
	//$user = $entityManager->find(User::class, 1);


	$admin = new Image();
    $admin->setName("First");
    $admin->setUrl("LAST");

    // Gestion de la persistance
   $entityManager->persist($admin);
   $entityManager->flush();

    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name",$admin->getId());
   // $user = $entityManager->find(User::class, 1);
    return $response;
});


$app->get('/commande/valider', function (Request $request, Response $response) {

	$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, '../../../bootstrap.php']);
	//$user = $entityManager->find(User::class, 1);


	$admin = new Image();
    $admin->setName("First");
    $admin->setUrl("LAST");

    // Gestion de la persistance
   $entityManager->persist($admin);
   $entityManager->flush();

    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name",$admin->getId());
   // $user = $entityManager->find(User::class, 1);
    return $response;
});



*/

$app->run();