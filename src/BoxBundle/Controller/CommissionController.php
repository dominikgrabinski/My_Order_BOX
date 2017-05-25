<?php

namespace BoxBundle\Controller;

use BoxBundle\Entity\Commission;
use BoxBundle\Entity\History;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

/**
 * Commission controller.
 *
 * @Route("commission")
 */
class CommissionController extends Controller
{
    /**
     * Lists all commission entities.
     *
     * @Route("/", name="commission_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $commissions = $em->getRepository('BoxBundle:Commission')->findAll();

        return $this->render('commission/index.html.twig', array(
            'commissions' => $commissions,
        ));
    }

    /**
     * Creates a new commission entity.
     *
     * @Route("/new", name="commission_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $commission = new Commission();
        $form = $this->createForm('BoxBundle\Form\CommissionType', $commission);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($commission);
            $em->flush();


            return $this->redirectToRoute('commission_show', array('id' => $commission->getId()));
        }

        return $this->render('commission/new.html.twig', array(
            'commission' => $commission,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a commission entity.
     *
     * @Route("/{id}", name="commission_show")
     * @Method("GET")
     */
    public function showAction(Commission $commission)
    {
        $deleteForm = $this->createDeleteForm($commission);

        return $this->render('commission/show.html.twig', array(
            'commission' => $commission,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing commission entity.
     *
     * @Route("/{id}/edit", name="commission_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Commission $commission)
    {
        $deleteForm = $this->createDeleteForm($commission);
        $editForm = $this->createForm('BoxBundle\Form\CommissionType', $commission);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('commission_edit', array('id' => $commission->getId()));
        }

        return $this->render('commission/edit.html.twig', array(
            'commission' => $commission,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a commission entity.
     *
     * @Route("/{id}", name="commission_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Commission $commission)
    {
        $form = $this->createDeleteForm($commission);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($commission);
            $em->flush();
        }

        return $this->redirectToRoute('commission_index');
    }

    /**
     * Creates a form to delete a commission entity.
     *
     * @param Commission $commission The commission entity
     *
     * @return Form The form
     */
    private function createDeleteForm(Commission $commission)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('commission_delete', array('id' => $commission->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
