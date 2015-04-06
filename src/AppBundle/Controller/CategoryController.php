<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Category;

/**
 * Category controller.
 *
 * @Route("/categories")
 */
class CategoryController extends Controller
{

    /**
     * Lists all Categories entities.
     *
     * @Route("/", name="categories")
     * @Method("GET")
     */
    public function  indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('AppBundle:Category')->findAll();
        return $this->render('AppBundle:Category:index.html.twig', [
            'category' => $categories,
        ]);
    }
}