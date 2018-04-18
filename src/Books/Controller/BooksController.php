<?php

namespace Books\Controller;
use Symfony\Component\HttpFoundation\Response;
use Zplex\App;
use Books\Model\Books;

class BooksController extends App
{
    public function indexAction($page, $test)
    {


        // Dodawanie do bazy
        /**
        $books = new Books();
        $books->setName('Imie');
        $books->setDescription('description');
        $books->setAutor('Autor');
        $em = $this->getEntityManager();
        $em->persist($books);
        $em->flush();
        */
        //Edycja bazy
        /**
        $em = $this->getEntityManager();
        $books = $em->getRepository('Books\Model\Books')->find(3);
        $books->setDescription ('inny Opis');
        $em->persist($books);
        $em->flush();
        */
        // Pobranie wszystki rekordow
        $em = $this->getEntityManager();
        $books = $em->getRepository('Books\Model\Books')->findAll();


        return $this->render('Books/View/list.html.twig', array(
            'books' => $books
        ));
    }
}