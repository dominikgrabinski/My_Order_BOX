<?php

namespace BoxBundle\Controller;

use BoxBundle\Entity\History;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

class HistoryController extends Controller
{
    public function newHistory(){
        $history = new History();
        $form = $this->createForm('BoxBundle\Form\CommissionType', $history);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($history);
            $em->flush();
        }
    }

    
    /**
     * @Route("/history")
     */
    public function historyAction()
    {
        return $this->render('BoxBundle:History:history.html.twig', array(
            // ...
        ));
    }

}
