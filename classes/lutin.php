<?php


class lutin
{
    use test1;
    use test2;
    private $nom;

    public function __construct()
    {
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getNom()
    {
        return $this->nom;
    }
}