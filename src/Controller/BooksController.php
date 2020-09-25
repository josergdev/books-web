<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BooksController extends AbstractController
{
    /**
     * @Route("/books", name="books", methods={"GET"})
     */
    public function index()
    {
        return $this->render('books/books.html.twig', [
            'title' => 'Books',
        ]);
    }
}
