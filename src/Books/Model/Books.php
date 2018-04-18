<?php

namespace Books\Model;

/**
 * @Entity @Table(name="books")
 */
class Books
{
    /** @Id @Column(type="integer") @GeneratedValue  */
    protected $id;

    /** @Column(type="string") */
    protected $name;

    /** @Column(type="string") */
    protected $description;

    /** @Column(type="string") */
    protected $autor;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param mixed $autor
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    /**
     * @return mixed
     */
    public function getAutor()
    {
        return $this->autor;
    }
}