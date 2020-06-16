<?php

class TourOperator
{
    //propriétés de la classe
    private
        $id ,
        $name ,
        $grade ,
        $link ,
        $is_premium;

    //methode constructor de la classe
    public function _construct( array $donnees )
    {
        if (!empty($donnees)){

        $this -> hydrate ($donnees);
        }

    }

    // methode hydrate pour assigner les valeur a un objet créé
    public function hydrate( array $donnees )
    {
        foreach ($donnees as $key => $value)
        {
            $method = 'set' . ucfirst ($key);
            if (method_exists ($this , $method))
            {
                $this -> $method($value);
            }
        }
    }

    /**
     * les setters de notre class
     */

    public function setId( $id ): void
    {


        $this -> id = (int) $id;

    }


    public function setName( $name ): void
    {

        $this -> name = $name;

    }


    public function setGrade( $grade ): void
    {

        $this -> grade = $grade;

    }

    public function setLink( $link ): void
    {

        $this -> link = $link;

    }

    public function setIsPremium( $is_premium ): void
    {
        $this -> is_premium = $is_premium;
    }

    /**
     * les getters de notre classe
     */

    public function getId()
    {
        return $this -> id;
    }

    public function getName()
    {
        return $this -> name;
    }

    public function getGrade()
    {
        return $this -> grade;
    }

    public function getLink()
    {
        return $this -> link;
    }

    public function getIsPremium()
    {
        return $this -> is_premium;
    }
}