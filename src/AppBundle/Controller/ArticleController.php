<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Article;

/**
 * Article controller.
 *
 * @Route("/articles")
 */
class ArticleController extends Controller
{

    /**
     * Lists all Articles entities.
     *
     * @Route("/", name="articles")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('AppBundle:Article')->findAll();
        return $this->render('AppBundle:Article:index.html.twig', [
            'articles' => $article,
        ]);
    }

    /**
     * Finds and displays a Series entity.
     *
     * @Route("/{id}", name="article_show")
     */
    public function showAction(Article $article)
    {
        return $this->render('AppBundle:Article:show.html.twig', [
            'article'      => $article,
        ]);
    }

}