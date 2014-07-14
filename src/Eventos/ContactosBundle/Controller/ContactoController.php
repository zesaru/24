<?php

namespace Eventos\ContactosBundle\Controller;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Eventos\ContactosBundle\Entity\Contacto;
use Eventos\ContactosBundle\Form\ContactoType;

/**
 * Contacto controller.
 *
 */
class ContactoController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

       
        $entities = $em->getRepository('ContactosBundle:Contacto')->findAll();
    

        return $this->render('ContactosBundle:Contacto:index.html.twig', array(
            'entities' => $entities,
        ));
    }


    public function inicioAction()
    {
        $em = $this->getDoctrine()->getManager();

       
        $entities = $em->getRepository('ContactosBundle:Contacto')->findAll();
    

        return $this->render('ContactosBundle:Contacto:index.html.twig', array(
            'entities' => $entities,
        ));
    }


    public function indexAction2()
    {
        $em = $this->getDoctrine()->getManager();

        $paginador = $this->get('ideup.simple_paginator');
        $paginador->setItemsPerPage(20);
        $paginador->setMaxPagerItems(20);


        $entities = $paginador->paginate(
        $em->getRepository('ContactosBundle:Contacto')->queryTodosLosContactos()
        )->getResult();

        //$entities = $em->getRepository('ContactosBundle:Contacto')->findTodosLosContactos();

        return $this->render('ContactosBundle:Contacto:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Contacto entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Contacto();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('contacto_show', array('id' => $entity->getId())));
        }

        return $this->render('ContactosBundle:Contacto:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Contacto entity.
     *
     * @param Contacto $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Contacto $entity)
    {
        $form = $this->createForm(new ContactoType(), $entity, array(
            'action' => $this->generateUrl('contacto_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Contacto entity.
     *
     */
    public function newAction()
    {
        $entity = new Contacto();
        $form   = $this->createCreateForm($entity);

        return $this->render('ContactosBundle:Contacto:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Contacto entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ContactosBundle:Contacto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contacto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ContactosBundle:Contacto:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Contacto entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ContactosBundle:Contacto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contacto entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ContactosBundle:Contacto:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Contacto entity.
    *
    * @param Contacto $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Contacto $entity)
    {
        $form = $this->createForm(new ContactoType(), $entity, array(
            'action' => $this->generateUrl('contacto_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Contacto entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ContactosBundle:Contacto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contacto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('contacto'));
        }

        return $this->render('ContactosBundle:Contacto:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Contacto entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ContactosBundle:Contacto')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Contacto entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('contacto'));
    }

    /**
     * Creates a form to delete a Contacto entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contacto_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
