<?php

namespace BoxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class StatusController extends Controller
{
    /**
     * @Route("/status")
     */
    public function statusAction()
    {
        return $this->render('BoxBundle:Status:status.html.twig', array(
            // ...
        ));
    }

}
