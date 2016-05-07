<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Entity\Entries;
use AppBundle\Form\CategoryType;
use AppBundle\Form\EntriesType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    /**
     * @Route("/admin", name="adminHompage")
     */
    public function indexAction(Request $request)
    {
        $this->redirectToLogin($request);

        // replace this example code with whatever you need
        return $this->render(':admin:index.html.twig');
    }

    /**
     * @Route("/admin/entries", name="adminEntries")
     */
    public function viewEntriesAction(Request $request)
    {
        $this->redirectToLogin($request);

        $em = $this->getDoctrine()->getRepository("AppBundle:Entries");
        $entries = $em->findAll();

        // replace this example code with whatever you need
        return $this->render(':admin:entries.html.twig', array('entries' => $entries));
    }



    /**
     * @Route("/admin/categories", name="adminCategories")
     */
    public function viewCategoriesAction(Request $request)
    {
        $this->redirectToLogin($request);

        $em = $this->getDoctrine()->getRepository("AppBundle:Category");
        $categories = $em->findAll();

        // replace this example code with whatever you need
        return $this->render(':admin:categories.html.twig', array('categories' => $categories));
    }

    /**
     * @Route("/admin/create/entries", name="createEntries")
     */
    public function createEntiesAction(Request $request)
    {
        $this->redirectToLogin($request);

        $entries = new Entries();
        $form = $this->createForm(EntriesType::class,$entries);

        $form->handleRequest($request);

        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($form->getData());
            $em->flush();
        }

        // replace this example code with whatever you need
        return $this->render(':admin:create_entries.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/admin/create/categories", name="createCategories")
     */
    public function createCategoriesAction(Request $request)
    {
        $this->redirectToLogin($request);

        $category = new Category();
        $form = $this->createForm(CategoryType::class,$category);

        $form->handleRequest($request);

        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($form->getData());
            $em->flush();
        }

        // replace this example code with whatever you need
        return $this->render(':admin:create_categories.html.twig', array(
            'form' => $form->createView()
        ));
    }

    private function redirectToLogin(Request $request){
        $session = $request->getSession();

        if(!$session->isStarted()){
            return $this->redirect($this->generateUrl('login'));
        }
    }
}
