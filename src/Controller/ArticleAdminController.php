<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ArticleAdminController extends AbstractController
{
    /**
     * @Route("/", name="article_admin")
     */
    public function index(): Response
    {
        $form = $this->createForm(ArticleFormType::class);
        return $this->render('article/new.html.twig', [
            'articleForm' => $form->createView()
        ]);
    }
}
