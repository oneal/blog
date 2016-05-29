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
        if($this->redirectToLogin($request)){
            return $this->redirectToRoute('login');
        }

        // replace this example code with whatever you need
        return $this->render(':admin:index.html.twig');
    }

    /**
     * @Route("/admin/entries", name="adminEntries")
     */
    public function viewEntriesAction(Request $request)
    {
        if($this->redirectToLogin($request)){
            return $this->redirectToRoute('login');
        }

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
        if($this->redirectToLogin($request)){
            return $this->redirectToRoute('login');
        }

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
        if($this->redirectToLogin($request)){
            return $this->redirectToRoute('login');
        }

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
        if($this->redirectToLogin($request)){
            return $this->redirectToRoute('login');
        }

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

    /**
     * @Route("/admin/edit", name="adminEditEntry")
     */
    public function editEntryAdmin(Request $request)
    {
        if($this->redirectToLogin($request)){
            return $this->redirectToRoute('login');
        }

        $id = $request->query->get('id');

        $em = $this->getDoctrine()->getManager();
        $entry = $em->getRepository("AppBundle:Entries")->findBy(array('id' => $id));

        $entries = new Entries();
        $entries = $entry[0];

        $form = $this->createForm(EntriesType::class,$entries);

        $form->handleRequest($request);

        if($form->isValid()){
            $entry = $form->getData();
            $em->flush();
        }

        return $this->render(':admin:edit_entries.html.twig', array(
            'form' => $form->createView()
        ));

    }

    /**
     * @Route("/admin/delete", name="adminDelEntry")
     */
    public function adminDelEntry(Request $request)
    {
        if($this->redirectToLogin($request))
        {
            return $this->redirectToRoute("login");
        }

        $id = $request->query->get('id');


        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository("AppBundle:Entries");
        $entry = $repository->findBy(array('id' => $id));

        $em->remove($entry[0]);
        $em->flush();

        $entries = $repository->findAll();



        return $this->render(':admin:entries.html.twig', array('entries' => $entries));
    }

    private function redirectToLogin(Request $request)
    {
        $session = $request->getSession();

        if($session->get('username') == null){
            return true;
        }
        return null;
    }
}
