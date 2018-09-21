<?php

namespace adeaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/adea")
     */
    public function indexAction()
    {
        return $this->render('@adea/Default/index.html.twig');
    }
}
