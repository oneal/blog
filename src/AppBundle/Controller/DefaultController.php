<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Form\Contact;
use AppBundle\Form\ContactType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $entries = $this->getDoctrine()->getRepository("AppBundle:Entries")->findAll();

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'entries' => $entries,
        ]);
    }

    /**
     * @Route("/blog/{show}/{slug}", name="showDetail")
     */
    public function showDetailEntryAction($show)
    {
        $entry = $this->getDoctrine()->getRepository("AppBundle:Entries")->findOneById($show);
        $comments = $this->getDoctrine()->getRepository("AppBundle:Comments")->findBy(array("entry" => $show));

        // replace this example code with whatever you need
        return $this->render('default/detailEntry.html.twig',
            array(
                'entry' => $entry,
                'comments' => $comments,
            ));
    }

    /**
     * @Route("/blog/category/{id}/{category}", name="entriesCategory")
     */
    public function entriesCategoryAction($id,$category)
    {
        $entries = $this->getDoctrine()->getRepository("AppBundle:Entries")->findBy(array('category' => $id));

        // replace this example code with whatever you need
        return $this->render('default/entriesPerCategory.html.twig',
            array(
                'entries' => $entries,
                'category' => $category
            ));
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);

        if($form->isValid()){
            die();
        }

        return $this->render(':default:contact.html.twig', array(
            'form' => $form->createView()
        ));

    }

    public function categoriesAction()
    {
        $categories = $this->getDoctrine()->getRepository("AppBundle:Category")->findAll();

        return $this->render('::_header.html.twig', array(
                'categories' => $categories
            )
        );
    }


}
