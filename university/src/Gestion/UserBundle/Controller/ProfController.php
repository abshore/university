<?php

namespace Gestion\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gestion\UserBundle\Entity\Prof;
use Gestion\UserBundle\Form\ProfType;

/**
 * Prof controller.
 *
 */
class ProfController extends Controller
{

    public function usernameAction()
    {   
        $username='';
        $username=$_POST['username'];
        $choix = $_POST['recherche'];
        $em = $this->getDoctrine()->getManager();
        switch ($choix) {
            case 'username':
                $entities = $em->getRepository('GestionUserBundle:Prof')->findBy(array('username' => $username));

                return $this->render('GestionUserBundle:Prof:username.html.twig', array(
                            'entities' => $entities,));
                break;
            case 'nom':
                $entities = $em->getRepository('GestionUserBundle:Prof')->findBy(array('nom' => $username));

                return $this->render('GestionUserBundle:Prof:username.html.twig', array(
                            'entities' => $entities,));
                break;
            case 'prenom':
                $entities = $em->getRepository('GestionUserBundle:Prof')->findBy(array('prenom' => $username));

                return $this->render('GestionUserBundle:Prof:username.html.twig', array(
                            'entities' => $entities,));
                break;
            case 'email':
               $entities = $em->getRepository('GestionUserBundle:Prof')->findBy(array('email' => $username));

                return $this->render('GestionUserBundle:Prof:username.html.twig', array(
                            'entities' => $entities,));
                break;
            default:
                $entities = $em->getRepository('GestionUserBundle:Prof')->findAll();

        return $this->render('GestionUserBundle:Prof:username.html.twig', array(
            'entities' => $entities,
        ));
        }
        
        
           
            
       
    }
    /**
     * Lists all Prof entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GestionUserBundle:Prof')->findAll();

        return $this->render('GestionUserBundle:Prof:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Prof entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Prof();
        $form = $this->createForm(new ProfType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('prof_show', array('id' => $entity->getId())));
        }

        return $this->render('GestionUserBundle:Prof:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Prof entity.
     *
     */
    public function newAction()
    {
        $entity = new Prof();
        $form   = $this->createForm(new ProfType(), $entity);

        return $this->render('GestionUserBundle:Prof:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Prof entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionUserBundle:Prof')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Prof entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionUserBundle:Prof:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Prof entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionUserBundle:Prof')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Prof entity.');
        }

        $editForm = $this->createForm(new ProfType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionUserBundle:Prof:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Prof entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionUserBundle:Prof')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Prof entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ProfType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('prof_edit', array('id' => $id)));
        }

        return $this->render('GestionUserBundle:Prof:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Prof entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionUserBundle:Prof')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Prof entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('prof'));
    }

    /**
     * Creates a form to delete a Prof entity by id.
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
    
       
    
    /**
     * Displays a form to edit an existing Admin entity.
     *
     */
    public function editpersoAction()
    {
        $em = $this->getDoctrine()->getManager();
          $iduser = $this->get('security.context')->getToken()->getUser()->getId();
        $id = '' . $iduser;
        $entity = $em->getRepository('GestionUserBundle:Prof')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Prof entity.');
        }

        $editForm = $this->createForm(new ProfType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionUserBundle:Prof:editperso.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Admin entity.
     *
     */
    public function updatepersoAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
         $iduser = $this->get('security.context')->getToken()->getUser()->getId();
        $id = '' . $iduser;
        $entity = $em->getRepository('GestionUserBundle:Prof')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Prof entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ProfType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('prof_editperso', array('id' => $id)));
        }

        return $this->render('GestionUserBundle:Prof:editperso.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

}
