<?php

namespace BoxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CommissionController extends Controller
{
    /**
     * @Route("/test")
     */
    public function testAction()
    {
        return $this->render('BoxBundle:Commission:test.html.twig', array(
            // ...
        ));
    }

}
