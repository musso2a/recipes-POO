<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Models\Recipe;

use App\Storage\SessionRecipeStorage;

use App\RecipeManager;

$db = new PDO("mysql:host=localhost;dbname=recipes", 'root', '');


$recipe = new Recipe;
$recipe->setCreatedAt(new DateTime());
$recipe->setName('Fondant au chocolat mi-cuit');
$recipe->setDescription('La recette du fameux fondant au chocolat micuit.');
$recipe->setPersons(4);
$recipe->setPreparationTime(40);

var_dump($recipe);

$storage = new SessionRecipeStorage($db);
print_r($storage->all());


?> <br>
<?php

echo $recipe->getId();
echo $recipe->getName();
echo $recipe->getDescription();
echo $recipe->getPersons();
echo $recipe->getPreparationTime();

?>

