<?php


namespace App\Storage;

use App\Storage\Contracts\RecipeStorageInterface;

use App\Models\Recipe;
class SessionRecipeStorage implements RecipeStorageInterface
{
    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function store(Recipe $recipe){
        $statement = $this->db->prepare("INSERT INTO recipes (id, description, name, persons, preparation_time, ) VALUES (:id, :description, :name, :persons, :preparation_time, :created_at)");
        $statement->execute([
            'id' => $recipe->getid(),
            'description' => $recipe->getDescription(),
            'name' => $recipe->getName(),
            'persons' => $recipe->getPersons(),
            'preparation_time' => $recipe->getpreparationTime(),
            'created_at' => $recipe->getCreatedAt()
        ]);
        return $this->db->lastInsertId();
    }

    public function update(Recipe $recipe)
    {
        // TODO: Implement update() method.
    }

    public function get($id)
    {
        $statement = $this->db->prepare('SELECT * FROM recipes WHERE id = :id');
        $statement->execute(['id' => $id]);
        $statement->setFetchMode(\PDO::FETCH_CLASS, Recipe::class);
        return $statement->fetch();
    }

    public function all()
    {
        $statement = $this->db->prepare("SELECT * FROM recipes");
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_CLASS, Recipe::class);
    }
}