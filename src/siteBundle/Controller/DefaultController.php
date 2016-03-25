<?php

namespace siteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $lastcours=$em->getRepository("CoursBundle:Cours")->findOneBy(array('affCours' => '1'), array('datedCours' => 'desc'),1,0);

        return $this->render('siteBundle:Default:index.html.twig', array(
            'lastcours' => $lastcours,
        ));
    }
}
