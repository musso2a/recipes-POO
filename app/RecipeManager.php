<?php
namespace App;

use App\Models\Recipe;
use App\Storage\Contracts\RecipeStorageInterface;

class RecipeManager
{
    protected $storage;

    public function __construct(RecipeStorageInterface $storage)
    {
        $this->storage = $storage;
    }

    public function addRecipe(Recipe $task)
    {
        $id = $this->storage->store($task);
        return $this->getRecipe($id);
    }

    public function getRecipe(int $id)
    {
        return $this->storage->get($id);
    }

    public function getRecipes()
    {
        return $this->storage->all();
    }
}