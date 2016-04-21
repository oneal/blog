<?php

namespace AppBundle\Controller;

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

        // replace this example code with whatever you need
        return $this->render('default/detailEntry.html.twig', array('entry' => $entry));
    }
}
