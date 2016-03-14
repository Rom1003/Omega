<?php

namespace siteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('siteBundle:Default:index.html.twig');
    }
}
