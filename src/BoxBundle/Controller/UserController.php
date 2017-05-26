<?php

namespace BoxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use BoxBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('BoxBundle:Default:index.html.twig');
    }
    /**
     * @Route("/user")
     */
    public function userAction()
    {
        $user = $this->getUser()->getId();

        $em = $this->getDoctrine()->getManager();
        if ($this->get('security.context')->isGranted('ROLE_ADMIN')){
            $query = $em->createQuery('SELECT commission FROM BoxBundle:Commission commission WHERE commission.admin ='.$user);
        }else{
            $query = $em->createQuery('SELECT commission FROM BoxBundle:Commission commission WHERE commission.user ='.$user);    
        }
        $commision = $query->getResult();
        
        return $this->render('BoxBundle:User:user.html.twig', array(
                'commision' => $commision 
        ));
    }
    
        /**
     * @Route("/adminpanel")
     */
    public function adminAction()
    {
        return $this->render('BoxBundle:User:admin.html.twig', array(
            // ...
        ));
    }

}
