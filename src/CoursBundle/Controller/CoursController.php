<?php

namespace CoursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CoursBundle\Entity\Cours;
use CoursBundle\Form\coursType;
use Symfony\Component\HttpFoundation\Request;

class CoursController extends Controller
{
    public function addAction(Request $request)
    {
        $cours = new Cours();
        $cours->setDatedCours(new \Datetime());
        $form=$this->createForm(new coursType, $cours);

        $form->handleRequest($request);
        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($cours);
            $em->flush();
        return $this->redirectToRoute('cours_liste');
        }
        return $this->render('CoursBundle:Default:addcours.html.twig', array('form' => $form->createView(),));
    }


    public function chapitresAction($idCours, $order)
    {
        $em = $this->getDoctrine()->getManager();
        $cours=$em->getRepository("CoursBundle:Cours")->find($idCours);
        $chapitre=$em->getRepository("CoursBundle:Chapitres")->findOneBy(array('order' => $order, 'cours' => $idCours ));
        $souschapitres=$em->getRepository("CoursBundle:SousChapitres")->findBy(array('chapitres' => $chapitre));
        $listechapitres=$em->getRepository("CoursBundle:Chapitres")->findBy(array('cours' => $idCours));
        $listesouschapitres=$em->getRepository("CoursBundle:SousChapitres")->findBy(array('chapitres' => $listechapitres), array('order'=> 'asc'));


        if (!$cours) {
            throw $this->createNotFoundException('Le cours demandé n\'existe pas');
        }

        if (!$chapitre || !$listesouschapitres) {
            throw $this->createNotFoundException('Le chapitre demandé n\'existe pas');
        }




        return $this->render('CoursBundle:Default:cours.html.twig',
            array(
                'cours' => $cours,
                'chapitre' => $chapitre,
                'souschapitres' => $souschapitres,
                'listechapitres' => $listechapitres,
                'listesouschapitres' => $listesouschapitres,
            ));
    }
}

