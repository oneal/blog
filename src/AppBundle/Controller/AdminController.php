<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Entries;
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
    public function adminEntiesAction(Request $request)
    {
        $this->redirectToLogin($request);

        $entries = new Entries();
        $em = $this->getDoctrine()->getRepository('AppBundle:Category');
        $categories = $em->findAll();
        $categories->
        $entriesType = new EntriesType($categories);
        $form = $this->createForm(EntriesType::class, $entries);

        $form->handleRequest($request);

        if($form->isValid()){
            die();
        }

        // replace this example code with whatever you need
        return $this->render(':admin:entries.html.twig', array(
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
