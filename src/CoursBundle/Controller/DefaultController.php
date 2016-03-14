<?php

namespace CoursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $cours=$em->getRepository("CoursBundle:Cours")->findAll();

        return $this->render('CoursBundle:Default:liste.html.twig',
            array('cours' => $cours));
    }
}
