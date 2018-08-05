<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/vendor/fzaninotto/faker/src/autoload.php';

$faker = Faker\Factory::create();
$loader = new Twig_Loader_Filesystem(__DIR__.'/templates');
$twig = new Twig_Environment($loader, array(
));

echo $twig->render('index.twig.html', array(
    'companyName' => $faker->company,
    'catchPhrase' => $faker->catchPhrase,
    'productAdjective' => $faker->word,
    'productName' => $faker->word,
    'productMaterial' => $faker->word,
    'url' => $faker->url,
    'image' => $faker->imageUrl,
    'price' => $faker->randomNumber(2),
    'color' => $faker->colorName,
    'userName' => $faker->name,
    'job' => $faker->jobTitle,
    'phone' => $faker->phoneNumber,
    'email' => $faker->email,
    'address' => $faker->address
));
?>