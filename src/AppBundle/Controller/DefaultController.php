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
        $categories = $this->getDoctrine()->getRepository("AppBundle:Category")->findAll();

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'entries' => $entries,
            'categories' => $categories
        ]);
    }

    /**
     * @Route("/blog/{show}/{slug}", name="showDetail")
     */
    public function showDetailEntryAction($show)
    {
        $entry = $this->getDoctrine()->getRepository("AppBundle:Entries")->findOneById($show);
        $categories = $this->getDoctrine()->getRepository("AppBundle:Category")->findAll();
        $comments = $this->getDoctrine()->getRepository("AppBundle:Comments")->findBy(array("entry" => $show));

        // replace this example code with whatever you need
        return $this->render('default/detailEntry.html.twig',
            array(
                'entry' => $entry,
                'comments' => $comments,
                'categories' => $categories
            ));
    }

    /**
     * @Route("/blog/category/{id}/{category}", name="entriesCategory")
     */
    public function entriesCategoryAction($id,$category)
    {
        $entries = $this->getDoctrine()->getRepository("AppBundle:Entries")->findBy(array('category' => $id));
        $categories = $this->getDoctrine()->getRepository("AppBundle:Category")->findAll();

        // replace this example code with whatever you need
        return $this->render('default/entriesPerCategory.html.twig',
            array(
                'entries' => $entries,
                'categories' => $categories,
                'category' => $category
            ));
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {
        $categories = $this->getDoctrine()->getRepository("AppBundle:Category")->findAll();
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);

        if($form->isValid()){
            die();
        }

        return $this->render(':default:contact.html.twig', array(
            'form' => $form->createView(),
            'categories' => $categories,
        ));

    }


}
