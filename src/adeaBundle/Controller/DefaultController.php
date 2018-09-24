<?php

namespace adeaBundle\Controller;
use AppBundle\Entity\idea;
use AppBundle\Entity\User;
use AppBundle\Form\ideaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    /**
     * @Route("/idea")
     */
    public function show_formAction()
    {   $idea = new idea();
        $form = $this->createForm(ideaType::class,$idea,array('action'=>$this->generateUrl('addidea')));
        return $this->render('@adea/Default/index.html.twig',array('form' => $form->createView() ));

    }

    /**
     * @Route("/addidea", name="addidea")
     */
    public function addideaAction(Request $request)
    { $idea = new idea();
      $form = $this->createForm(ideaType::class,$idea);
      $form->handleRequest($request);
      if($form->isRequired() && $form->isValid()) {
          $session = $request->getSession();


          $user = $this->getUser();
          dump($user);
          $idea->setIdUser($user);
          $idea->setAddDate(date_create(date('Y-m-d H:i:s',time())));
          $idea->setVisibility(1);
          $idea->setStatus(1);

          $doctrine = $this->get('doctrine');
          $rep = $doctrine->getRepository('AppBundle:idea');
          $manager = $doctrine->getManager();

        $manager->persist($idea);
         $manager->flush();

//        return $this->forward('databaseBundle:Default:findall');
          dump($idea);
          die();
      }
    }
}
