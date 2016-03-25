<?php

namespace CoursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $cours=$em->getRepository("CoursBundle:Cours")->findBy(array(), array('datedCours' => 'asc'));
        $chapitres=$em->getRepository("CoursBundle:Chapitres")->findBy(array('cours' => $cours));


        return $this->render('CoursBundle:Default:liste.html.twig',
            array('cours' => $cours,
                'chapitres' => $chapitres));
    }
}
