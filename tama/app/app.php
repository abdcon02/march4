<?php
      require_once __DIR__."/../vendor/autoload.php";
      require_once __DIR__."/../src/pet.php";

    session_start();
    if(empty($_SESSION['pet_care'])) {
        $_SESSION['pet_care'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use($app) {
        return $app['twig']->render('main.php', array('pets' => Pet::getAll()));
    });

    $app->post("/your_pet_page", function() use($app) {
        $pet = new Pet($_POST['name']);
        $pet->save();

        return $app['twig']->render('your_pet_page.php', array('yourpets' => $pet));
    });


    return $app;

?>
