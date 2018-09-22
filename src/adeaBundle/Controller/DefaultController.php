<?php

namespace adeaBundle\Controller;
use AppBundle\Entity\idea;
use AppBundle\Form\ideaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/idea")
     */
    public function indexAction()
    {   $idea = new idea();
        $form = $this->createForm(ideaType::class,$idea);
        return $this->render('@adea/Default/index.html.twig',array('form' => $form->createView() ));

    }
}
