<?php

namespace App\Models;

use DateTime;

class Recipe
{
    protected $id;
    protected $created_at;
    protected $name;
    protected $description;
    protected $persons;
    protected $preparation_time;


    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setCreatedAt()
    {
        if (!$this->created_at instanceof DateTime){
            return new DateTime($this->created_at);
        }
        return $this->created_at;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setName($name)
    {

        $this->name = $name;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setDescription($description)
    {

        $this->description = $description;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }



    public function setPersons($persons)
    {

        $this->persons = $persons;

        return $this;
    }

    public function getPersons()
    {
        return $this->persons;
    }

    public function setPreparationTime($preparation_time)
    {

        $this->preparation_time = $preparation_time;

        return $this;
    }

    public function getPreparationTime()
    {
        return $this->preparation_time;
    }

}