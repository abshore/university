<?php

namespace Gestion\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\DemoBundle\Entity\Document;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Gestion\UserBundle\Entity\Admin;
use Gestion\UserBundle\Form\AdmineditType;
use Gestion\UserBundle\Form\AdminType;

/**
 * Admin controller.
 *
 */
class AdminController extends Controller
{

    /**
     * Lists all Admin entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GestionUserBundle:Admin')->findAll();

        return $this->render('GestionUserBundle:Admin:index.html.twig', array(
            'entities' => $entities,
            
        ));
    }
    
    /**
     * Lists all Admin entities.
     *
     */
    public function usernameAction()
    {   
        $username='';
        $username=$_POST['username'];
        $choix = $_POST['recherche'];
        $em = $this->getDoctrine()->getManager();
        switch ($choix) {
            case 'username':
                $entities = $em->getRepository('GestionUserBundle:Admin')->findBy(array('username' => $username));

                return $this->render('GestionUserBundle:Admin:username.html.twig', array(
                            'entities' => $entities,));
                break;
            case 'nom':
                $entities = $em->getRepository('GestionUserBundle:Admin')->findBy(array('nom' => $username));

                return $this->render('GestionUserBundle:Admin:username.html.twig', array(
                            'entities' => $entities,));
                break;
            case 'prenom':
                $entities = $em->getRepository('GestionUserBundle:Admin')->findBy(array('prenom' => $username));

                return $this->render('GestionUserBundle:Admin:username.html.twig', array(
                            'entities' => $entities,));
                break;
            case 'email':
               $entities = $em->getRepository('GestionUserBundle:Admin')->findBy(array('email' => $username));

                return $this->render('GestionUserBundle:Admin:username.html.twig', array(
                            'entities' => $entities,));
                break;
            default:
                $entities = $em->getRepository('GestionUserBundle:Admin')->findAll();

        return $this->render('GestionUserBundle:Admin:username.html.twig', array(
            'entities' => $entities,
        ));
        }
        
        
           
            
       
    }
    /**
     * Lists all Admin entities.
     *
     */
    public function indexuserAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GestionUserBundle:User')->findAll();

        return $this->render('GestionUserBundle:Admin:indexuser.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Admin entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Admin();
        $form = $this->createForm(new AdminType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_show', array('id' => $entity->getId())));
        }

        return $this->render('GestionUserBundle:Admin:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Admin entity.
     *
     */
    public function newAction()
    {
        $entity = new Admin();
        $form   = $this->createForm(new AdminType(), $entity);

        return $this->render('GestionUserBundle:Admin:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Admin entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionUserBundle:Admin')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Admin entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionUserBundle:Admin:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Admin entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionUserBundle:Admin')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Admin entity.');
        }

        $editForm = $this->createForm(new AdminType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionUserBundle:Admin:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Admin entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionUserBundle:Admin')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Admin entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new AdminType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_edit', array('id' => $id)));
        }

        return $this->render('GestionUserBundle:Admin:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
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
        $entity = $em->getRepository('GestionUserBundle:Admin')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Admin entity.');
        }

        $editForm = $this->createForm(new AdmineditType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionUserBundle:Admin:editperso.html.twig', array(
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
        $entity = $em->getRepository('GestionUserBundle:Admin')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Admin entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new AdmineditType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_editperso', array('id' => $id)));
        }

        return $this->render('GestionUserBundle:Admin:editperso.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Admin entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionUserBundle:Admin')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Admin entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin'));
    }

    /**
     * Creates a form to delete a Admin entity by id.
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
 * @Template()
 */
public function uploadAction()
{
    $document = new Document();
    $form = $this->createFormBuilder($document)
        ->add('name')
        ->add('file')
        ->getForm()
    ;

    if ($this->getRequest()->isMethod('POST')) {
        $form->bind($this->getRequest());
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
             //$document->upload();
            
            $em->persist($document);
            $em->flush();

            $this->redirect($this->generateUrl('admin'));
        }
    }

    return array('form' => $form->createView());
}

}
