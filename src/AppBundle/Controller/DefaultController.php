<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\EntityForFormA;
use AppBundle\Entity\EntityForFormB;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
            $entityA = new EntityForFormA();
            $entityB = new EntityForFormB();

            $formA = $this->createForm('AppBundle\Form\FormAType',$entityA);
            $formC = $this->createForm('AppBundle\Form\FormCType',array('entity_a'=>$entityA,'entity_b'=>$entityB));


            $formA->handleRequest($request);
            $formC->handleRequest($request);



            if ($formA->isSubmitted() && $formA->isValid()) {
                // ... perform some action, such as saving the task to the database


                return $this->redirectToRoute('task_success');
            }

            if ($formC->isSubmitted() && $formC->isValid()) {
                // ... perform some action, such as saving the task to the database


                return $this->redirectToRoute('task_success');
            }


        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        'form_a'=>$formA->createView(),
        'form_c'=>$formC->createView()]);
    }
}
