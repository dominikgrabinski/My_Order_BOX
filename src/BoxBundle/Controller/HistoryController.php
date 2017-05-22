<?php

namespace BoxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HistoryController extends Controller
{
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
