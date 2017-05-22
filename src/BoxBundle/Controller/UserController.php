<?php

namespace BoxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UserController extends Controller
{
    /**
     * @Route("/user")
     */
    public function userAction()
    {
        return $this->render('BoxBundle:User:user.html.twig', array(
            // ...
        ));
    }

}
