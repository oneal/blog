<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Form\Login;
use AppBundle\Form\LoginType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function accessAction(Request $request)
    {
        $user = new Login();
        $form = $this->createForm(LoginType::class, $user);

        $form->handleRequest($request);

        if($form->isValid())
        {
            die();
        }

        return $this->render("login/login.html.twig", array(
            'form' => $form->createView(),
        ));

    }

    /**
     * @Route("/logged", name="logged")
     */
    public function validUserAction(Request $request)
    {
        return new Response("hola");
    }
}
