<?php

namespace Gestion\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gestion\UserBundle\Entity\Etudiant;
use Gestion\UserBundle\Form\EtudiantType;

/**
 * Etudiant controller.
 *
 */
class EtudiantController extends Controller
{

    /**
     * Lists all Etudiant entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GestionUserBundle:Etudiant')->findAll();

        return $this->render('GestionUserBundle:Etudiant:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Etudiant entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Etudiant();
        //$form = $this->createForm(new EtudiantType(), $entity);
        
        $roles_choices = array();

        $roles = $this->container->getParameter('security.role_hierarchy.roles');

# set roles array, displaying inherited roles between parentheses
        foreach ($roles as $role => $inherited_roles) {
            foreach ($inherited_roles as $id => $inherited_role) {
                if (!array_key_exists($inherited_role, $roles_choices)) {
                    $roles_choices[$inherited_role] = $inherited_role;
                }
            }

            if (!array_key_exists($role, $roles_choices)) {
                $roles_choices[$role] = $role . ' (' .
                        implode(', ', $inherited_roles) . ')';
            }
        }

# todo: set $role as the current role of the user

        $form  = $this->createForm(
                new EtudiantType(array(
                    # pass $roles to the constructor
                    'roles' => $roles_choices,
                    'role' => $role
                )), $entity);
        /**********************/
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('etudiant_show', array('id' => $entity->getId())));
        }

        return $this->render('GestionUserBundle:Etudiant:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Etudiant entity.
     *
     */
    public function newAction()
    {
        $entity = new Etudiant();
     //   $form   = $this->createForm(new EtudiantType(), $entity);
        
        $roles_choices = array();

        $roles = $this->container->getParameter('security.role_hierarchy.roles');

# set roles array, displaying inherited roles between parentheses
        foreach ($roles as $role => $inherited_roles) {
            foreach ($inherited_roles as $id => $inherited_role) {
                if (!array_key_exists($inherited_role, $roles_choices)) {
                    $roles_choices[$inherited_role] = $inherited_role;
                }
            }

            if (!array_key_exists($role, $roles_choices)) {
                $roles_choices[$role] = $role . ' (' .
                        implode(', ', $inherited_roles) . ')';
            }
        }

# todo: set $role as the current role of the user

        $form  = $this->createForm(
                new EtudiantType(array(
                    # pass $roles to the constructor
                    'roles' => $roles_choices,
                    'role' => $role
                )), $entity);
        /**********************/

        return $this->render('GestionUserBundle:Etudiant:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Etudiant entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionUserBundle:Etudiant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Etudiant entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionUserBundle:Etudiant:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Etudiant entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionUserBundle:Etudiant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Etudiant entity.');
        }

       // $editForm = $this->createForm(new EtudiantType(), $entity);
        $deleteForm = $this->createDeleteForm($id);
         /************************/
        
        $roles_choices = array();

        $roles = $this->container->getParameter('security.role_hierarchy.roles');

# set roles array, displaying inherited roles between parentheses
        foreach ($roles as $role => $inherited_roles) {
            foreach ($inherited_roles as $id => $inherited_role) {
                if (!array_key_exists($inherited_role, $roles_choices)) {
                    $roles_choices[$inherited_role] = $inherited_role;
                }
            }

            if (!array_key_exists($role, $roles_choices)) {
                $roles_choices[$role] = $role . ' (' .
                        implode(', ', $inherited_roles) . ')';
            }
        }

# todo: set $role as the current role of the user

        $editForm  = $this->createForm(
                new EtudiantType(array(
                    # pass $roles to the constructor
                    'roles' => $roles_choices,
                    'role' => $role
                )), $entity);
        /**********************/

//$editForm = $this->createForm(new EtudiantType(), $entity, array('roles' => $this->container->getParameter('security.role_hierarchy.roles')));
        return $this->render('GestionUserBundle:Etudiant:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Etudiant entity.
     *
     */
    public function updateAction(Request $request, $id)
    {   $ide=$id;
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionUserBundle:Etudiant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Etudiant entity.');
        }
     
       $roles_choices = array();

        $roles = $this->container->getParameter('security.role_hierarchy.roles');
# set roles array, displaying inherited roles between parentheses
        foreach ($roles as $role => $inherited_roles) {
            foreach ($inherited_roles as $id => $inherited_role) {
                if (!array_key_exists($inherited_role, $roles_choices)) {
                    $roles_choices[$inherited_role] = $inherited_role;
                }
            }

            if (!array_key_exists($role, $roles_choices)) {
                $roles_choices[$role] = $role . ' (' .
                        implode(', ', $inherited_roles) . ')';
            }
        }
        
        $deleteForm = $this->createDeleteForm($id);
        //$editForm = $this->createForm(new EtudiantType(), $entity);
         $editForm  = $this->createForm(
                new EtudiantType(array(
                    # pass $roles to the constructor
                    'roles' => $roles_choices,
                    'role' => $role
                )), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('etudiant_edit', array('id' => $ide)));
        }

        return $this->render('GestionUserBundle:Etudiant:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Etudiant entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionUserBundle:Etudiant')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Etudiant entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('etudiant'));
    }

    /**
     * Creates a form to delete a Etudiant entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
